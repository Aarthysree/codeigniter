<?php
class ProductModel extends CI_Model{
    public function __construct(){
        $this->load->database();
        $this->load->helper('url');
    }
    public function get_all(){
        $projects=$this->db->get("items")->result();
        return $projects;
    }
    public function store($data){
       
        $result=$this->db->insert('items',$data);
        return $result;
    }
    public function get($id){
       
        $result = $this->db->get_where('items', array('id' => $id))->row();
        return $result;
    }
    public function update($data1,$id){
        $result = $this->db->update('items', $data1, array('id' => $id));
        //$result = $this->db->where('id', $id)->update('ajax_data',$data);
        return $result;
    }
    public function delete($id){
        $result=$this->db->delete('items',array('id'=>$id));
        return $result;
    }
}
?>