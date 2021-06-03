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
	public function update()
	{
		$this->form_validation->set_rules('nama_banner','Nama Banner','required');
		if ($this->form_validation->run()==true)
        {
		 	$no = $this->input->post('no');
			$data['nama_banner'] = $this->input->post('nama_banner');
			
			if (!empty($_FILES["gambar"]["nama_banner"])) {
				$this->gambar = $this->_uploadImage();
			} else {
				$this->gambar = $post["old_image"];
			}

			$data['keterangan'] = $this->input->post('keterangan');
			$this->Banner_model->update($data,$no);
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
