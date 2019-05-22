<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_kepanitiaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kepanitiaan');
        $this->load->library('upload_service');

        if ($this->session->userdata('level')!="mahasiswa") {
            redirect('C_login/index');
        }
    }

    public function kepanitiaan()
    {
        $data = array();
        $data['data_kepanitiaan']=$this->M_kepanitiaan->where(['id_user' => auth()->id])->get();
        $data['page'] = 'v_mahasiswa/kepanitiaan/kepanitiaan';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function input()
    {
        $data['page'] = 'v_mahasiswa/kepanitiaan/input';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function simpan()
    {
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => date('ymdhis')
        ]);

        $this->M_kepanitiaan->insert($_REQUEST, [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_kepanitiaan/kepanitiaan');
    }
    public function hapus($id)
    {
        $this->M_kepanitiaan->delete($id, 'no');
        redirect('C_kepanitiaan/kepanitiaan');
    }
    public function edit($id)
    {
        $data = array();
        $data['edit'] = $this->M_kepanitiaan->find($id, 'no');

        $data['page'] = 'v_mahasiswa/kepanitiaan/edit';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function update($id)
    {
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => date('ymdhis')
        ]);

        $this->M_kepanitiaan->updateData($id, $_REQUEST, 'no', [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_kepanitiaan/kepanitiaan');
    }
}

/* End of file c_kepanitiaan.php */
/* Location: ./application/controllers/c_kepanitiaan.php */
