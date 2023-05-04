<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegisterController extends CI_Controller
{
    public function __construct(){
        parent:: __construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('UserModel');
    }
    public function index()
    {
        $this->load->view('template/header.php');
        $this->load->view('auth/register');
        $this->load->view('template/footer.php');
    }
    public function register()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required|alpha');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required|integer');
        $this->form_validation->set_rules('city', 'city', 'trim|required|alpha');
    if($this->form_validation->run()==FALSE){
        $this->index();
    } else{
        $data=array(
            'name'=>$this->input->post('name'),
            'phone'=>$this->input->post('phone'),
            'city'=>$this->input->post('city'),
        );
        $checking=$this->UserModel->registerUser($data);
        if($checking){
            $this->session->set_flashdata('status','registration successfully.Go to login');
            redirect(current_url());
        }
        else{
            $this->session->set_flashdata('status','registration failed');
            redirect(base_url('register'));
        }
    }
    }

}
?>