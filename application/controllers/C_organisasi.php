<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_organisasi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_organisasi');

		if($this->session->userdata('level')!="mahasiswa")
		{
			redirect(C_login/index);
		}
	}

	function organisasi()
	{		
		$data = array();
		$data['data_organisasi']=$this->M_organisasi->data_o();
		$data['kirim_organisasi']=$this->M_organisasi->kirim_o();
		$data['page'] = 'v_mahasiswa/organisasi/organisasi';
		$this->load->view('v_mahasiswa/template_m', $data);	
	}
	function input_o()
	{
		$data['page'] = 'v_mahasiswa/organisasi/input_o';
		$this->load->view('v_mahasiswa/template_m', $data);
	}
	function simpan_o()
	{
		// $data = array();
			// $data['aktif'] = 'active';
			// $data['page'] = 'masukan';
			// $this->load->view('template',$data);
			//upload file
			$config['file_name'] = $this->input->post('nama', true);
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
				$file = $this->input->post('nama', true).'.'.$ext;

			$this->M_organisasi->simpan_o($file);
			redirect('C_organisasi/organisasi');
	}
	function hapus_o()
	{
		$this->M_organisasi->hapus_o($this->uri->segment(3));
		if ($this->db->affected_rows())
		{
			$this->session->set_flashdata('info','Berhasil di hapus!');
		}
		else
		{
			$this->session->set_flashdata('info','Gagal di hapus!');
			
		}
		redirect('C_organisasi/organisasi');
		
	}
	function edit_o()
	{
			$data = array();
			$data['edit_o'] = $this->M_organisasi->edit_o($this->uri->segment(3));
			
			
			// echo $this->db->last_query();exit;
			$data['page'] = 'v_mahasiswa/organisasi/edit_o';
			$this->load->view('v_mahasiswa/template_m',$data);
	}
		function update_o()
	{
		$config['file_name'] = $this->input->post('nama', true);
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
				$file = $this->input->post('nama', true).'.'.$ext;

		//proses resize
		$config['source_image']='./asset/upload/'.$file;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();

		$this->upload->do_upload("bukti");
		$data = $this->upload->data();

		$this->M_organisasi->update_o($file);
		redirect('C_organisasi/organisasi');
	}


}

/* End of file c_organisasi.php */
/* Location: ./application/controllers/c_organisasi.php */