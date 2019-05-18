<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level')!="a_prodi") {
            redirect(C_login/index);
        }
    }
    public function index()
    {
        $data = array();
        $data['page'] = 'v_prodi/home_p';
        $this->load->view('v_prodi/template_p', $data);
    }
    public function kualifikasi()
    {
        $data = array();
        $data['page'] = 'v_prodi/kualifikasi';
        $this->load->view('v_prodi/template_p', $data);
    }
    public function skpi()
    {
        $data = array();
        $data['page'] = 'v_prodi/skpi';
        $this->load->view('v_prodi/template_p', $data);
    }
}
