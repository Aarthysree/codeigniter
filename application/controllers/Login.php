<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
    
    public function index(){
        if (isset($_POST)) {
            // $data = array(
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = $this->db->query("SELECT * FROM administrator WHERE username='$username' AND password='$password'");
            if ($query->num_rows()) {
               $result = $query->result_array();
               // print_r($result); die();
              // $this->session->set_userdata('id', $result[0]['id']);
               redirect('department',$result);
            } else {
              // $this->session->set_flashdata('error','Invalid credentiald');
               redirect('login_view');
            }
            //);
         } else {
            die("Invalid input");
         }
            
        
       
    }
}
?>
