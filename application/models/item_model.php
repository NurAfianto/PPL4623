<?php

class Item_model extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_produk');
    }

    public function find($id){
        $result =  $this->db->where('id_produk',$id)
                            ->limit(1)
                            ->get('tb_produk');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }
}