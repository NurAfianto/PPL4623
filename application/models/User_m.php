<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function login($post){
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('email', $post['email']);
		$this->db->where('password', $post['password']);
		$query = $this->db->get();
		return $query;
	}

	public function get(){
		$this->db->from('tb_user');
		$query = $this->db->get();
        return $query;
	}

	public function add($post){
		$params = [
			'nama' => $post['nama'],
			'email' => $post['email'],
			'password' => $post['password'],
			'no_hp' => $post['no_hp'],
			'alamat' => $post['alamat'],
			'nama_rek' => $post['rekening'],
			'no_rek' => $post['no_rek'],
			'recovery_code' => $post['recovery_code'],
			'level_user' => 'Bronze',
			'poin_earned' => '0',
			'poin' => '0'
		];
		$this->db->insert('tb_user_detail', $params);
	}

	public function add_user($post){
		$params = [
			'nama' => $post['nama'],
			'email' => $post['email'],
			'password' => $post['password'],
			'level' => 2
		];
		$this->db->insert('tb_user', $params);
	}

	public function get_by_recovery($id){
		$this->db->from('tb_user_detail');
		$this->db->where('recovery_code',$id);
		$query = $this->db->get();
        return $query;
	}

	public function edit_pass($post){
		$params = [
			'id_user' => $post['id_user'],
			'password' => $post['password']
		];
		$params2 = [
			'email' => $post['email'],
			'nama' => $post['nama'],
			'password' => $post['password']
		];

		$this->db->where('id_user',$params['id_user']);
		$this->db->update('tb_user_detail',$params);

		$this->db->where('nama',$params2['nama']);
		$this->db->where('email',$params2['email']);
		$this->db->update('tb_user',$params2);

	}

}
