<?php

defined('BASEPATH') or exit('No direct script access allowed');

class loginSiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('loginSiswa_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->load->view('template/header_login');
        $this->load->view('login/Siswaindex');
        $this->load->view('template/footer');
    }
    public function proses_login()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));

        $cek_login = $this->loginSiswa_model->login($username, $password);

        if ($cek_login) {
            foreach ($cek_login as $row) {
                # code...
                $this->session->set_userdata('user', $row->username);
                $this->session->set_userdata('level', $row->level);
            }
            if ($this->session->userdata('level') == 'admin') {
                # code...
                redirect('siswa');
            } else {
                redirect('user');
            }
        } else {
            $this->session->set_flashdata('message', 'Password salah');
            redirect('login');
            //redirect('login/index','refresh');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }
}
  
  /* End of file Login.php */
