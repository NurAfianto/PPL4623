<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index()
	{
		$this->load->model('Produk_model');
		$data['data']=$this->Produk_model->get()->result();
		// print_r($data['data']);
		$this->load->view('admin/header');
		$this->load->view('admin/produk/produk',$data);
		$this->load->view('admin/footer');
		
	}
	
	public function add(){
		$post = $this->input->post(NULL, true);
		if(isset($post['submit'])){
			$config['upload_path']		= "./upload/product/";
			$config['allowed_types']	= "gif|jpg|png|jpeg";
			$config['max_size']			= 2048;
			$config['file_name']		= 'produk-'.date('ymd').'-'.substr(md5(rand()),0,10);
			$this->load->library('upload', $config);

			if(@$_FILES['image']['name'] != null){
				if($this->upload->do_upload('image')){
					$post['image'] = $this->upload->data('file_name');
					$this->load->model('Produk_model');
					$this->Produk_model->add($post);
					redirect('admin/produk');
	
				}else{
					echo "gagal upload";
				}
			}
			
		}
		else{
			$this->load->view('admin/header');
			$this->load->view('admin/produk/produk_add');
			$this->load->view('admin/footer');
		}
	}

	public function edit(){
		$post = $this->input->post(NULL, true);
		if(isset($post['submit'])){
			if(@$_FILES['image']['name'] != null){
				if($this->upload->do_upload('image')){
					$post['image'] = $this->upload->data('file_name');
					$this->load->model('Produk_model');
					$this->Produk_model->edit($post);
	
				}else{
					echo "gagal upload";
				}
			}

		}
		else{
			$this->load->view('admin/header');
			$this->load->view('admin/produk/produk_edit');
			$this->load->view('admin/footer');
		}
	}

	

}
