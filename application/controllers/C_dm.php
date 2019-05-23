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
        $data['mahasiswa'] = $this->M_sistem->getLeftJoinIdentitasDiri()
                            ->getSeminarUser()
                            ->getPrestasiUser()
                            ->getProdiUser()
                            ->getMagangUser()
                            ->getKepanitiaanUser()
                            ->getKaryaIlmiahUser()
                            ->getKeahlianUser()
                            ->find($id, 't_user.id');
        
        $this->load->library('PdfGenerator');

        $html = $this->load->view('v_prodi/pdfskpi', $data, true);

        $this->pdfgenerator->generate($html, 'contoh');
    }
}

/* End of file c_prodi.php */
/* Location: ./application/controllers/c_prodi.php */
