<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_prodi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level')!="a_prodi"){
			redirect(C_login/index);
		}	
	}


	public function index()
	{
		$data = array();
		$data['page'] = 'v_prodi/home_p';
		$this->load->view('v_prodi/template_p', $data);
	}
	 function kualifikasi()
	 {
		$data = array();
		$data['page'] = 'v_prodi/kualifikasi';
		$this->load->view('v_prodi/template_p', $data);
	}
}
