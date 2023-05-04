<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Test extends CI_Controller{
    public function index(){
        $this->load->view("test1");
    }

public function submit_value(){
    if($_POST["btn_insert"]=="insert"){
        $data=array(
            "tbl_name"=>$_POST["txt_name"],
            "tbl_std"=>$_POST["txt_std"],
            "tbl_date"=>date("y-m-d")
        );
        $query=$this->db->insert("tbl_ex",$data);
        $data["all_data"]=$this->db->get('tbl_ex');
        if($query){
            $data['message']='1';
            $this->load->view("test1",$data);
        }else{
            $data['message']='0';
            $this->load->view("test1",$data);
        }
    }
}
public function submit_edit($id){
    if($_POST["btn_insert"]=="insert"){
        $data=array(
            "tbl_name"=>$_POST["txt_name"],
            "tbl_std"=>$_POST["txt_std"],
            "tbl_date"=>date("y-m-d")
        );
        $this->db->where('tbl_id,$id');
        $this->db->set($data);
        $query=$this->db->update('tbl_ex');
        if($query){
           $data['message_edit']='1';
           $this->load->view("test1",$data); 
        } else{
            $data['message_edit']='0';
            $this->load->view("test1",$data);
        }
    }
}
public function submit_delete($id){
    $query=$this->db->query("DELETE FROM tbl_ex WHERE tbl_id=".$id." ");
    $data["all_data"]=$this->db->get('tbl_ex');
    if($query){
        $data['message_del']='1';
        $this->load->view("test1",$data);
    } else{
        $data['message_del']='0';
        $this->load->view("test1",$data);
    }
}
}
?>