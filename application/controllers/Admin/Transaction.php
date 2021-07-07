<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function index()
	{
		$this->load->model('invoice_model');
		$data['data']=$this->invoice_model->get_all()->result();
        // print_r($data['data']);
		$this->load->view('admin/header');
		$this->load->view('admin/transaction/transaction',$data);
		$this->load->view('admin/footer');
	}

    public function detail($id){
        $this->load->model('invoice_model');
        $data['invoice'] = $this->invoice_model->get_id($id);
        $data['transaction'] = $this->invoice_model->get_id_transaction($id);

        $this->load->view('admin/header');
		$this->load->view('admin/transaction/detail',$data);
		$this->load->view('admin/footer');
    }

    public function update($id)
	{
        $this->load->model('invoice_model');
		$this->invoice_model->update_status($id);
        redirect('admin/transaction');
	}
}
