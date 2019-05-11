<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_magang extends CI_Model
{
	function data()
	{	
		$data = array();
		$this->db->select('*');
		$this->db->from('magang');
		$hasil = $this->db->get();
		
		if($hasil->num_rows() > 0)
		{
				$data = $hasil->result();
		}
		return $data;		
			 // $data = $this->db->query("SELECT * FROM magang");
			 // return $data->result();
	}
	
	function kirim()
	{
			$this->db->select('*');
			$this->db->from('magang');
			$hasil = $this->db->get();
			
			$data = $hasil->num_rows();
			
			return $data;
	}
	
	function simpan($file)
	{
			$data = array(
						'tempat' => $this->input->post('tempat',true),
						'waktu' => $this->input->post('waktu',true),
						'penyelenggara' => $this->input->post('penyelenggara',true),
						'berkas' => $this->input->post('berkas',true),
						'bukti' =>$file
						);
			$this->db->insert('magang',$data);			
	}
	function hapus($id)
	{
		$this->db->where('no',$id);
		$this->db->delete('magang');
	}
	function edit($id)
	{
			$data = array();
			$this->db->select('*');
			$this->db->from('magang');
			$this->db->where('no', $id);
			$hasil = $this->db->get();
			
			if($hasil->num_rows() > 0)
			{
					$data = $hasil->row_array();
			}
			return $data;
	}
	function update ($file)
	{
		if($file<>'')
		{
			$data = array
				(
				'tempat' => $this->input->post('tempat',true),
				'waktu' => $this->input->post('waktu',true),
				'penyelenggara' => $this->input->post('penyelenggara',true),
				'berkas' => $this->input->post('berkas',true),
				'bukti' =>$file
				);
		}
			else
	{	
		$data = array
					(
					'tempat' => $this->input->post('tempat',true),
					'waktu' => $this->input->post('waktu',true),
					'penyelenggara' => $this->input->post('penyelenggara',true),
					'berkas' => $this->input->post('berkas',true),
					);
	}
		$this->db->where('no',$this->input->post('no',true));
		$this->db->update('magang',$data);
	}
}

?>