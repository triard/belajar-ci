<?php

defined('BASEPATH') or exit('No direct script access allowed');

class laporan_pdf extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function laporan_pdf()
    {

        $this->load->library('pdf'); 
        $data['mahasiswa']=$this->laporan_pdf->view();
        
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-pdf.pdf";
        $this->pdf->load_view('mahasiswa/laporan',$data);
    }
}
  
  /* End of file Login.php */
