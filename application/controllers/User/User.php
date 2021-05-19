<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('user/produk/produk');
	}
	
	public function login(){
		$this->load->view('auth/login');
	}

	public function register(){
		$this->load->view('auth/register');
	}

	public function recovery(){
		$this->load->view('auth/recovery_code');
	}

	public function forgot_password(){
		$this->load->view('auth/forgot_pass');
	}

	public function reset_password(){
		$this->load->view('auth/forgot_pass2');
	}
}
