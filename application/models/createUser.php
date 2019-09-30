<?php
defined('BASEPATH') or exit('No direct script access allowed');

class createUser extends CI_Model
{

    private $_table = "user";

    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'
            ],

            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ],

            [
                'field' => 'level',
                'label' => 'level',
                'rules' => 'required'
            ]
        ];
    }

    public function tambahDatauser()
    {
        $data=array(
            "username"=>$this->input->post("username"),
            "password" => $this->input->post("password"),
            "level" => $this->input->post("level"),
        );
        
        $this->db->insert($this->_table, $data);
    }
}
?>