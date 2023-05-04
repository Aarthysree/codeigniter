<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{


    public function index()
    {
        $this->db->query("SELECT * FROM 'articles' ORDER BY");

        $this->load->view('adminview/viewarticle');
    }
    function addarticle()
    {
        $this->load->view('adminview/addarticle');
    }
    function addarticle_post()
    {
        print_r($_POST);

        $title = $_POST['title'];
        $description = $_POST['description'];
        $query = $this->db->query("INSERT INTO `articles`(`title`, `description`) VALUES ('test','demo')");
        if ($query) {
            $this->session->set_flashdata('inserted', 'yes');
            redirect('admin/article/addarticle');
        } else {
            $this->session->set_flashdata('inserted', 'no');
            redirect('admin/article/addarticle');
        }
    }
    function editarticle($id)
    {
        print_r($id);
    }
    function deletearticle($id)
    {
        print_r($id);
    }
}