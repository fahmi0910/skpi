<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_prestasi extends CI_Model
{
	function data_p()
	{			
		$data = array();
		$this->db->select('*');
		$this->db->from('prestasi');
		$hasil = $this->db->get();
		
		if($hasil->num_rows() > 0)
		{
				$data = $hasil->result();
		}
		return $data;
	}
	
	function kirim_p()
	{
			$this->db->select('*');
			$this->db->from('prestasi');
			$hasil = $this->db->get();
			
			$data = $hasil->num_rows();
			
			return $data;
	}
	
	function simpan_p($file)
	{
			$data = array(
						'prestasi' => $this->input->post('prestasi',true),
						'waktu' => $this->input->post('waktu',true),
						'penyelenggara' => $this->input->post('penyelenggara',true),
						'atas_nama' => $this->input->post('atas_nama',true),
						'bukti' => $file
						);
			$this->db->insert('prestasi',$data);			
	}
	function hapus_p($id)
	{
		$this->db->where('no',$id);
		$this->db->delete('prestasi');
	}
	function edit_p($id)
	{
			$data = array();
			$this->db->select('*');
			$this->db->from('prestasi');
			$this->db->where('no', $id);
			$hasil = $this->db->get();
			
			if($hasil->num_rows() > 0)
			{
					$data = $hasil->row_array();
			}
			return $data;
	}
	function update_p ($file)
	{
		if($file<>'')
		{
			$data = array
				(
					'prestasi' => $this->input->post('prestasi',true),
					'waktu' => $this->input->post('waktu',true),
					'penyelenggara' => $this->input->post('penyelenggara',true),
					'atas_nama' => $this->input->post('atas_nama',true),
					'bukti' => $file
					);
		}
			else
	{	
		$data = array
					(
					'prestasi' => $this->input->post('prestasi',true),
					'waktu' => $this->input->post('waktu',true),
					'penyelenggara' => $this->input->post('penyelenggara',true),
					'atas_nama' => $this->input->post('atas_nama',true),
					);
	}
		$this->db->where('no',$this->input->post('no',true));
		$this->db->update('prestasi',$data);
	}
}

?>