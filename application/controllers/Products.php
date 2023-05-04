<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProModel');
    }
    public function index()
    {
        $data['category'] = $this->db->query("SELECT 'name' FROM 'category'");
        $query = $this->db->query('SELECT * FROM `products`');
        $data['result'] = $query->result_array();
        $this->load->view('viewproducts', $data);

    }
    function addproducts()

    {
        $this->load->model('CatModel');
      $this->load->model('UnitModel');
      $data['categorys'] = $this->CatModel->get_category();
      $data['unit'] = $this->UnitModel->get_units();
      
           $this->load->view( 'addproducts',$data);
      
    }
    function addproducts_post()
    {
        //print_r($_POST);

        $productname = $_POST['productname'];
        $price = $_POST['price'];
        $discountprice = $_POST['discountprice'];
        $saleprice = $_POST['saleprice'];
        $category = $_POST['category'];
        $units = $_POST['units'];
        $query = $this->db->query("INSERT INTO `products`(`productname`, `price`,`discountprice`,`saleprice`,`category`,`units`) VALUES ('$productname','$price','$discountprice','$saleprice','$category','$units')");
        if ($query) {
            $this->session->set_flashdata('inserted', 'yes');
            redirect('products/viewproducts');
        } else {
            $this->session->set_flashdata('inserted', 'no');
            redirect('products/addproducts');
        }
    }
    //public function store()
//    {
//       $data = array(
//          "name" => $this->input->post('name'),
//          "status" => $this->input->post('status'),
//          );

    //       $this->CatModel->insert($data);

    //       redirect(base_url('index.php/category'));
//    }
    function editproducts($id)
    {
        $data['data'] = $this->ProModel->find_record_by_id($id);
        $this->load->view('editproducts', $data);
    }
    public function update($id)
    {
        $data1 = array(
            "productname" => $this->input->post('productname'),
            "price" => $this->input->post('price'),
            "discountprice" => $this->input->post('discountprice'),
            "saleprice" => $this->input->post('saleprice'),
        );

        $this->UnitModel->update($data1, $id);

        redirect(base_url('index.php/products'));
    }
    function viewproducts()
    {
        $query = $this->db->query('SELECT * FROM `products`');
        $data['result'] = $query->result_array();
        $this->load->view('viewproducts', $data);
    }
    function unitview()
    {
        $this->load->view('unitview');
    }
    function deleteproducts($id)
    {
        $this->ProModel->deleteproducts($id);

        redirect(base_url('index.php/products'));
    }
}

?>