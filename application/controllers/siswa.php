<?php

defined('BASEPATH') or exit('No direct script access allowed');

class siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->library('form_validation');
        if ($this->session->userdata('level') != "admin") {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {

        $this->load->model('siswa_model');
        $data['title'] = 'List siswa';
        $data['siswa'] = $this->siswa_model->getAllsiswa();
        if ($this->input->post('keyword')) {
            $data['siswa'] = $this->siswa_model->cariDataSiswa();
        }
        $this->load->view('template/header', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('template/footer');
    }

    public function insertData(){
        $data['title'] = 'Insert Siswa';
        $siswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            $this->siswa_model->tambahDatasiswa();
           $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view('template/header', $data);
        $this->load->view('siswa/insertData', $data);
        $this->load->view('template/footer');
        
    }

    public function deleteSiswa($id)
    {
        $this->siswa_model->hapusdatasiswa($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('siswa', 'refresh');
    }

    public function detail($id = null){
        $data['title'] = 'Detail siswa';
        $data['siswa'] = $this->siswa_model->getSiswabyid($id);
        $this->load->view('template/header', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('template/footer');
    }
    public function edit($id = null){
        $data['title'] = 'Edit Siswa';
        $data['siswa'] = $this->siswa_model->getSiswabyid($id);

        $siswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());


        if ($validation->run()) {           
            $siswa->update();
            $this->session->set_flashdata('success', 'Data Berhasil disimpan');
            redirect('siswa/index', 'refresh');
        }
        $this->load->view('template/header', $data);
        $this->load->view("siswa/edit", $data);
        $this->load->view('template/footer');
    }
}

/* End of file Controllername.php */
