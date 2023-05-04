<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmployeeController extends CI_Controller{
    public function index(){
        $this->load->view('Frontend/employee');
    }
    public function create(){
        $this->load->view('Frontend/create');
    }
    public function store(){
        $this->form_validation->set_rules('firstname','firstname','required');
        $this->form_validation->set_rules('lastname','lastname','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('age','age','required');
        if($this->form_validation->run()){
            $data=[
                'firstname'=>$this->input->post('firstname'),
                'lastname'=>$this->input->post('lastname'),
                'email'=>$this->input->post('email'),
                'age'=>$this->input->post('age')
            ];
            print_r($data);
        }
        else{
            $this->create();
            //redirect(base_url('employee/add'));
        }
        



       
        var_dump($data);
    }
}