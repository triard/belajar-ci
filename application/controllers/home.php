<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{

    public function __construct()
    {
      
        parent::__construct();
        if ($this->session->userdata('level') != "admin") {
            redirect('login', 'refresh');
        }
    }


    public function index($name='')
    {
        $data['title'] = "home";
        $data['name'] = "Agung pamudji";

        $this->load->view('template/header',$data);
        // echo "selamat datang di halaman home";
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
    }

    public function belajar(){
        echo "Saya Belajar CodeIgniter";
    }

    public function belajar_kedua()
    {
        $data['title'] = "home";
        $this->load->view('template/header', $data);
        echo "Saya sedang Belajar pemrogaman framework";
        $this->load->view('template/footer');

    }
}
