<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public function get(){
		$this->db->from('tb_produk');
		$this->db->join('tb_kategori', 'tb_kategori.no = tb_produk.id_kategori');
		$query = $this->db->get();
        return $query;
	}

	public function getById($id){
		$this->db->from('tb_produk');
		$this->db->join('tb_kategori', 'tb_kategori.no = tb_produk.id_kategori');
		$this->db->where('id_produk', $id);
		$query = $this->db->get();
        return $query;
	}

	public function add($post){
		$params = [
			'nama_produk' => $post['nama_produk'],
			'id_kategori' => $post['kategori'],
			'harga' => $post['harga'],
			'poin' => $post['poin'],
			'gambar' => $post['image'],
		];
		$this->db->insert('tb_produk', $params);
	}

	public function edit($post){
		$params = [
			'nama_produk' => $post['nama_produk'],
			'id_kategori' => $post['kategori'],
			'harga' => $post['harga'],
			'poin' => $post['poin'],
			'gambar' => $post['image']
			
		];
		if($post['gambar'] != null ){
			$params['gambar'] = $post['image'];
		}
		$this->db->where('id_produk', $post['id_produk']);
		$this->db->update('tb_produk', $params);
	}

	public function editNoImage($post){
		$params = [
			'nama_produk' => $post['nama_produk'],
			'id_kategori' => $post['kategori'],
			'harga' => $post['harga'],
			'poin' => $post['poin'],
			
		];
		
		$this->db->where('id_produk', $post['id_produk']);
		$this->db->update('tb_produk', $params);
	}


}
