<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_subpage extends CI_Controller {


public function index()
{
    $this->load->view('layout/header');
    $this->load->view('product/product1');
    $this->load->view('layout/footer');
}
}