<?php defined('BASEPATH') OR exit('id direct script access allowed');
 
class Hadiah_Model extends CI_Model
{
    private $table = "tb_hadiah";
    private $table1 = "tb_produk";
    private $table2 = "tb_hadiah_level";
    //Read
    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
    public function getAll1()
    {
        return $this->db->get($this->table1)->result();
    }
    public function getAll2()
    {
        return $this->db->get($this->table2)->result();
    }
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    //Update/Edit
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
        return $this->db->get_where($this->table1, ["id" => $id])->row();
        return $this->db->get_where($this->table2, ["id" => $id])->row();
    }
    public function update($data,$id)
    {
        return $this->db->update($this->table, $data, array('id' => $id));
    }	

}