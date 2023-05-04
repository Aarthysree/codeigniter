<?php
class ProModel extends CI_Model{
    public function insert($data){
        $result = $this->db->insert('products',$data);
        return $result;
    }

    public function update($data1,$id){
        $result = $this->db->update('products', $data1, array('id' => $id));
        //$result = $this->db->where('id', $id)->update('products',$data);
        return $result;
    }

    public function deleteproducts($id){
        $result = $this->db->delete('products', ['id' => $id]);
        return $result;
    }
    public function get_records(){
        $result = $this->db->get('products');
        return $result->result();
    }
    public function find_record_by_id($id){
        $result = $this->db->get_where('products', ['id' => $id])->row();
        return $result;
    }
}
?>