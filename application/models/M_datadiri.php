<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datadiri extends CI_Model {

	function ambil_data($id)
	{	

		$hasil=$this->db->query("SELECT * FROM identitas_diri  WHERE id_user = ". $id);
		
		return $hasil;
	}

	function simpan($nim,$nama,$ttl,$no_ijazah,$masuk,$lulus,$gelar,$id_user)
	{
		$hasil=$this->db->query("INSERT INTO identitas_diri (nim,nama,ttl,no_ijazah,masuk,lulus,gelar,id_user) VALUES ('$nim','$nama','$ttl','$no_ijazah','$masuk','$lulus','$gelar','$id_user')");
		return $hasil;
	
	}

}

/* End of file m_datadiri.php */
/* Location: ./application/models/m_datadiri.php */