<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Claim extends CI_Controller {

	public function index()
	{
		$this->load->model('hadiah_u_m');
		$data['data']=$this->hadiah_u_m->get_claim()->result();
        // print_r($data['data']);
		$this->load->view('admin/header');
		$this->load->view('admin/claim/claim',$data);
		$this->load->view('admin/footer');
	}

    public function update($id)
	{
        $this->load->model('hadiah_u_m');
		$this->hadiah_u_m->update_status($id);
        redirect('admin/claim');
	}
}
