<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		check_not_login();
		check_admin();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/dashboard');
		$this->load->view('user/footer');
	}

	public function d()
	{
		$this->load->view('user/games/flush');
	}

	public function egg()
	{
		$id_user = $_SESSION['userid'];
		$email_user = $_SESSION['email'];
		$name_user = $_SESSION['nama'];
		$tanggal = date('Y-m-d');
		$this->load->model('telur_h_m');
		$check_pecah_h = $this->telur_h_m->check_pecah_harian($id_user,$tanggal);

		if ($check_pecah_h->num_rows()==0){
			// echo $check_login_h->num_rows()==0;
			$this->load->view('user/games/egg');
		}else{
			$this->load->view('user/games/egg_tanya');
		}
	}

	public function egg_open()
	{
		$id_user = $_SESSION['userid'];
		$email_user = $_SESSION['email'];
		$name_user = $_SESSION['nama'];
		$tanggal = date('Y-m-d');
		$this->load->model('telur_h_m');
		$check_pecah_h = $this->telur_h_m->check_pecah_harian($id_user,$tanggal);

		if ($check_pecah_h->num_rows()==0){
			// echo $check_login_h->num_rows()==0;
			$post = [
				'id_user' => $id_user,
				'nama' => $name_user,
				'email' => $email_user,
				'tanggal' => $tanggal,
				'poin' => 5
			];
			$this->telur_h_m->add($post);
			$this->telur_h_m->add_poin($post);
			$post['kode'] = 1;
			
			$poin1 = rand(1,100);
			$poin2 = rand(1,100);
			$poin3 = rand(1,100);
			$poin4 = rand(1,100);
			$poin5 = rand(1,100);
			$poin6 = rand(1,100);
			$poin7 = rand(1,100);
			$poin8 = rand(1,100);
			$poin9 = rand(1,100);
			$data['poin'] = min($poin1,$poin2,$poin3,$poin4,$poin5,$poin6,$poin7,$poin8,$poin9);
			$this->load->view('user/games/egg_open',$data);
		}else{
			$post['kode'] = 1;
			$this->load->view('user/games/egg_tanya');
		}
	}

	public function games()
	{
		$this->load->view('user/header');
		$this->load->view('user/games/games');
		$this->load->view('user/footer');
	}

	public function login_harian()
	{
		$id_user = $_SESSION['userid'];
		$email_user = $_SESSION['email'];
		$name_user = $_SESSION['nama'];
		$tanggal = date('Y-m-d');
		$this->load->model('login_h_m');
		$check_login_h = $this->login_h_m->check_login_harian($id_user,$tanggal);

		if ($check_login_h->num_rows()==0){
			// echo $check_login_h->num_rows()==0;
			$post = [
				'id_user' => $id_user,
				'nama' => $name_user,
				'email' => $email_user,
				'tanggal' => $tanggal,
				'poin' => 5
			];
			$this->login_h_m->add($post);
			$this->login_h_m->add_poin($post);
			$post['kode'] = 1;
		}else{
			$post['kode'] = 1;
		}
		$this->load->view('user/games/login_harian',$post);

	}

	public function cart()
	{
		$this->load->view('user/header');
		$this->load->view('user/cart');
		$this->load->view('user/footer');
	}

	public function hadiah()
	{
		$this->load->model('hadiah_u_m');
		$data['data'] = $this->hadiah_u_m->get();
		// print_r($data['data']->result());
		$this->load->view('user/header');
		$this->load->view('user/hadiah/hadiah',$data);
		$this->load->view('user/footer');
	}

	public function listhadiah()
	{
		$this->load->model('hadiah_u_m');

		$id = $_SESSION['userid'];
		$email = $_SESSION['email'];
		$nama = $_SESSION['nama'];
		$post = $this->input->post(NULL, true);
		if(isset($post['claim'])){
			// echo 'Terklaim';
			$post['status'] = 1;
			$post['datetime'] = date('Y-m-d H:i:s');
			$bol = 0;

			if($post['level'] == 'Bronze' && $post['level_min'] =='Bronze'){
				$bol = 1;
			}else if($post['level_min'] == 'Bronze' && $post['level'] =='Gold'){
				$bol = 1;
			}else if($post['level_min'] == 'Bronze' && $post['level'] =='Platinum'){
				$bol = 1;
			}else if($post['level_min'] == 'Silver' && $post['level'] =='Silver'){
				$bol = 1;
			}else if($post['level_min'] == 'Silver' && $post['level'] =='Gold'){
				$bol = 1;
			}else if($post['level_min'] == 'Silver' && $post['level'] =='Platinum'){
				$bol = 1;
			}else if($post['level_min'] == 'Gold' && $post['level'] =='Gold'){
				$bol = 1;
			}else if($post['level_min'] == 'Gold' && $post['level'] =='Platinum'){
				$bol = 1;
			}else if($post['level_min'] == 'Platinum' && $post['level'] =='Platinum'){
				$bol = 1;
			}

			if($post['poin_min']<$post['poin'] && $bol == 1){
				$query = $this->hadiah_u_m->add_claim($post);
				$post['email'] = $email;
				$post['nama'] = $nama;
				$post['poin'] = $post['poin_min'];
				$query = $this->hadiah_u_m->sub_poin($post);
				redirect('user/dashboard/listhadiah');
			}else{
				// echo 'gagal';
				$this->session->set_flashdata('failed', 'Claim Gagal, Silahkan Cek kembali persyaratan untuk melakukan claim hadiah');
				redirect('user/dashboard/hadiah');
			}
			
			// print_r('Silver' <= 'Gold');
		}else{
			$data['data'] = $this->hadiah_u_m->get_claim($id);
			// print_r($data['data']->result());
			$this->load->view('user/header');
			$this->load->view('user/hadiah/listhadiah',$data);
			$this->load->view('user/footer');
		}
		
		
	}
	
}
