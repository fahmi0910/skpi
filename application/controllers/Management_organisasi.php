<?php
defined('BASEPATH') or exit('No direct script access allowed');

class management_organisasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_organisasi');
        if ($this->session->userdata('level')!="a_prodi") {
            redirect('C_login/index');
        }
    }

    public function index()
    {
        $data = array();
        $data['page'] = 'v_prodi/v_management_organisasi/management';
        $data['organisasi'] = $this->M_organisasi->get();
        $this->load->view('v_prodi/template_p', $data);
    }

    public function tambah_organisasi()
    {
        $data = array();
        $data['page'] = 'v_prodi/v_management_organisasi/tambah';
        $this->load->view('v_prodi/template_p', $data);
    }

    public function simpan_organisasi()
    {
        $this->M_organisasi->insert($_REQUEST);

        redirect('management_organisasi');
    }

    public function edit($id)
    {
        $data = array();
        $data['page'] = 'v_prodi/v_management_organisasi/edit';
        $data['organisasi'] = $this->M_organisasi->find($id);
        $this->load->view('v_prodi/template_p', $data);
    }

    public function update_organisasi($id)
    {
        $this->M_organisasi->updateData($id, $_REQUEST);

        redirect('management_organisasi');
    }
    
    public function hapus_organisasi($id)
    {
        $this->M_organisasi->delete($id);
        
        redirect('management_organisasi');
    }
}
