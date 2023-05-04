<?php
class RegisterModel extends CI_Model
{

    function add_record($values)
    {
        $result=$this->db->insert('register',$values);
        return($result);
    }
    function display_all()
    {
        $query=$this->db->get('register');
        return($query->result());
    }
    
}
?>