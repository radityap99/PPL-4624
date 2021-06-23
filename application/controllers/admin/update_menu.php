<?php

class update_menu extends CI_Controller{

    public function __construct()
    {
        parent ::__construct();
        if($this->session->userdata('username') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
            Anda Belum Login !!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
          redirect('auth/login');
        }
    }

    public function index()
    {
        $data['update'] = $this->model_menu->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/update_menu', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_menu  = $this->input->post('nama_menu');
        $keterangan = $this->input->post('keterangan');
        $harga      = $this->input->post('harga');
        $gambar     = $_FILES['gambar']['name'];

        if($gambar = ''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_type'] = 'jpg|jpeg|png|gif';
            $config ['file_name']   = $this->uploads;
            $config ['overwrite']   = true;

            $this->load->library('upload', $config);

            if($this->upload->do_upload('gambar')){
                echo "Gambar gagal diupload";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array (
            'nama_menu'     => $nama_menu,
            'keterangan'    => $keterangan,
            'harga'         => $harga,
            'gambar'        => $gambar
        );

        $this->model_menu->tambahmenu($data, 'tb_menu');
        redirect('admin/update_menu/index');

        return "default.jpg";
    }

    public function edit($id)
    {
        $where = array ('id_menu' =>$id);
        $data['menu'] = $this->model_menu->edit_menu($where, 'tb_menu')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_menu', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id             =$this->input->post('id_menu');
        $nama_menu      =$this->input->post('nama_menu');
        $keterangan     =$this->input->post('keterangan');
        $harga          =$this->input->post('harga');

        $data = array(
            'nama_menu'     => $nama_menu,
            'keterangan'    => $keterangan,
            'harga'         => $harga,
        );
        $where = array(
            'id_menu'   => $id
        );
        $this->model_menu->update_data($where,$data,'tb_menu');
        redirect('admin/update_menu/index');
    }

    public function hapus ($id){
        $where = array('id_menu' => $id);
        $this->model_menu->hapus_data($where, 'tb_menu');
        redirect('admin/update_menu/index');
    }
}