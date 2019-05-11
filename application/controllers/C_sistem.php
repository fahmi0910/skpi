<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_sistem extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
		
	}

	public function index()
	{
		$this->load->view('home_s');
	}

}