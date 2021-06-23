<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_model extends CI_Model
{  
    public function index(){
        date_default_timezone_set('Asia/Jakarta');
        $datetime=date("YmdHi");
        $no_inv = $this->invoice_num($datetime,15,"INV-");
        $total = $this->cart->total();
        $tanggal = date('Y-m-d H:i:s');

        $invoice = [
            'no_invoice'    => $no_inv,
            'total'         => $total,
            'tanggal'       => $tanggal,
        ];

        $this->db->insert('tb_invoice',$invoice);
        $id_invoice = $this->db->insert_id();

        // foreach($this->cart->contents() as )
        foreach($this->cart->contents() as $item){
            $data = [
                'id_invoice'    => $id_invoice,
                'id_produk'     => $item['id'],
                'nama_produk'   => $item['name'],
                'jumlah'        => $item['qty'],
                'harga'         => $item['price']
            ];
            $this->db->insert('tb_transaksi',$data);
        }
        return TRUE;
    }

    public function invoice_num ($input, $pad_len = 7, $prefix = null) {
        if ($pad_len <= strlen($input))
            trigger_error('<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate invoice number', E_USER_ERROR);

        if (is_string($prefix))
            return sprintf("%s%s", $prefix, str_pad($input, $pad_len, "0", STR_PAD_LEFT));

        return str_pad($input, $pad_len, "0", STR_PAD_LEFT);
    }    
}