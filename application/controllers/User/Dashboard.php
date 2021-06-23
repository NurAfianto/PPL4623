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

	public function egg()
	{
		$this->load->view('user/games/egg');
	}

	public function egg_open()
	{
		$data['poin'] = rand(1,100);
		$this->load->view('user/games/egg_open',$data);
	}

	public function games()
	{
		$this->load->view('user/header');
		$this->load->view('user/games/games');
		$this->load->view('user/footer');
	}


	public function cart()
	{
		$this->load->view('user/header');
		$this->load->view('user/cart');
		$this->load->view('user/footer');
	}

	
}
