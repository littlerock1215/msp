<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QA extends MY_Controller {

    public function index()
    {
        $data = '';
        
        $this->load->view('header',$data);
        $this->load->view('q&a/panel',$data);
        $this->load->view('footer',$data);

    }

    
}