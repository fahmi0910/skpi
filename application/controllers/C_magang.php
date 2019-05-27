<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_magang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_magang');
        $this->load->library('upload_service');

        if ($this->session->userdata('level')!="mahasiswa") {
            redirect('C_login/index');
        }
    }

    public function magang()
    {
        $data = array();
        $data['data_magang']=$this->M_magang->where(['id_user' => auth()->id])->get();
        $data['page'] = 'v_mahasiswa/magang/magang';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function input()
    {
        $data['page'] = 'v_mahasiswa/magang/input';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function simpan()
    {
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'file_name' => auth_user_organisasi()->nim.$_REQUEST['tempat']
        ]);

        $this->M_magang->insert($_REQUEST, [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_magang/magang');
    }
    public function hapus($id)
    {
        $this->M_magang->delete($id, 'no');
        redirect('C_magang/magang');
    }
    public function edit($id)
    {
        $data = array();
        $data['edit'] = $this->M_magang->find($id, 'no');

        $data['page'] = 'v_mahasiswa/magang/edit';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function update($id)
    {
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'file_name' => auth_user_organisasi()->nim.$_REQUEST['tempat']
        ]);

        $this->M_magang->updateData($id, $_REQUEST, 'no', [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_magang/magang');
    }
}

/* End of file c_magang.php */
/* Location: ./application/controllers/c_magang.php */
