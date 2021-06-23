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
			redirect('admin/produk');
			
		}
		else{
			$this->load->model('kategori_model');
			$data['kategori'] = $this->kategori_model->getAll();
			$this->load->view('admin/header');
			$this->load->view('admin/produk/produk_add',$data);
			$this->load->view('admin/footer');
		}
	}

	public function edit($id=NULL){
		$post = $this->input->post(NULL, true);
		$this->load->model('Produk_model');
		if(isset($post['submit'])){
		$config['upload_path']		= "./upload/product/";
		$config['allowed_types']	= "gif|jpg|png|jpeg";
		$config['max_size']			= 2048;
		$config['file_name']		= 'produk-'.date('ymd').'-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);

		//echo ($post['image'] == null);
			if(@$_FILES['image']['name'] != null){
				if($this->upload->do_upload('image')){
					$gambar = $this->Produk_model->getById($post['id_produk'])->row()->gambar;
					$path = 'upload/product/'.$gambar;
					chmod($path, 0777);
					unlink($path);
					$post['image'] = $this->upload->data('file_name');
					$this->Produk_model->edit($post);
				}else{
					$this->Produk_model->editNoImage($post);
				}
			}else{
				$this->Produk_model->editNoImage($post);
			}
			redirect('admin/produk');


		}
		else{
			$this->load->model('kategori_model');
			$data['kategori'] = $this->kategori_model->getAll();
			$data['row'] = $this->Produk_model->getById($id)->row();
			$this->load->view('admin/header');
			$this->load->view('admin/produk/produk_edit',$data);
			$this->load->view('admin/footer');
		}
	}

	

}
