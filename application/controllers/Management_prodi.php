<?php
defined('BASEPATH') or exit('No direct script access allowed');

class management_prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_prodi');
        if ($this->session->userdata('level')!="a_prodi") {
            redirect(C_login/index);
        }
    }

    public function index()
    {
        $data = array();
        $data['page'] = 'v_prodi/v_management_prodi/management';
        $data['prodi'] = $this->M_prodi->get();
        $this->load->view('v_prodi/template_p', $data);
    }

    public function tambah_prodi()
    {
        $data = array();
        $data['page'] = 'v_prodi/v_management_prodi/tambah';
        $this->load->view('v_prodi/template_p', $data);
    }

    public function simpan_data_diri()
    {
        $this->M_prodi->insert($_REQUEST);

        redirect('management_prodi');
    }

    public function edit($id)
    {
        $data = array();
        $data['page'] = 'v_prodi/v_management_prodi/edit';
        $data['prodi'] = $this->M_prodi->find($id);
        $this->load->view('v_prodi/template_p', $data);
    }

    public function update_prodi($id)
    {
        $this->M_prodi->updateData($id, $_REQUEST);

        redirect('management_prodi');
    }
    
    public function hapus_prodi($id)
    {
        $this->M_prodi->delete($id);
        
        redirect('management_prodi');
    }
}
