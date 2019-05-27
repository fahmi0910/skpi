<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_user_prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_sistem');

        if ($this->session->userdata('level')!="a_sistem") {
            redirect('C_login/index');
        }
    }

    public function index()
    {
        $data = array();
        $data['users'] = $this->M_sistem
                                ->where(['level' => 'a_prodi'])
                                ->get();
        $data['page'] = 'v_sistem/prodi/user_prodi';
        $this->load->view('v_sistem/template_s', $data);
    }

    public function input()
    {
        $data['page'] = 'v_sistem/prodi/input';
        $this->load->view('v_sistem/template_s', $data);
    }
    public function simpan()
    {
        $this->M_sistem->insert($_REQUEST, [
            'level' => 'a_prodi'
        ]);
        redirect('C_user_prodi/index');
    }

    public function edit($id)
    {
        $data['user'] = $this->M_sistem->find($id);
        $data['page'] = 'v_sistem/prodi/edit';
        $this->load->view('v_sistem/template_s', $data);
    }
    
    public function update($id)
    {
        $this->M_sistem->updateData($id, $_REQUEST);
        
        redirect('C_user_prodi');
    }

    public function hapus($id)
    {
        $this->M_sistem->delete($id);
        
        redirect('C_user_prodi');
    }
}
