<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sistem extends CI_Model
{
	public function data()
	{			
		$data = array();
		$this->db->select('t_user.*, identitas_diri.nama');
		$this->db->from('t_user');
		$this->db->join('identitas_diri', 't_user.id = identitas_diri.id_user');
		$hasil = $this->db->get();
		
		if($hasil->num_rows() > 0)
		{
				$data = $hasil->result();
		}
		return $data;
	}
	
	public function kirim()
	{
			$this->db->select('*');
			$this->db->from('t_user');
			$hasil = $this->db->get();
			
			$data = $hasil->num_rows();
			
			return $data;
	}
	public function simpan($data)
	{
		$keys= array_keys($data);
		$query = "
					INSERT INTO t_user ($keys[0], $keys[1], level) VALUES ('$data[username]', '$data[password]', 'mahasiswa');
				";

		$hasil=$this->db->query($query);
		$id_user = $this->db->insert_id();
		$query = "
					INSERT INTO identitas_diri ($keys[2], id_user) VALUES ('$data[nama]', '$id_user');
				";

		$hasil=$this->db->query($query);

		return $hasil;
	}

}