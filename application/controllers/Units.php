<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Units extends CI_Controller{
    public function __construct()
    {
       parent::__construct();
       $this->load->model('UnitModel');
    }
    public function index(){
        $query = $this->db->query('SELECT * FROM `units`');
        $data['result']= $query->result_array();
        $this->load->view('viewunits',$data);
       
    }
    function addunits()
    {
        $this->load->view('addunits');
    }
    function addunits_post()
    {
        print_r($_POST);
        $categoryname = $this->input->post('categoryname');
        $name = $this->input->post('name');
        $status = $this->input->post('status');

        $query = $this->db->query("INSERT INTO `units`(`categoryname`,`name`, `status`) VALUES ('$categoryname','$name','$status')");
        if ($query) {
            $this->session->set_flashdata('inserted', 'yes');
            redirect('units/viewunits');
        } else {
            $this->session->set_flashdata('inserted', 'no');
            redirect('units/addunits');
        }
    }
    //public function store()
//    {
//       $data = array(
//          "name" => $this->input->post('name'),
//          "status" => $this->input->post('status'),
//          );

//       $this->CatModel->insert($data);

//       redirect(base_url('index.php/category'));
//    }
    function editunits($id)
    {
        $data['data'] = $this->UnitModel->find_record_by_id($id);
        $this->load->view('editunits', $data);
    }
    public function update($id)
   {
      $data1 = array(
         "name" => $this->input->post('name'),
         "status" => $this->input->post('status'),
        );

      $this->UnitModel->update($data1, $id);

      redirect(base_url('index.php/units'));
   }
   function viewunits()
   {
       $query = $this->db->query('SELECT * FROM `units`');
       $data['result']= $query->result_array();
       $this->load->view('viewunits',$data);
   }
   function unitview()
   {
       $this->load->view('unitview');
   }
   function deleteunits($id)
   {
       $this->UnitModel->deleteunits($id);

       redirect(base_url('index.php/units'));
   }
   public function status()
{
    
	$id = $this->input->post('id');
	$status = $this->input->post('status');

    
	if($status == '1'){
		$user_status = '0';
        $data = array('status' => $user_status );

        $this->db->where('id',$id);
        $this->db->update('units', $data); 
        return redirect('units');
	}
	else{
		$user_status = '1';
        $data = array('status' => $user_status );

        $this->db->where('id',$id);
        $this->db->update('units', $data); 
        return redirect('units');
	}


   // return redirect('units');
}
}

?>