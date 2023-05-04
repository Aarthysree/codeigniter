<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StuController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('StuModel');
    }
    public function index()
    {
        $data['data'] = $this->StuModel->get_records();
        $this->load->view('stulist',$data);
    }
    function show_students(){
    $data=$this->Stumodel->get_records();
    foreach ($data as $row){
        echo " <tr>";
         echo "<td>". $row->id ."</td>";
         echo "<td>". $row->name."</td>";
         echo "<td>".$row->rollno."</td>";
         echo "<td>".$row->email."</td>";
         echo "<td>". $row->age."</td>";
         echo "<td><a href=Stucontroller/edit/$row->id>Edit</a></td>";
         echo "<td><a href='Stucontroller/delete/$row->id'>Delete</a></td>";
         echo "</tr>";
    }
}

    
    public function create()
    {
        $this->load->view('createstu');
    }
    public function store()
    {
        $data = array(
            "name" => $this->input->post('name'),
            "rollno" => $this->input->post('rollno'),
            "email" => $this->input->post('email'),
            "age" => $this->input->post('age')
        );
        $this->StuModel->store($data);
        redirect(base_url('index.php/stucontroller'));
    }
    public function edit($id)
    {
        $data['data'] = $this->StuModel->find_record_by_id($id);
        $this->load->view('stuedit', $data);
    }
    public function update($id)
    {
        $data1 = array(
            "name" => $this->input->post('name'),
            "rollno" => $this->input->post('rollno'),
            "email" => $this->input->post('email'),
            "age" => $this->input->post('age')
        );
        $this->StuModel->update($data1,$id);
        redirect(base_url('index.php/stucontroller'));
    }
    public function delete($id){
        $this->StuModel->delete($id);
        redirect(base_url('index.php/stucontroller'));
    }
}