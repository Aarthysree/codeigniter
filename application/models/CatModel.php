<?php
class CatModel extends CI_Model{
    public function get_category() {
    
        $query = $this->db->get('category');
        return $query->result();
    }
    public function insert($data){
        $result = $this->db->insert('category',$data);
        return $result;
    }

    public function update($data1,$id){
        $result = $this->db->update('category', $data1, array('id' => $id));
        //$result = $this->db->where('id', $id)->update('category',$data);
        return $result;
    }

    public function deletecategory($id){
        $result = $this->db->delete('category', ['id' => $id]);
        return $result;
    }
    public function get_records(){
        $result = $this->db->get('category');
        return $result->result();
    }
    public function find_record_by_id($id){
        $result = $this->db->get_where('category', ['id' => $id])->row();
        return $result;
    }
}
?>