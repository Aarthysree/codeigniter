<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    public function index()
	{
        if(isset($_SESSION['user_id'])){
           // die('session_set1');
            $this->load->view('adminview/dashview');
        }
		//$this->load->database();
		
	 else{
        redirect('admin/login');
    }
   
        
    }
}
?>
