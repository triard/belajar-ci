<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->library('form_validation');
        $this->load->model('login_model');
        if ($this->session->userdata('level') != "user") {
            redirect('login', 'refresh');
        }
    }


    public function index()
    {
        $data['title'] = 'data Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->datatabels();
        $this->load->view('template/header_datatabels_user', $data);
        $this->load->view('mahasiswa/user', $data);
        $this->load->view('template/footer_datatabels_user');
    }

    public function indexSiswa()
    {
        $data['title'] = 'data Mahasiswa';
        $data['siswa'] = $this->siswa_model->datatabels();
        $this->load->view('template/header_datatabels_user', $data);
        $this->load->view('siswa/user', $data);
        $this->load->view('template/footer_datatabels_user');
    }

}

/* End of file Controllername.php */
