<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {


public function index()
{
    $this->load->view('layout/header');
    $this->load->view('news/panel');
    $this->load->view('layout/footer');
}
}