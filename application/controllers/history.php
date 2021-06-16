<?php

class History extends CI_Controller{
    public function index()
    {
        $data['history'] = $this->model_history->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/history',$data);
        $this->load->view('templates_admin/footer');
    }
}
?>