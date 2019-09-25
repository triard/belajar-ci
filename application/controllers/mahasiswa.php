<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->library('form_validation');
        if($this->session->userdata('level')!="admin"){
            redirect('login','refresh');
        }
    }
    
    public function index()
    {
        $data ['title'] = 'List Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getAllmahasiswa();     
        if($this->input->post('keyword')){
            $data['mahasiswa']=$this->mahasiswa_model->cariDataMahasiswa();
        }   
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title'] = 'Insert Mahasiswa';
        $mahasiswa = $this->mahasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($mahasiswa->rules());

        if ($validation->run()) {
            $mahasiswa->tambahDatamhs();
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        }
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/tambah', $data);
        $this->load->view('template/footer');    
        }

        public function delete($id){
            $this->mahasiswa_model->hapusdatamhs($id);
            $this->session->set_flashdata('success','Data berhasil dihapus');
            
            redirect('mahasiswa','refresh');
            
        }
    public function detail($id=null){
        $data['title'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getMahasiswabyid($id);
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('template/footer');
    }
    public function edit($id = null){
        $data['title'] = 'Edit Mahasiswa';
        $data['jurusan']=['informatika','kimia','mesin'];
        $data['mahasiswa']=$this->mahasiswa_model->getMahasiswabyid($id);
    
        $mahasiswa = $this->mahasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($mahasiswa->rules());

        if ($validation->run()) {
            $mahasiswa->update();
            $this->session->set_flashdata('success', 'Data Berhasil disimpan');
            redirect('mahasiswa', 'refresh');
        }
        $this->load->view('template/header', $data);
        $this->load->view("mahasiswa/edit", $data);
        $this->load->view('template/footer');
    }
    

    }

/* End of file Controllername.php */
