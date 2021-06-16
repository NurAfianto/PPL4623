<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hadiah extends CI_Controller {

	//Koneksi Model
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Hadiah_model");
        $this->load->library('form_validation');
    }
	//Read
	public function index()
	{
		$data['Hadiah'] = $this->Hadiah_model->getAll();
		$data['Hadiah1'] = $this->Hadiah_model->getAll1();
		$data['Hadiah2'] = $this->Hadiah_model->getAll2();
		$this->load->view('admin/header');
		$this->load->view('admin/hadiah/hadiah',$data);
		$this->load->view('admin/footer');
	}
	//Add
	public function add(){
		$data1['Hadiah1'] = $this->Hadiah_model->getAll1();
		$data1['Hadiah2'] = $this->Hadiah_model->getAll2();
		$this->load->view('admin/header');
		$this->load->view('admin/hadiah/hadiah_add',$data1);
		$this->load->view('admin/footer');
	}

	public function tambah_aksi()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('produk','Produk','required');
		$this->form_validation->set_rules('poin','Poin','required');
		$this->form_validation->set_rules('level','Level','required');
		if ($this->form_validation->run()==true)
        {
			$data['nama'] = $this->input->post('nama');
			$data['produk'] = $this->input->post('produk');
			$data['poin'] = $this->input->post('poin');
			$data['level'] = $this->input->post('level');
			$this->Hadiah_model->save($data);
			redirect('admin/Hadiah');
		}
		else
		{
			$this->load->view('admin/header');
			$this->load->view('admin/hadiah/hadiah_add');
			$this->load->view('admin/footer');
		}
	}
	//Update/Edit
	public function edit($id){
		$data['Hadiah'] = $this->Hadiah_model->getById($id);
		$data['Hadiah1'] = $this->Hadiah_model->getAll1();
		$data['Hadiah2'] = $this->Hadiah_model->getAll2();
		$this->load->view('admin/header');
		$this->load->view('admin/hadiah/hadiah_edit',$data);
		$this->load->view('admin/footer');
	}

	public function update()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('produk','Produk','required');
		$this->form_validation->set_rules('poin','Poin','required');
		$this->form_validation->set_rules('level','Level','required');
		if ($this->form_validation->run()==true)
        {
		 	$id = $this->input->post('id');
			$data['nama'] = $this->input->post('nama');
			$data['produk'] = $this->input->post('produk');
			$data['poin'] = $this->input->post('poin');
		 	$data['level'] = $this->input->post('level');
			$this->Hadiah_model->update($data,$id);
			redirect('admin/hadiah');
		}
		else
		{
			$id = $this->input->post('id');
			$data['Hadiah'] = $this->Hadiah_model->getById($id);
			$this->load->view('admin/header');
			$this->load->view('admin/User/hadiah_edit',$data);
			$this->load->view('admin/footer');
		}
	}

}
