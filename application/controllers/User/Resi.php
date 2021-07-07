<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resi extends CI_Controller {
	public function index(){
        $this->load->model('Invoice_model');
        $this->load->model('Produk_model');
        $this->load->model('Hadiah_u_m');

        $no_invoice = $_GET['invoice'];
        $id_inv = $this->Invoice_model->get_id_inv($no_invoice)->id;
        $data['data'] = $this->Invoice_model->detail($id_inv)->result();
        $total = 0;
        $poin = 0;
        $post['nama'] = $_SESSION['nama'];
        $post['email'] = $_SESSION['email'];
        
        
        foreach($data['data'] as $items):
            $total += $items->jumlah*$items->harga;
            $id_prod = $items->id_produk;
            $post['poin'] = $this->Produk_model->GetPoinById($id_prod)->row()->poin;
            $this->Hadiah_u_m->add_poin($post);
        endforeach;

        $data['total'] = $total;

        $this->load->view('user/header');
		$this->load->view('user/product/resi', $data);
		$this->load->view('user/footer');
    }
}
