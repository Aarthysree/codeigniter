<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller{
    public function __construct()
    {
       parent::__construct();
       $this->load->model('CatModel');
    }
   
    public function index(){
        $this->load->view('dashview');
    }
    function addcategory()
    {
        $this->load->view('addcategory');
    }
    function addcategory_post()
    {
       // print_r($_POST);

        $name = $_POST['name'];
        $status = $_POST['status'];
      
        $query = $this->db->query("INSERT INTO `category`(`name`, `status`) VALUES ('$name','$status')");
       
        if ($query) {
           
            redirect('category/viewcategory');
        } else {
            
            redirect('category/addcategory');
        }
    }
//     public function store()
//    {
//       $data = array(
//          "name" => $this->input->post('name'),
//          "status" => $this->input->post('status'),
//          );

//       $this->CatModel->insert($data);

//       redirect(base_url('index.php/category'));
//    }

    function editcategory($id)
    {
        $data['data'] = $this->CatModel->find_record_by_id($id);
        $this->load->view('editcategory', $data);
    }
    public function update($id)
   {
      $data1 = array(
         "name" => $this->input->post('name'),
         "status" => $this->input->post('status'),
        );

      $this->CatModel->update($data1, $id);

      redirect(base_url('index.php/category'));
   }
    function viewcategory()
    {
        $query = $this->db->query('SELECT * FROM `category`');
        $data['result']= $query->result_array();
        $this->load->view('viewcategory',$data);
    }
    function dashview()
    {
        $this->load->view('dashview');
    }
    
    function deletecategory($id)
    {
        $this->CatModel->deletecategory($id);

        redirect(base_url('index.php/category'));
    }

}