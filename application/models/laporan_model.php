<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan_model extends CI_Model
{
    public function view()
    {
        $this->db->select('nama,jurusan,alamat,nim');
        return $this->db->get('mahasiswa')->result();
    }
    public function cetakSiswa()
    {
        $this->db->select('nama,alamat,nim');
        return $this->db->get('siswa')->result();
    }
}
 /* End of file ModelName.php */
