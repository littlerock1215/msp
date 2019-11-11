<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PromoteBase extends CI_Controller {


    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('promotebase/panel');
        $this->load->view('layout/footer');
    }
}