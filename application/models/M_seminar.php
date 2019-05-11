<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_seminar extends CI_Model
{
	function data_s()
	{			
			 $data = $this->db->query("SELECT * FROM seminar");
			 return $data->result();
	}
	
	function kirim_s()
	{
			$this->db->select('*');
			$this->db->from('seminar');
			$hasil = $this->db->get();
			
			$data = $hasil->num_rows();
			
			return $data;
	}
	
	function simpan_s($file)
	{
			$data = array(
							'nama' => $this->input->post('nama',true),
							'waktu' => $this->input->post('waktu',true),
							'penyelenggara' => $this->input->post('penyelenggara',true),
							'status' => $this->input->post('status',true),
							'bukti' => $file
						);
			$this->db->insert('seminar',$data);			
	}
	function hapus($id)
	{
		$this->db->where('no',$id);
		$this->db->delete('seminar');
	}
	function edit_s($id)
	{
			$data = array();
			$this->db->select('*');
			$this->db->from('seminar');
			$this->db->where('no', $id);
			$hasil = $this->db->get();
			
			if($hasil->num_rows() > 0)
			{
					$data = $hasil->row_array();
			}
			return $data;
	}
	function update_s ($file)
	{
		if($file<>'')
		{
			$data = array(

					'nama' => $this->input->post('nama',true),
					'waktu' => $this->input->post('waktu',true),
					'penyelenggara' => $this->input->post('penyelenggara',true),
					'status' => $this->input->post('status',true),
					'bukti' => $file
					);
		}
		else
		{
			$data = array(

					'nama' => $this->input->post('nama',true),
					'waktu' => $this->input->post('waktu',true),
					'penyelenggara' => $this->input->post('penyelenggara',true),
					'status' => $this->input->post('status',true)
					);
		}
		$this->db->where('no',$this->input->post('no',true));
		$this->db->update('seminar',$data);
	}
}
?>