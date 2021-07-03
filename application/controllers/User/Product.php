<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		if(@$_GET['kategori']!=null){
			$data['item'] = $this->item_model->get_by_kategori(@$_GET['kategori'])->result();
		}else{
			$data['item'] = $this->item_model->tampil_data()->result();
		}
		// echo @$kategori;
		// print_r($data['item']);
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
		if(@$_GET['kategori']!=null){
			redirect('user/product?kategori='.@$_GET['kategori']);
		}else{
			redirect('user/product');
		}
	}

	public function detail_cart(){
		$this->load->view('user/header');
		$this->load->view('user/product/cart');
		$this->load->view('user/footer');
	}

}
