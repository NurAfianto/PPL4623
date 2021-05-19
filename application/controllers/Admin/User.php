<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/user/view_user');
		$this->load->view('admin/footer');
	}
	

}
