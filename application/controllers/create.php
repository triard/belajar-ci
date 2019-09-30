<?php

defined('BASEPATH') or exit('No direct script access allowed');

class create extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('createUser');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['title'] = 'Create account';
        $user = $this->createUser;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->tambahDatauser();
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
            
            redirect('login','refresh');
            
        }
        $this->load->view('template/header_login', $data);
        $this->load->view('create/tambah', $data);
        $this->load->view('template/footer');
    }
}
  
  /* End of file Login.php */
