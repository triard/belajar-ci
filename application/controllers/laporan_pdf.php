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

        // $this->load->model('laporan_model');
        // $data['siswa'] = $this->laporan_model->view();
        // $this->load->library('pdf');  
        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = date("FjYgias");
        // $this->pdf->load_view('mahasiswa/user',$data);

        
    }
}
  
  /* End of file Login.php */
