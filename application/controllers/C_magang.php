<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_magang extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_magang');

		if($this->session->userdata('level')!="mahasiswa")
		{
			redirect(C_login/index);
		}
	}

	function magang()
	{		
		$data = array();
		$data['data_magang']=$this->M_magang->data();
		$data['kirim_magang']=$this->M_magang->kirim();
		$data['page'] = 'v_mahasiswa/magang/magang';
		$this->load->view('v_mahasiswa/template_m', $data);	
	}
	function input()
	{
		$data['page'] = 'v_mahasiswa/magang/input';
		$this->load->view('v_mahasiswa/template_m', $data);
	}
	function simpan()
	{
		// $data = array();
			// $data['aktif'] = 'active';
			// $data['page'] = 'masukan';
			// $this->load->view('template',$data);
			//upload file
			$config['file_name'] = $this->input->post('tempat', true);
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
				$file = $this->input->post('tempat', true).'.'.$ext;

			$this->M_magang->simpan($file);
			//print_r($this->upload->display_errors());
			redirect('C_magang/magang');
	}
	function hapus()
	{
		$this->M_magang->hapus($this->uri->segment(3));
		if ($this->db->affected_rows())
		{
			$this->session->set_flashdata('info','Berhasil di hapus!');
		}
		else
		{
			$this->session->set_flashdata('info','Gagal di hapus!');
			
		}
		redirect('C_magang/magang');
		
	}
	function edit()
	{
			$data = array();
			$data['edit'] = $this->M_magang->edit($this->uri->segment(3));
			
			
			// echo $this->db->last_query();exit;
			$data['page'] = 'v_mahasiswa/magang/edit';
			$this->load->view('v_mahasiswa/template_m',$data);
	}
		function update()
	{
		$config['file_name'] = $this->input->post('tempat', true);
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
				$file = $this->input->post('tempat', true).'.'.$ext;

		//proses resize
		$config['source_image']='./asset/upload/'.$file;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();

		$this->upload->do_upload("bukti");
		$data = $this->upload->data();

		$this->M_magang->update($file);
		redirect('C_magang/magang');
	}


}

/* End of file c_magang.php */
/* Location: ./application/controllers/c_magang.php */