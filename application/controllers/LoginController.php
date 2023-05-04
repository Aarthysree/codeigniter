<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginController extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('LoginModel');
    }
    public function index(){
        if(isset($_SESSION['login']['iduser'])){
            $this->load->view('dashboard');
        } else{
            $this->load->view('login');
        }
       
    }
    public function dashboard(){
        if(isset($_SESSION['login']['iduser'])){
            $this->load->view('dashboard');
        } else{
            $this->load->view('login');
        }
    }
    function getlogin(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        if(!isset($username)||$username=='' ||  $username == 'undefined'){
            echo"2";
            exit();
        }
        if (!isset($Password) || $Password == '' || $Password == 'undefined'){
            echo "3";
            exit();
        }
        $this->form_validation->set_rules('username','userame','required');
        $this->form_validation->set_rules('password','password','required');
        if ($this->form_validation->run() == FALSE) {
            echo 4;
            exit();
        } else{
            $Login = new LoginModel();
            $result = $Login->validate($username, $Password);
            if (count($result) == 1) {
                $data = array(
                    'idUser' => $result[0]->idUser,
                    'username' => $result[0]->username
                );
                $this->session->set_userdata('login', $data);
                echo 1;
            } else{
                echo"5";
            }
            }
        }

    }
