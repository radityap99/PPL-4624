<?php 
    class Dashboard extends CI_Controller{

        public function index()
        {
            $data['menu'] = $this->model_menu->tampil_data()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('dashboard', $data);
            $this->load->view('templates/footer');
        }

        public function tambah_keranjang($id)
        {
            $menu = $this->model_menu->find($id);

            $data = array(
                'id'      => $menu->id_menu,
                'qty'     => 1,
                'price'   => $menu->harga,
                'name'    => $menu->nama_menu
                
        );
        
        $this->cart->insert($data);
        redirect('dashboard');
        }

        public function detail_keranjang()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('keranjang');
            $this->load->view('templates/footer');
        }

        public function hapus_keranjang()
        {
            $this->cart->destroy();
            redirect('dashboard/index');
        }

        public function pembayaran()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pembayaran');
            $this->load->view('templates/footer');
        }

        public function proses_pesanan()
        {
            $is_processed = $this->model_history->index();
            if($is_processed){
                $this->cart->destroy();
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('proses_pesanan');
                $this->load->view('templates/footer');
            } else {
                echo "Maaf, Pesanan Anda Gagal diproses!";
            }

        }
    }