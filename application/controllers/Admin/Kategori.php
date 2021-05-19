<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/kategori/view_kategori');
		$this->load->view('admin/footer');
	}
	
	public function add(){
		$this->load->view('admin/header');
		$this->load->view('admin/kategori/view_kategori_add');
		$this->load->view('admin/footer');
	}

	public function edit(){
		$this->load->view('admin/header');
		$this->load->view('admin/kategori/view_kategori_edit');
		$this->load->view('admin/footer');
	}

}
