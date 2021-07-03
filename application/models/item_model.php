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

    public function get_by_kategori($id){
		$this->db->from('tb_produk');
        $this->db->where('id_kategori',$id);
		$query = $this->db->get();
        return $query;
	}

    public function search($key){
		$this->db->from('tb_produk');
        $this->db->like('nama_produk',$key, 'both');
		$query = $this->db->get();
        return $query;
	}
}