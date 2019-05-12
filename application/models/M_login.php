<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function login($user,$pass){

		$this->db->select('*');
		$this->db->from('t_user');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows()==1){
			return $query->result();

		}else{
			return false;
		}
	}

}

