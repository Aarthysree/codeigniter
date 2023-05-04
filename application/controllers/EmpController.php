<?php
defined('BASEPATH') or exit('No direct script access allowed'); //cannot access any class directly by main path 
class EmpController extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('EmpModel');
   }
   public function index()
   {
      $data['data']=$this->EmpModel->get_records();
      $this->load->view('listemp',$data);
   }
   function show_customers()
   {
      $data = $this->EmpModel->get_records();
      foreach ($data as $row) {
         echo " <tr>";
         echo "<td>". $row->id ."</td>";
         echo "<td>". $row->name."</td>";
         echo "<td>".$row->email."</td>";
         echo "<td>". $row->age."</td>";
         echo "<td>".$row->role."</td>";
         echo "<td><a href=Empcontroller/edit/$row->id>Edit</a></td>";
         echo "<td><a href='Empcontroller/delete/$row->id'>Delete</a></td>";
         echo "</tr>";
      }
   }
   

   public function create()
   {
      $this->load->view('createemp');
   }

   public function store()
   {
      $data = array(
         "name" => $this->input->post('name'),
         "email" => $this->input->post('email'),
         "age" => $this->input->post('age'),
         "role" => $this->input->post('role')
      );

      $this->EmpModel->insert($data);

      redirect(base_url('index.php/empcontroller'));
   }

   public function edit($id)
   {
      $data['data'] = $this->EmpModel->find_record_by_id($id);
      $this->load->view('editemp', $data);
   }
   public function update($id)
   {
      $data1 = array(
         "name" => $this->input->post('name'),
         "email" => $this->input->post('email'),
         "age" => $this->input->post('age'),
         "role" => $this->input->post('role')
      );

      $this->EmpModel->update($data1, $id);

      redirect(base_url('index.php/empcontroller'));
   }
   public function delete($id)
   {
      $this->EmpModel->delete($id);

      redirect(base_url('index.php/empcontroller'));
   }
}
?>