<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_datadiri');
        $this->load->model('M_prodi');
        if ($this->session->userdata('level')!="mahasiswa") {
            redirect(C_login/index);
        }
    }

    public function index()
    {
        $user = $this->session->userdata('auth');
        $data = array();
        $data['data_diri'] = $this->M_datadiri->where(['id_user' => $user[0]->id])->get();
        $data['page'] = 'v_mahasiswa/identitas';
        $this->load->view('v_mahasiswa/template_m', $data);
    }

    public function input_m()
    {
        $data = array();
        $data['page'] = 'v_mahasiswa/input_m';
        $data['prodi'] = $this->M_prodi->get('id, prodi');
        $this->load->view('v_mahasiswa/template_m', $data);
    }

    public function simpan_data_diri()
    {
        $this->M_datadiri->insert($_REQUEST, [
            'id_user' => $this->session->userdata('auth')[0]->id
        ]);

        redirect('C_mahasiswa/index');
    }
    
    public function edit($id)
    {
        $data = array();
        $data['page'] = 'v_mahasiswa/edit_m';
        $data['data_diri'] = $this->M_datadiri->find($id, 'nim');
        $data['prodi'] = $this->M_prodi->get('id, prodi');
        
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function update_data_diri($id)
    {
        $this->M_datadiri->updateData($id, $_REQUEST, 'nim');
        
        redirect('C_mahasiswa');
    }
    
    public function hapus_data_diri($id)
    {
        $this->M_datadiri->delete($id, 'nim');
        
        redirect('C_mahasiswa');
    }
}

/* End of file c_prodi.php */
/* Location: ./application/controllers/c_prodi.php */
