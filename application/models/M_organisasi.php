<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_organisasi extends CI_Model
{
	function data_o()
	{	
		$data = array();
		$this->db->select('*');
		$this->db->from('organisasi');
		$hasil = $this->db->get();
		
		if($hasil->num_rows() > 0)
		{
				$data = $hasil->result();
		}
		return $data;		
			 // $data = $this->db->query("SELECT * FROM organisasi");
			 // return $data->result();
	}
	
	function kirim_o()
	{
			$this->db->select('*');
			$this->db->from('organisasi');
			$hasil = $this->db->get();
			
			$data = $hasil->num_rows();
			
			return $data;
	}
	
	function simpan_o($file)
	{
			$data = array(
						'nama' => $this->input->post('nama',true),
						'periode' => $this->input->post('periode',true),
						'divisi' => $this->input->post('divisi',true),
						'berkas' => $this->input->post('berkas',true),
						'bukti' =>$file
						);
			$this->db->insert('organisasi',$data);			
	}
	function hapus_o($id)
	{
		$this->db->where('no',$id);
		$this->db->delete('organisasi');
	}
	function edit_o($id)
	{
			$data = array();
			$this->db->select('*');
			$this->db->from('organisasi');
			$this->db->where('no', $id);
			$hasil = $this->db->get();
			
			if($hasil->num_rows() > 0)
			{
					$data = $hasil->row_array();
			}
			return $data;
	}
	function update_o ($file)
	{
		if($file<>'')
		{
			$data = array
				(
				'nama' => $this->input->post('nama',true),
				'periode' => $this->input->post('periode',true),
				'divisi' => $this->input->post('divisi',true),
				'berkas' => $this->input->post('berkas',true),
				'bukti' => $file
				);
		}
			else
	{	
		$data = array
					(
					'nama' => $this->input->post('nama',true),
					'periode' => $this->input->post('periode',true),
					'divisi' => $this->input->post('divisi',true),
					'berkas' => $this->input->post('berkas',true),
					);
	}
		$this->db->where('no',$this->input->post('no',true));
		$this->db->update('organisasi',$data);
	}
}

?>