<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PageController extends CI_Controller{
    public function index(){
    echo "I am a page controller";
    }
    public function quotes(){
        echo "Having a Good Day";
    }
}
?>