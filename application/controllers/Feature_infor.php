<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feature_infor extends CI_Controller {

    public function index()
    {
        $data = '';
        
        $this->load->view('layout/header',$data);
        $this->load->view('feature/infor',$data);
        $this->load->view('layout/footer',$data);

    }

    
}