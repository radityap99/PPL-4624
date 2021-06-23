<?php

class History extends CI_Controller{

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
        $data['history'] = $this->model_history->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/history',$data);
        $this->load->view('templates_admin/footer');
    }

    public function detail($id_history)
    {
        $data['history'] = $this->model_history->ambil_id_history($id_history);
        $data['pesanan'] = $this->model_history->ambil_id_pesanan($id_history);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_history',$data);
        $this->load->view('templates_admin/footer');
    }
}
?>