<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$data['item'] = $this->item_model->tampil_data()->result();
		$this->load->view('user/header');
		$this->load->view('user/product/view_product',$data);
		$this->load->view('user/footer');
	}
	
	public function add_cart($id){
		$item = $this->item_model->find($id);

		$data = array(
			'id'      => $item->id_produk,
			'qty'     => 1,
			'price'   => $item->harga,
			'name'    => $item->nama_produk,
			'picture' => $item->gambar,
		);
		
		$this->cart->insert($data);
		redirect('user/product');
	}

	public function detail_cart(){
		$this->load->view('user/header');
		$this->load->view('user/product/cart');
		$this->load->view('user/footer');
	}

}
