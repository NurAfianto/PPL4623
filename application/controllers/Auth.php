<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function login(){
		check_admin();
		check_user();
		$this->load->view('auth/login');
	}

	public function process(){
		$post = $this->input->post(NULL, true);
		if(isset($post['email']) && isset($post['password'])){
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			// $query = $this->user_m->get();
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
					'userid' => $row->id,
					'nama' => $row->nama,
					'email' => $row->email,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Login Sukses');
					window.location='".site_url('admin/home')."'
					</script>";
			}else{
				echo "<script>
					alert('Login Gagal');
					window.location='".site_url('auth/login')."'
					</script>";
			}
		}
	}

	public function logout(){
		$params = array('userid', 'level');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}

	public function register(){
		check_admin();
		check_user();
		$post = $this->input->post(NULL, true);
		if(isset($post['register'])){
			$this->load->model('user_m');
			$rand = substr(md5(microtime()),rand(0,26),6);
			$post['recovery_code'] = $rand;
			$query = $this->user_m->add($post);
			if($this->db->affected_rows() > 0){
				$query = $this->user_m->add_user($post);
				redirect('auth/recovery?r='.$rand);
			}else{
				echo "<script>
					alert('Registrasi Gagal');
					window.location='".site_url('auth/register')."'
					</script>";
			}
			
		}else{
			$this->load->view('auth/register');
		}
	}

	public function recovery(){
		$data['recovery'] =  $_GET['r'];
		$this->load->view('auth/recovery_code', $data);
	}

	public function forgot_password(){
		$post = $this->input->post(NULL, true);
		if(isset($post['submit'])){
			$this->load->model('user_m');
			$data['row'] = $this->user_m->get_by_recovery($post['recovery'])->row();
			if($data['row']!=null){
				// print_r($data['row']->id_user);
				$this->load->view('auth/forgot_pass2',$data);
			}else{
				echo "<script>
					alert('Recovery Code Salah');
					window.location='".site_url('auth/forgot_password')."'
					</script>";
			}
		}else{
			$this->load->view('auth/forgot_pass');
		}
	}

	public function reset_password(){
		$post = $this->input->post(NULL, true);
		if($post['password']==$post['con_password']){
			$this->load->model('user_m');
			$this->user_m->edit_pass($post);
			if($this->db->affected_rows() > 0){
				echo "<script>
					alert('Password Berhasil Diubah');
					window.location='".site_url('auth/login')."'
					</script>";
			}else{
				echo "<script>
					alert('Password Gagal Diubah');
					window.location='".site_url('auth/forgot_password')."'
					</script>";
			}
		}else{
			echo "<script>
					alert('Periksa Kembali Password Anda');
					window.location='".site_url('auth/forgot_password')."'
					</script>";
		}
	}
}
