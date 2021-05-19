<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/banner/banner');
		$this->load->view('admin/footer');
	}
	
	public function add(){
		$this->load->view('admin/header');
		$this->load->view('admin/banner/banner_add');
		$this->load->view('admin/footer');
	}

	public function edit(){
		$this->load->view('admin/header');
		$this->load->view('admin/banner/banner_edit');
		$this->load->view('admin/footer');
	}

}
