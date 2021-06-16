<?php 

class Model_history extends CI_Model{
    public function index ()
    {
        $nama       = $this->input->post('nama');
        $no_meja    = $this->input->post('no_meja');

        $history = array (
            'nama'      => $nama,
            'no_meja'   => $no_meja,
        );
        $this->db->insert('tb_history', $history);
        $id_history = $this->db->insert_id();

        foreach ($this->cart->contents() as $item){
            $data = array(
                'id_history'    => $id_history,
                'id_menu'       => $item['id'],
                'nama_menu'     => $item['name'],
                'jumlah'        => $item['qty'],
                'harga'         => $item['price'],
            );
            $this->db->insert('tb_pesanan', $data);
        }
        return TRUE;
    }

    public function tampil_data()
    {
        $result = $this->db->get('tb_history');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }
}

?>