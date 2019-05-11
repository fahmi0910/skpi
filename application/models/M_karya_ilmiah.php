<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karya_ilmiah extends CI_Model
{
	function data()
	{	
		$data = array();
		$this->db->select('*');
		$this->db->from('karya_ilmiah');
		$hasil = $this->db->get();
		
		if($hasil->num_rows() > 0)
		{
				$data = $hasil->result();
		}
		return $data;		
			
	}
	
	function kirim()
	{
			$this->db->select('*');
			$this->db->from('karya_ilmiah');
			$hasil = $this->db->get();
			
			$data = $hasil->num_rows();
			
			return $data;
	}
	
	function simpan($file)
	{
			$data = array(
						'judul' => $this->input->post('judul',true),
						'terbit' => $this->input->post('terbit',true),
						'penyelenggara' => $this->input->post('penyelenggara',true),
						'status' => $this->input->post('status',true),
						'bukti' =>$file
						);
			$this->db->insert('karya_ilmiah',$data);			
	}
	function hapus($id)
	{
		$this->db->where('no',$id);
		$this->db->delete('karya_ilmiah');
	}
	function edit($id)
	{
			$data = array();
			$this->db->select('*');
			$this->db->from('karya_ilmiah');
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
				'judul' => $this->input->post('judul',true),
				'terbit' => $this->input->post('terbit',true),
				'penyelenggara' => $this->input->post('penyelenggara',true),
				'status' => $this->input->post('status',true),
				'bukti' =>$file
				);
		}
			else
	{	
		$data = array
					(
					'judul' => $this->input->post('judul',true),
					'terbit' => $this->input->post('terbit',true),
					'penyelenggara' => $this->input->post('penyelenggara',true),
					'status' => $this->input->post('status',true)
					);
	}
		$this->db->where('no',$this->input->post('no',true));
		$this->db->update('karya_ilmiah',$data);
	}
}

?>