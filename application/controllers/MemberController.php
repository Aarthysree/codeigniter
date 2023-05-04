<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class MemberController extends CI_Controller{
    public function index(){
        $this->load->model('MemberModel');
        $member = $this->MemberModel->member_data();
        echo "Member name is " .  $member;
    }
    public function show($id){
        echo $id;
    }
}

?>