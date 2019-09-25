<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa_model extends CI_Model
{

    private $_table = "mahasiswa";

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],

            [
                'field' => 'nim',
                'label' => 'nim',
                'rules' => 'numeric|required'
            ],

            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ]
        ];
    }

    public function getAllmahasiswa(){
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    public function tambahDatamhs()
    {
        $data=array(
            "nama"=>$this->input->post("nama"),
            "nim" => $this->input->post("nim"),
            "alamat" => $this->input->post("alamat"),
            "jurusan" => $this->input->post("jurusan"),
        );
        
        $this->db->insert($this->_table, $data);
    }

    public function hapusdatamhs($id){
        $this->db->where('id',$id);
        $this->db->delete('mahasiswa');
    }

    public function getmahasiswabyid($id){
        return $this->db->get_where($this->_table, ['id' => $id])->row_array();
    }

    public function update(){
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->nim = $post["nim"];
        $this->alamat = $post["alamat"];
        $this->jurusan = $post["jurusan"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
    
    public function cariDataMahasiswa(){
        $keyword=$this->input->post('keyword');
        $this->db->like("nama",$keyword);
        return $this->db->get('mahasiswa')->result_array();
    }

    public function datatabels(){
        return $this->db->order_by('id', 'desc')->get('mahasiswa')->result();
    }

}
?>