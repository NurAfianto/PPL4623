<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_model extends CI_Model
{  
    private $table = "tb_banner";
    //Read
    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
    //Input
	public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    //Update/Edit
    public function getById($no)
    {
        return $this->db->get_where($this->table, ["no" => $no])->row();
    }
    public function update($data,$no)
    {
        return $this->db->update($this->table, $data, array('no' => $no));
    }	
    //Delete
    public function delete($no)
    {
        return $this->db->delete($this->table, array("no" => $no));
    }
    private function _uploadImage()
{
    $config['upload_path']          = './upload/banner/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->no;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}
}