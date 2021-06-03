<?php

class update_menu extends CI_Controller{
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

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
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
    }
}