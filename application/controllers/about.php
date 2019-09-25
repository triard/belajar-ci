<?php
defined('BASEPATH') or exit('No direct script access allowed');
class about extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }


    function index()
    {
        $data['title'] = 'about';
        $this->load->view('template/header', $data);
        $this->load->view('template/about');
        $this->load->view('template/footer');
    }
}
