<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/product/view_product');
		$this->load->view('user/footer');
	}
	
}
