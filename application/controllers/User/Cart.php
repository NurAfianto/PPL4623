<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	public function min_qty($id,$qty){
		$data = array(
            'rowid' => $id,
            'qty'   => $qty-1,
        );
		
		$this->cart->update($data);
		redirect('user/product/detail_cart');
	}

    public function plus_qty($id,$qty){
        $data = array(
            'rowid' => $id,
            'qty'   => $qty+1,
        );
		
		$this->cart->update($data);
		redirect('user/product/detail_cart');
    }

    public function del($id){
        $data = array(
            'rowid' => $id,
            'qty'   => 0
        );
        
        $this->cart->update($data);
		redirect('user/product/detail_cart');
    }

    public function checkout(){
        $isprocessed = $this->Invoice_model->index();
        if($isprocessed!=null){
            $this->cart->destroy();
            redirect('user/resi?invoice='.$isprocessed);
        }else{
            echo"Maaf, Pesanan Anda Gagal diproses";
        }
    }
}
