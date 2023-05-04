<?php
class Commodel extends CI_Model
{
    public function getCountries()
    {
        $query = $this->db->get("countries");
        return $query->result();
    }
    public function getstates($country_id)
    {
        $this->db->where('country_id', $country_id);
        $query = $this->db->get("states");
        $output = '<option value="">Select State</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->state_id . '">' . $row->state_name . '</option>';
        }
        return $output;
    }
    function getcities($state_id)
    {
        $this->db->where('state_id', $state_id);
        $query = $this->db->get('cities');
        $output = '<option value="">Select City</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->city_id . '">' . $row->city_name . '</option>';
        }
        return $output;
    }

}


?>