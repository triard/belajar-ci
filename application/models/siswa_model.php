<?php
defined('BASEPATH') or exit('No direct script access allowed');

class siswa_model extends CI_Model
{

    private $_table = "siswa";

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'               
            ],

            [
                 'field' => 'nim',
                'label' => 'nim',
                'rules' => 'numeric|required'

            ]
        ];
    }

    public function getAllsiswa(){
        $query = $this->db->get('siswa');
        return $query->result_array();
    }

    public function tambahDatasiswa()
    {
        $data = array(
            "nama" => $this->input->post("nama"),
            "nim" => $this->input->post("nim"),
            "alamat" => $this->input->post("alamat"),
        );

        $this->db->insert($this->_table, $data);
    }

    public function hapusdatasiswa($id){
        $this->db->where('Id', $id);
        $this->db->delete('siswa');
    }

    public function getSiswabyid($id){
        return $this->db->get_where($this->_table, ['Id' => $id])->row_array();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->nim = $post["nim"];
        $this->alamat = $post["alamat"];
        $this->db->update('siswa', $this, array('Id' => $post['id']));
    }
    public function cariDataSiswa()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like("Nama", $keyword);
        $this->db->or_like("Nim", $keyword);
        $this->db->or_like("Alamat", $keyword);
        return $this->db->get('siswa')->result_array();
    }

    public function datatabels()
    {
        return $this->db->order_by('Id', 'desc')->get('siswa')->result();
    }
}
