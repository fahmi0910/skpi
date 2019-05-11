<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kepanitiaan extends CI_Model
{
	function data()
	{	
		$data = array();
		$this->db->select('*');
		$this->db->from('kepanitiaan');
		$hasil = $this->db->get();
		
		if($hasil->num_rows() > 0)
		{
				$data = $hasil->result();
		}
		return $data;		
			 // $data = $this->db->query("SELECT * FROM kepanitiaan");
			 // return $data->result();
	}
	
	function kirim()
	{
			$this->db->select('*');
			$this->db->from('kepanitiaan');
			$hasil = $this->db->get();
			
			$data = $hasil->num_rows();
			
			return $data;
	}
	
	function simpan($file)
	{
			$data = array(
						'nama' => $this->input->post('nama',true),
						'waktu' => $this->input->post('waktu',true),
						'penyelenggara' => $this->input->post('penyelenggara',true),
						'sebagai' => $this->input->post('sebagai',true),
						'bukti' =>$file
						);
			$this->db->insert('kepanitiaan',$data);			
	}
	function hapus($id)
	{
		$this->db->where('no',$id);
		$this->db->delete('kepanitiaan');
	}
	function edit($id)
	{
			$data = array();
			$this->db->select('*');
			$this->db->from('kepanitiaan');
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
						'nama' => $this->input->post('nama',true),
						'waktu' => $this->input->post('waktu',true),
						'penyelenggara' => $this->input->post('penyelenggara',true),
						'sebagai' => $this->input->post('sebagai',true),
						'bukti' =>$file
						);
		}
			else
	{	
		$data = array
					(
					'nama' => $this->input->post('nama',true),
					'waktu' => $this->input->post('waktu',true),
					'penyelenggara' => $this->input->post('penyelenggara',true),
					'sebagai' => $this->input->post('sebagai',true),
					
					);
	}
		$this->db->where('no',$this->input->post('no',true));
		$this->db->update('kepanitiaan',$data);
	}
}

?>