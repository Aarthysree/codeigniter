<?php
class User_model extends CI_model{
    public function store($data){
$this->db->insert('user', $data);
return true;
    }
}