<?php 
class User extends CI_Controller{
    public function signup(){
        $this->load->helper('url');
        $this->load->view('signup_form');
    }
    public function submit(){
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $this->load->database();
        $this->load->model('user_model');
        $response= $this->user_model->store($data);
        if($response==true){
            echo "successfully register";
        } else{
            echo " failed to register";
        }
    }

}
?>