<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hadiah extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/hadiah/hadiah');
		$this->load->view('admin/footer');
	}
	
	public function add(){
		$this->load->view('admin/header');
		$this->load->view('admin/hadiah/hadiah_add');
		$this->load->view('admin/footer');
	}

	public function edit(){
		$this->load->view('admin/header');
		$this->load->view('admin/hadiah/hadiah_edit');
		$this->load->view('admin/footer');
	}

}
