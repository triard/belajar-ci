<?php


defined('BASEPATH') or exit('No direct script access allowed');

class laporan_pdf extends CI_Model
{
    public function view(){
        $this->db->select('*');
        $query=$this->db->get('mahasiswa');
        return $query->result;
    }
}
 /* End of file ModelName.php */
