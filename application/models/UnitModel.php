<?php
class UnitModel extends CI_Model{
    public function get_units() {
    
        $query = $this->db->get('units');
        return $query->result();
    }
    public function insert($data){
        $result = $this->db->insert('units',$data);
        return $result;
    }

    public function update($data1,$id){
        $result = $this->db->update('units', $data1, array('id' => $id));
        //$result = $this->db->where('id', $id)->update('units',$data);
        return $result;
    }

    public function deleteunits($id){
        $result = $this->db->delete('units', ['id' => $id]);
        return $result;
    }
    public function get_records(){
        $result = $this->db->get('units');
        return $result->result();
    }
    public function find_record_by_id($id){
        $result = $this->db->get_where('units', ['id' => $id])->row();
        return $result;
    }
}
?>