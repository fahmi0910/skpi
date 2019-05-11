<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_seminar extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_seminar');

		if($this->session->userdata('level')!="mahasiswa")
		{
			redirect(C_login/index);
		}
	}

	function seminar()
	{
		$data = array();
		$data['data_seminar']=$this->M_seminar->data_s();
		$data['kirim_seminar']=$this->M_seminar->kirim_s();
		$data['page'] = 'v_mahasiswa/seminar/seminar';
		$this->load->view('v_mahasiswa/template_m', $data);
	}
	function input_s()
	{
		$data['page'] = 'v_mahasiswa/seminar/input_s';
		$this->load->view('v_mahasiswa/template_m', $data);
	}
	function simpan_s()
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

			$this->M_seminar->simpan_s($file);
			redirect('C_seminar/seminar');
			
	}
	function hapus_s()
	{
		$this->M_seminar->hapus_s($this->uri->segment(3));
		if ($this->db->affected_rows())
		{
			$this->session->set_flashdata('info','Berhasil di hapus!');
		}
		else
		{
			$this->session->set_flashdata('info','Gagal di hapus!');
			
		}
		redirect('C_seminar/seminar');
		
	}
	function edit_s()
	{
			$data = array();
			$data['edit_s'] = $this->M_seminar->edit_s($this->uri->segment(3));
			
			
			// echo $this->db->last_query();exit;
			$data['page'] = 'v_mahasiswa/seminar/edit_s';
			$this->load->view('v_mahasiswa/template_m',$data);
	}
		function update_s()
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

		$this->M_seminar->update_s($file);
		redirect('C_seminar/seminar');
	}

}

/* End of file c_seminar.php */
/* Location: ./application/controllers/c_seminar.php */