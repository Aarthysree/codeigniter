<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegisterController extends CI_Controller
{

    public function index()
    {
        $data['message'] = "";
        $this->load->view('registerview', $data);
    }
    public function add_employee()
    {
        $this->load->model('RegisterModel');
        $values['name'] = $_GET['name'];
        $values['phone'] = $_GET['phone'];
        $values['city'] = $_GET['city'];
       
        $result = $this->RegisterModel->add_record($values);

        if ($result) {
            $data['message'] = "Registered successfully";
        } else {
            $data['message'] = "failed to register";
        }
        $this->load->view('registerview', $data);
    }

    public function display_all()
    {
        $this->load->model('RegisterModel');
        $result = $this->RegisterModel->display_all();
        $data['result'] = $result;
        $this->load->view('output', $data);
    }
}
?>