<?php 

class Model_laporan extends CI_Model{
    
    
    public function tampil_data(){
        //return $this->db->get('tb_pesanan');
        $result = $this->db->get('tb_pesanan');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }
}