<?php
defined('BASEPATH') OR exit('no direct script access allowed');
 
class Kategori extends CI_Controller {
	//Koneksi Model
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Kategori_model");
        $this->load->library('form_validation');
    }
	//Read
	public function index()
	{
		$data['Kategori'] = $this->Kategori_model->getAll();
		$this->load->view('admin/header');
		$this->load->view('admin/kategori/view_kategori',$data);
		$this->load->view('admin/footer');
	}
	//Create
	public function add()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/kategori/view_kategori_add');
		$this->load->view('admin/footer');
	}

	public function tambah_aksi()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		if ($this->form_validation->run()==true)
        {
			$data['nama'] = $this->input->post('nama');
			$this->Kategori_model->save($data);
			redirect('admin/Kategori');
		}
		else
		{
			$this->load->view('admin/header');
			$this->load->view('admin/kategori/view_kategori_add');
			$this->load->view('admin/footer');
		}
	}
	//Update/Edit
	public function edit($no)
	{
		$data['Kategori'] = $this->Kategori_model->getById($no);
		$this->load->view('admin/header');
		$this->load->view('admin/kategori/view_kategori_edit',$data);
		$this->load->view('admin/footer');
	}
	public function update()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		if ($this->form_validation->run()==true)
        {
		 	$no = $this->input->post('no');
			$data['nama'] = $this->input->post('nama');
			$this->Kategori_model->update($data,$no);
			redirect('admin/Kategori');
		}
		else
		{
			$no = $this->input->post('no');
			$data['Kategori'] = $this->Kategori_model->getById($no);
			$this->load->view('admin/header');
			$this->load->view('admin/kategori/view_kategori_edit',$data);
			$this->load->view('admin/footer');
		}
	}
	//Delete
	public function delete($no)
	{
		$this->Kategori_model->delete($no);
		redirect('admin/Kategori');
	}
	
	
}
