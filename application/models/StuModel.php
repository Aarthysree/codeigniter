<?php
class StuModel extends CI_Model{
    public function store($data){
        $result = $this->db->insert('ajax',$data);
        return $result;
    }

    public function update($data1,$id){
        $result = $this->db->update('ajax', $data1, array('id' => $id));
        //$result = $this->db->where('id', $id)->update('ajax',$data);
        return $result;
    }

    public function delete($id){
        $result = $this->db->delete('ajax', ['id' => $id]);
        return $result;
    }
    public function get_records(){
        $result = $this->db->get('ajax');
        return $result->result();
    }
    public function find_record_by_id($id){
        $result = $this->db->get_where('ajax', ['id' => $id])->row();
        return $result;
    }
}
?>