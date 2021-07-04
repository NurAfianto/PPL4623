<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Banner_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['Banner'] = $this->Banner_model->getAll();
		$this->load->view('admin/header');
		$this->load->view('admin/banner/banner',$data);
		$this->load->view('admin/footer');
	}
	
	public function add(){
		$this->load->view('admin/header');
		$this->load->view('admin/banner/banner_add');
		$this->load->view('admin/footer');
	}
	public function tambah_aksi()
	{
		$this->form_validation->set_rules('nama_banner','Nama Banner','required');
		if ($this->form_validation->run()==true)
        {
			$data['nama_banner'] = $this->input->post('nama_banner');
			$data['gambar'] = $this->input->post('gambar');
			$data['keterangan'] = $this->input->post('keterangan');
			$this->Banner_model->save($data);
			redirect('admin/Banner');
		}
		else
		{
			$this->load->view('admin/header');
			$this->load->view('admin/banner/banner_add');
			$this->load->view('admin/footer');
		}
	}
	//Update/Edit
	public function edit($no)
	{
		$data['Banner'] = $this->Banner_model->getById($no);
		$this->load->view('admin/header');
		$this->load->view('admin/banner/banner_edit',$data);
		$this->load->view('admin/footer');
	}
	public function update(){
		$this->form_validation->set_rules('nama_banner','Nama Banner','required');
		$post = $this->input->post(NULL, true);
		// print_r($_FILES['gambar']);
		$this->load->model('Banner_model');
		$config['upload_path']		= "./upload/banner/";
		$config['allowed_types']	= "gif|jpg|png|jpeg";
		$config['max_size']			= 2048;
		$config['file_name']		= 'banner-'.date('ymd').'-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);

		if ($this->form_validation->run()==true)
        {
			if(@$_FILES['gambar']['name'] != null){
				
				if($this->upload->do_upload('gambar')){
					$gambar = $this->Banner_model->getById($post['no'])->gambar;
					$path = 'upload/banner/'.$gambar;
					//print_r($path);

					chmod($path, 0777);
					unlink($path);
					$post['gambar'] = $this->upload->data('file_name');
					$this->Banner_model->update($post,$post['no']);

				}else{
					$gambar = $this->Banner_model->getById($post['no'])->gambar;
					$post['gambar'] =$gambar;
					$this->Banner_model->update($post,$post['no']);
				
				}
			}else{
				$gambar = $this->Banner_model->getById($post['no'])->gambar;
				$post['gambar'] =$gambar;
				$this->Banner_model->update($post,$post['no']);
			}
		
			redirect('admin/Banner');
		}
		else
		{
			$no = $this->input->post('no');
			$data['Banner'] = $this->Banner_model->getById($no);
			$this->load->view('admin/header');
			$this->load->view('admin/banner/banner_edit',$data);
			$this->load->view('admin/footer');
		}
	}
	//Delete
	public function delete($no)
	{
		$this->Banner_model->delete($no);
		redirect('admin/Banner');
	}
	
	
}
