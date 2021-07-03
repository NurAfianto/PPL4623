<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siram_u_m extends CI_Model {

	public function get($id){
		$this->db->from('tb_siram_tanam');
		$this->db->where('id_user',$id);
		$query = $this->db->get();
        return $query;
	}

	public function check_pernah_siram($post){
		$this->db->from('tb_siram_tanam');
		$this->db->where('id_user',$post['id_user']);
		$query = $this->db->get();
        return $query;
	}

	public function check_siram($post){
		$this->db->from('tb_siram_tanam');
		$this->db->where('id_user',$post['id_user']);
		$this->db->where('tanggal',$post['tanggal']);
		$query = $this->db->get();
        return $query;
	}

	public function add($post){
		$params = [
			'id_user' => $post['id_user'],
			'siraman' => $post['siraman'],
			'kekurangan' => $post['kekurangan'],
			'tanggal' => $post['tanggal']
		];
		$this->db->insert('tb_siram_tanam', $params);
	}

	public function update($post){
		$params = [
			'id_user' => $post['id_user'],
			'siraman' => $post['siraman'],
			'kekurangan' => $post['kekurangan'],
			'tanggal' => $post['tanggal']
		];

		$this->db->where('id_user',$params['id_user']);
		$this->db->update('tb_siram_tanam', $params);
	}

	public function set_nol($post){
		$params = [
			'id_user' => $post['id_user'],
			'siraman' => 0,
			'kekurangan' => 300,
			'tanggal' => $post['tanggal']
		];

		$this->db->where('id_user',$params['id_user']);
		$this->db->update('tb_siram_tanam', $params);
	}
}
