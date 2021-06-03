<?php 

class Model_menu extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_menu');
    }

    public function tambahmenu($data,$table){
        $this->db->insert($table,$data);
    }
}