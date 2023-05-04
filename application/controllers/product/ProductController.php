<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProductController extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->library('form_validation');
        //$this->load->library('session');
        $this->load->model('productmodel','product');
    }
    public function index(){
        $data['product']=$this->product->get_all();
        //$data['title']="CodeIgniter Product";
        $this->load->view('product/index',$data);
    }
    public function show($id){
        $data['product']=$this->product->get($id);
        $data['title']="show product";
        $this->load->view('product/show',$data);
    }
    public function create(){
        //$data['title']="create product";
        $this->load->view('product/create');
    }
    public function store(){
        $this->form_validation->set_rules('productname','productname','required');
        $this->form_validation->set_rules('brandname','brandname','required');
        if($this->form_validation->run() == TRUE){
            $data=['product_name'=>$this->input->post('productname'),
        'price'=>$this->input->post('price'),
        'brand_name'=>$this->input->post('brandname')];
        $this->product->store($data);

redirect(base_url('index.php/product/productcontroller'));
        } else{
           
            $this->load->view('product/create'); 
        }
       
    }
    public function edit($id){
        $data['product']=$this->product->get($id);
                $this->load->view('product/edit',$data);
    }
    public function update($id){
        $data1=['product_name'=>$this->input->post('productname'),
        'price'=>$this->input->post('price'),
        'brand_name'=>$this->input->post('brandname')];
           
      
            $this->product->update($data1,$id);
            redirect(base_url('index.php/product/productcontroller'));

    }
    public function delete($id){
        $item=$this->product->delete($id);
        redirect(base_url('index.php/product/productcontroller'));
    }

}