<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hadiah_u_m extends CI_Model {

	public function get(){
		
		$this->db->select('tb_hadiah.*, tb_produk.gambar');
		$this->db->from('tb_hadiah');
		$this->db->join('tb_produk', 'tb_hadiah.produk = tb_produk.nama_produk');
		$query = $this->db->get();
        return $query;
	}

	public function get_claim($id=null){
		$this->db->select('tb_claim_hadiah.*, tb_hadiah.poin, tb_hadiah.produk');
		$this->db->from('tb_claim_hadiah');
		$this->db->join('tb_hadiah', 'tb_hadiah.id = tb_claim_hadiah.id_hadiah');
		if($id!=null){
			$this->db->where('id_user',$id);
		}
		$this->db->order_by('datetime', 'DESC');
		$query = $this->db->get();
        return $query;
	}

	public function add($post){
		$params = [
			'id_user' => $post['id_user'],
			'tanggal' => $post['tanggal'],
			'poin' => $post['poin']
		];
		$this->db->insert('tb_hadiah', $params);
	}

	public function add_claim($post){
		$params = [
			'id_hadiah' => $post['id_hadiah'],
			'id_user' => $post['id_user'],
			'status' => $post['status'],
			'datetime' => $post['datetime']
		];
		$this->db->insert('tb_claim_hadiah', $params);
	}

	public function add_poin($post){
		$poin = $post['poin'];
		$nama = $post['nama'];
		$email = $post['email'];
		$query = $this->db->query("UPDATE `tb_user_detail` SET `poin`=`poin`+$poin, `poin_earned` = `poin_earned`+$poin WHERE `nama` ='$nama' AND `email` = '$email'");
		return $query;
	}

	public function sub_poin($post){
		$poin = $post['poin'];
		$nama = $post['nama'];
		$email = $post['email'];
		$query = $this->db->query("UPDATE `tb_user_detail` SET `poin`=`poin`-$poin WHERE `nama` ='$nama' AND `email` = '$email'");
		return $query;
	}

}
