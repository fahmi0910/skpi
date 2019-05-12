<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mahasiswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_datadiri');

		if($this->session->userdata('level')!="mahasiswa"){
			redirect(C_login/index);
		}

		
	}

	public function index()
	{

		$user = $this->session->userdata('auth');
		$data = array();
		$data['ambil_data']=$this->M_datadiri->ambil_data($user[0]->id);
		$data['page'] = 'v_mahasiswa/identitas';
		$this->load->view('v_mahasiswa/template_m', $data);
	}
	public function input_m()
	{
		$data = array();
		$data['page'] = 'v_mahasiswa/input_m';
		$this->load->view('v_mahasiswa/template_m', $data);
	}

	function simpan_data_diri()
		{
			
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			$ttl = $this->input->post('ttl');
			$no_ijazah = $this->input->post('nsi');
			$masuk = $this->input->post('masuk');
			$lulus = $this->input->post('lulus'); 
			$gelar = $this->input->post('gelar');
			$this->M_datadiri->simpan($nim,$nama,$ttl,$no_ijazah,$masuk,$lulus,$gelar);
			redirect('C_mahasiswa/index');
	}
}

/* End of file c_prodi.php */
/* Location: ./application/controllers/c_prodi.php */