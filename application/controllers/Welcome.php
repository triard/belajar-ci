<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function percobaan(){
		echo "ini adalah function percobaan";
	}
	public function belajar(){
		echo "-> Saya Belajar CodeIgniter";
	}
	public function belajar2(){
		echo "-> Saya sedang belajar pemrogaman web lanjut";
	}
}
