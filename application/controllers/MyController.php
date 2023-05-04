<?php
defined('BASEPATH') or exit('No direct script access allowed');
class MyController extends CI_Controller
{
    public function page()
    {
        $this->load->model('MyModel');
        $model = $this->MyModel->modeldata();
        $modeli=$this->MyModel->model_id();
        // $lmodel = $this->MyModel->model_data();
        echo " Student Name is: " . $model;
        echo "<br>";
        echo "model id is:".$modeli;
        // echo "Student lastname is: " . $lmodel;
    }

// public function page(){
//     $this->load->model('MyModel');
//     $model=new MyModel;
//     $model=$model->modeldata();
//     echo "model name:" . $model;
// }

public function index(){
    $this->load->view('header');
    $this->load->view('nav');
    $this->load->view('content');
    $this->load->view('footer');
}
}
?>