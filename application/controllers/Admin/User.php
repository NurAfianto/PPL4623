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

	//Update/Edit
	public function edit($id_user)
	{
		$data['User'] = $this->User_model->getById($id_user);
		$this->load->view('admin/header');
		$this->load->view('admin/User/view_User_edit',$data);
		$this->load->view('admin/footer');
	}
	public function update()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password');
		$this->form_validation->set_rules('no_hp','No_Hp','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('nama_rek','Nama_rek','required');
		$this->form_validation->set_rules('recovery_code','Recovery_code');
		$this->form_validation->set_rules('level_user','Level_user','required');
		$this->form_validation->set_rules('poin_earned','Poin_earned','required');
		$this->form_validation->set_rules('poin','Poin','required');
		if ($this->form_validation->run()==true)
        {
		 	$id_user = $this->input->post('id_user');
			$data['nama'] = $this->input->post('nama');
			$data['email'] = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['no_hp'] = $this->input->post('no_hp');
			$data['alamat'] = $this->input->post('alamat');
			$data['nama_rek'] = $this->input->post('nama_rek');
			$data['no_rek'] = $this->input->post('no_rek');
			$data['recovery_code'] = $this->input->post('recovery_code');
			$data['level_user'] = $this->input->post('level_user');
			$data['poin_earned'] = $this->input->post('poin_earned');
			$data['poin'] = $this->input->post('poin');
			$this->User_model->update($data,$id_user);
			redirect('admin/User');
		}
		else
		{
			$id_user = $this->input->post('id_user');
			$data['User'] = $this->User_model->getById($id_user);
			$this->load->view('admin/header');
			$this->load->view('admin/User/view_user_edit',$data);
			$this->load->view('admin/footer');
		}
	}
	//Delete
	public function delete($id_user)
	{
		$this->User_model->delete($id_user);
		redirect('admin/User');
	}
	
	
}
