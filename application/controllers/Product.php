<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {


public function index()
{
    $data['type'] = $this->input->get('type');
    $this->load->view('layout/header');
    $this->load->view('product/panel',$data);
    $this->load->view('layout/footer');
}
}