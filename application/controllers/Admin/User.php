<?php
defined('BASEPATH') OR exit('id direct script access allowed');

class User extends CI_Controller 
{
	//Koneksi Model
	public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->library('form_validation');
    }
	//Read
	public function index()
	{
		$data['User'] = $this->User_model->getAll();
		$this->load->view('admin/header');
		$this->load->view('admin/user/view_user',$data);
		$this->load->view('admin/footer');
	}

	//Update/Edit(tambahan database poin)
	public function edit($id)
	{
		$data['User'] = $this->User_model->getById($id);
		$this->load->view('admin/header');
		$this->load->view('admin/User/view_User_edit',$data);
		$this->load->view('admin/footer');
	}
	public function update()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password');
		$this->form_validation->set_rules('level','Level','required');
		$this->form_validation->set_rules('poin','Poin','required');
		if ($this->form_validation->run()==true)
        {
		 	$id = $this->input->post('id');
			$data['nama'] = $this->input->post('nama');
			$data['email'] = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['level'] = $this->input->post('level');
			$data['poin'] = $this->input->post('poin');
			$this->User_model->update($data,$id);
			redirect('admin/User');
		}
		else
		{
			$id = $this->input->post('id');
			$data['User'] = $this->User_model->getById($id);
			$this->load->view('admin/header');
			$this->load->view('admin/User/view_user_edit',$data);
			$this->load->view('admin/footer');
		}
	}
	//Delete
	public function delete($id)
	{
		$this->User_model->delete($id);
		redirect('admin/User');
	}
	
	
}
