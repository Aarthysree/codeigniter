<?php
class Test extends CI_Controller{
    public function index() {
        $this->load->view('test1'); 
    }
    public function quotes() {
        echo "Hoping for more good days";
    }
}
?>