<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_subpage extends CI_Controller {


public function index()
{
    $this->load->view('layout/header');
    $this->load->view('news/news_subpage');
    $this->load->view('layout/footer');
}
}