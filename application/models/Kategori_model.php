<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Kategori_model extends CI_Model
{
    private $table = "tb_kategori";
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
}