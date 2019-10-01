<?php

defined('BASEPATH') or exit('No direct script access allowed');

class laporan_pdf extends CI_Controller
{
    public function index()
    {
        $this->load->model('laporan_model');
        $this->load->library('pdf');

        $data['mahasiswa'] = $this->laporan_model->view();
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = date("FjYgias");
        $this->pdf->load_view('mahasiswa/laporan_pdf', $data); 
    }
    public function laporan_siswa()
    {
        $this->load->model('laporan_model');
        $this->load->library('pdf');
        $data['siswa'] = $this->laporan_model->cetakSiswa();
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = date("FjYgias");
        $this->pdf->load_view('siswa/laporan_pdf', $data);
        
        redirect('mahasiswa/user','refresh');
        
    }
}
  
  /* End of file Login.php */
