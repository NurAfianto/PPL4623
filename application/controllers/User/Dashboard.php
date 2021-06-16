<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/dashboard');
		$this->load->view('user/footer');
	}

	public function d()
	{
		$this->load->view('user/games/flush');
	}

	public function cart()
	{
		$this->load->view('user/header');
		$this->load->view('user/cart');
		$this->load->view('user/footer');
	}

	
}
