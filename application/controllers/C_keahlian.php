<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_keahlian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_keahlian');
        $this->load->library('upload_service');

        if ($this->session->userdata('level')!="mahasiswa") {
            redirect('C_login/index');
        }
    }

    public function keahlian()
    {
        $data = array();
        $data['data_keahlian']=$this->M_keahlian->where(['id_user' => auth()->id])->get();
        $data['page'] = 'v_mahasiswa/keahlian/keahlian';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function input()
    {
        $data['page'] = 'v_mahasiswa/keahlian/input_keahlian';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function simpan()
    {
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => auth_user_organisasi()->nim.date('ymdhis').$_REQUEST['nama']
        ]);

        $this->M_keahlian->insert($_REQUEST, [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_keahlian/keahlian');
    }
    public function hapus($id)
    {
        $this->M_keahlian->delete($id, 'no');
        redirect('C_keahlian/keahlian');
    }
    public function edit($id)
    {
        $data = array();
        $data['edit'] = $this->M_keahlian->find($id, 'no');

        $data['page'] = 'v_mahasiswa/keahlian/edit_keahlian';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function update($id)
    {
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => auth_user_organisasi()->nim.date('ymdhis').$_REQUEST['nama']
        ]);

        $this->M_keahlian->updateData($id, $_REQUEST, 'no', [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_keahlian/keahlian');
    }
}

/* End of file c_keahlian.php */
/* Location: ./application/controllers/c_keahlian.php */
