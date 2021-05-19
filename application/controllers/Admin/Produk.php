<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/produk/produk');
		$this->load->view('admin/footer');
	}
	
	public function add(){
		$this->load->view('admin/header');
		$this->load->view('admin/produk/produk_add');
		$this->load->view('admin/footer');
	}

	public function edit(){
		$this->load->view('admin/header');
		$this->load->view('admin/produk/produk_edit');
		$this->load->view('admin/footer');
	}

}
