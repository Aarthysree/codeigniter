<?php
class EmpModel extends CI_Model{
    public function insert($data){
        $result = $this->db->insert('black',$data);
        return $result;
    }

    public function update($data1,$id){
        $result = $this->db->update('black', $data1, array('id' => $id));
        //$result = $this->db->where('id', $id)->update('black',$data);
        return $result;
    }

    public function delete($id){
        $result = $this->db->delete('black', ['id' => $id]);
        return $result;
    }
    public function get_records(){
        $result = $this->db->get('black');
        return $result->result();
    }
    public function find_record_by_id($id){
        $result = $this->db->get_where('black', ['id' => $id])->row();
        return $result;
    }
}
?>