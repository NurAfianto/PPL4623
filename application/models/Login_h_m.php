<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_h_m extends CI_Model {

	public function get(){
		$this->db->from('tb_login_harian');
		$query = $this->db->get();
        return $query;
	}

	public function check_login_harian($id,$tanggal){
		$this->db->from('tb_login_harian');
		$this->db->where('id_user',$id);
		$this->db->where('tanggal',$tanggal);
		$query = $this->db->get();
        return $query;
	}

	public function add($post){
		$params = [
			'id_user' => $post['id_user'],
			'tanggal' => $post['tanggal'],
			'poin' => $post['poin']
		];
		$this->db->insert('tb_login_harian', $params);
	}

	public function add_poin($post){
		$poin = $post['poin'];
		$nama = $post['nama'];
		$email = $post['email'];
		$query = $this->db->query("UPDATE `tb_user_detail` SET `poin`=`poin`+$poin, `poin_earned` = `poin_earned`+$poin WHERE `nama` ='$nama' AND `email` = '$email'");
		return $query;
	}

}
