<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
		
	}

	public function index()
	{
		$this->load->view('login');
	}

	function proses_login(){
		$user=$this->input->post('username');
		$pass=$this->input->post('password');	

		$ceklogin= $this->M_login->login($user,$pass);

		if($ceklogin){
			foreach($ceklogin as $row);
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('level', $row->level);

			if($this->session->userdata('level')=="a_prodi"){
				redirect('c_prodi/index');
			}elseif($this->session->userdata('level')=="mahasiswa"){
			redirect('c_mahasiswa/index');
			}elseif($this->session->userdata('level')=="a_sistem"){
				redirect('c_sistem/index');
			}
		}else{
			$this->session->set_flashdata("pesan","Maaf Username atau Password Anda Salah");
			redirect('C_login');
		}
	}

	function logout()
	{
			$this->session->sess_destroy();
			redirect('C_login/index');
	}
}
