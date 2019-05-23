<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_sistem');
        if ($this->session->userdata('level')!="a_prodi") {
            redirect(C_login/index);
        }
    }
    public function index()
    {
        $data = array();
        $data['ambil_data']=$this->M_sistem->where(['level' => 'mahasiswa'])->getLeftJoinIdentitasDiri()->get();
        $data['page'] = 'v_prodi/data_mahasiswa';
        $this->load->view('v_prodi/template_p', $data);
    }

    public function ambil($id)
    {
        $this->load->library('PdfGenerator');

        $data['users']=array(
            array('firstname'=>'Agung','lastname'=>'Setiawan','email'=>'ag@setiawan.com'),
            array('firstname'=>'Hauril','lastname'=>'Maulida Nisfar','email'=>'hm@setiawan.com'),
            array('firstname'=>'Akhtar','lastname'=>'Setiawan','email'=>'akh@setiawan.com'),
            array('firstname'=>'Gitarja','lastname'=>'Setiawan','email'=>'git@setiawan.com')
        );

        $html = $this->load->view('v_prodi/pdfskpi', $data, true);

        $this->pdfgenerator->generate($html, 'contoh');
    }
}

/* End of file c_prodi.php */
/* Location: ./application/controllers/c_prodi.php */
