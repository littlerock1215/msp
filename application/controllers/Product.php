<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {


public function index()
{
    $this->load->view('layout/header');
    $this->load->view('product/panel');
    $this->load->view('layout/footer');
}
}