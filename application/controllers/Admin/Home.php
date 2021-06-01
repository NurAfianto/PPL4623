<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		check_not_login();
		check_user();
	}

	public function index()
	{

		$this->load->view('admin/header');
        $this->load->view('admin/dashboard');


	}

}
