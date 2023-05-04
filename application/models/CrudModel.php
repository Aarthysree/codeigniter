<?php 
class CrudModel extends CI_Model{
    public function saverecords($data){
        $this->db->insert('crud',$data);
        return true;
    }
    public function displayrecord(){
        $query=$this->db->get("crud");
        return $query->result();
    }
}
?>