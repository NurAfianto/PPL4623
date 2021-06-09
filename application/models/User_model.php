<?php defined('BASEPATH') OR exit('id direct script access allowed');
 
class User_model extends CI_Model
{
    private $table = "tb_user_detail";
    //Read
    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
    //Update/Edit
    public function getById($id_user)
    {
        return $this->db->get_where($this->table, ["id_user" => $id_user])->row();
    }
    public function update($data,$id)
    {
        return $this->db->update($this->table, $data, array('id_user' => $id));
    }	
    //Delete
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id_user" => $id));
    }
}