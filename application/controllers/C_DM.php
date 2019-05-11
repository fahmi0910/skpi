<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_DM extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dm');
		if($this->session->userdata('level')!="a_prodi"){
			redirect(C_login/index);
		}

		
	}
 	/////////fungsi navigasi///////
	public function index()
	{
		$data = array();
		$data['ambil_data']=$this->M_dm->ambil_data();
		$data['page'] = 'v_prodi/data_mahasiswa';
		$this->load->view('v_prodi/template_p', $data);
	}
	
///////fungsi CRUD//////////
	// function simpan_data_diri()
	// 	{
			
	// 		$nim = $this->input->post('nim');
	// 		$nama = $this->input->post('nama');
	// 		$status = $this->input->post('status');
	// 		$this->M_datadiri->simpan($nim,$nama,$status);
	// 		redirect('C_dm/index');
	// }
}

/* End of file c_prodi.php */
/* Location: ./application/controllers/c_prodi.php */