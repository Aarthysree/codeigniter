<?php
class UserModel extends CI_Model{
    public function registerUser($data){
$this->db->insert('register', $data);
return true;
    }
}