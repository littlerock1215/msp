<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feature_check extends CI_Controller {

    public function index()
    {
        $data = '';
        
        $this->load->view('layout/header',$data);
        $this->load->view('feature/check',$data);
        $this->load->view('layout/footer',$data);

    }

    
}