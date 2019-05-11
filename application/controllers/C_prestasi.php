<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_prestasi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_prestasi');

		if($this->session->userdata('level')!="mahasiswa")
		{
			redirect(C_login/index);
		}
	}

	function prestasi()
	{		
		$data = array();
		$data['data_prestasi']=$this->M_prestasi->data_p();
		$data['kirim_prestasi']=$this->M_prestasi->kirim_p();
		$data['page'] = 'v_mahasiswa/prestasi/prestasi';
		$this->load->view('v_mahasiswa/template_m', $data);	
	}
	function input_p()
	{
		$data['page'] = 'v_mahasiswa/prestasi/input_prestasi';
		$this->load->view('v_mahasiswa/template_m', $data);
	}
	function simpan_p()
	{
		// $data = array();
			// $data['aktif'] = 'active';
			// $data['page'] = 'masukan';
			// $this->load->view('template',$data);
			//upload file
			$config['file_name'] = $this->input->post('prestasi', true);
			$config['upload_path'] = './assets/upload/';
			$config['allowed_types'] = 'jpg|png';
			$config['overwrite']= true;
			

			//setting proses size
			$config['image_library']='gd2';
			$config['maintain_ratio']= true;
			$config['quality'] = '50%';
			$config['width'] = 600;
			$config['height'] = 400;
			
			$this->load->library('upload', $config);
			
			$this->upload->do_upload("bukti");
			$data = $this->upload->data();
			
			$path = $_FILES['bukti']['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			
			if($ext=='')
				$file='';
			else
				$file = $this->input->post('prestasi', true).'.'.$ext;

			$this->M_prestasi->simpan_p($file);
			redirect('C_prestasi/prestasi');
	}
	function hapus_p()
	{
		$this->M_prestasi->hapus_p($this->uri->segment(3));
		if ($this->db->affected_rows())
		{
			$this->session->set_flashdata('info','Berhasil di hapus!');
		}
		else
		{
			$this->session->set_flashdata('info','Gagal di hapus!');
			
		}
		redirect('C_prestasi/prestasi');
		
	}
	function edit_p()
	{
			$data = array();
			$data['edit_p'] = $this->M_prestasi->edit_p($this->uri->segment(3));
			
			
			// echo $this->db->last_query();exit;
			$data['page'] = 'v_mahasiswa/prestasi/edit_p';
			$this->load->view('v_mahasiswa/template_m',$data);
	}
		function update_p()
	{
		$config['file_name'] = $this->input->post('prestasi', true);
		$config['upload_path'] = './assets/upload/';
		$config['allowed_types'] = 'jpg|png';
		$config['overwrite']= true;
		

		//setting proses size
		$config['image_library']='gd2';
		$config['maintain_ratio']= true;
		$config['quality'] = '50%';
		$config['width'] = 600;
		$config['height'] = 400;
		
		$this->load->library('upload', $config);
		
		
		$path = $_FILES['bukti']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		
		if($ext=='')
				$file='';
		else
				$file = $this->input->post('prestasi', true).'.'.$ext;

		//proses resize
		$config['source_image']='./asset/upload/'.$file;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();

		$this->upload->do_upload("bukti");
		$data = $this->upload->data();

		$this->M_prestasi->update_p($file);
		redirect('C_prestasi/prestasi');
	}


}

/* End of file c_prestasi.php */
/* Location: ./application/controllers/c_prestasi.php */