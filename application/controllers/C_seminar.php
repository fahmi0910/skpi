<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_seminar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_seminar');
        $this->load->library('upload_service');

        if ($this->session->userdata('level')!="mahasiswa") {
            redirect('C_login/index');
        }
    }

    public function seminar()
    {
        $data = array();
        $data['data_seminar']=$this->M_seminar->where(['id_user' => auth()->id])->get();
        $data['page'] = 'v_mahasiswa/seminar/seminar';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function input_s()
    {
        $data['page'] = 'v_mahasiswa/seminar/input_s';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function simpan_s()
    {
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
             
            'file_name' => auth_user_organisasi()->nim.$_REQUEST['nama']
        ]);

        $this->M_seminar->insert($_REQUEST, [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_seminar/seminar');
    }
    public function hapus_s($id)
    {
        $this->M_seminar->delete($id, 'no');
        redirect('C_seminar/seminar');
    }
    public function edit_s($id)
    {
        $data = array();
        $data['edit_s'] = $this->M_seminar->find($id, 'no');

        $data['page'] = 'v_mahasiswa/seminar/edit_s';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function update_s($id)
    {
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'file_name' => auth_user_organisasi()->nim.$_REQUEST['nama']
        ]);

        $this->M_seminar->updateData($id, $_REQUEST, 'no', [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_seminar/seminar');
    }
}

/* End of file c_seminar.php */
/* Location: ./application/controllers/c_seminar.php */
