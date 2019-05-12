<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_sistem extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_sistem');

		if($this->session->userdata('level')!="a_sistem")
		{
			redirect(C_login/index);
		}
	}

	public function index()
	{
		$data = array();
		$data['data'] = $this->M_sistem->data();
		$data['page'] = 'v_sistem/home_s';
		$this->load->view('v_sistem/template_s', $data);
	}

	 public function input()
	{
	 	$data['page'] = 'v_sistem/mahasiswa/input';
		$this->load->view('v_sistem/template_s', $data);
	}
	public function simpan()
	{
		$data = $_REQUEST;
		$this->M_sistem->simpan($data);
		redirect('C_sistem/index');
	}

}