<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_organisasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_organisasi');
        $this->load->library('upload_service');

        if ($this->session->userdata('level')!="mahasiswa") {
            redirect('C_login/index');
        }
    }

    public function organisasi()
    {
        $data = array();
        $data['data_organisasi']=$this->M_organisasi->where(['id_user' => auth()->id])->get();
        $data['page'] = 'v_mahasiswa/organisasi/organisasi';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function input_o()
    {
        $data['page'] = 'v_mahasiswa/organisasi/input_o';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function simpan_o()
    {
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => date('ymdhis')
        ]);

        $this->M_organisasi->insert($_REQUEST, [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_organisasi/organisasi');
    }
    public function hapus_o($id)
    {
        $this->M_organisasi->delete($id, 'no');
        redirect('C_organisasi/organisasi');
    }
    public function edit_o($id)
    {
        $data = array();
        $data['edit_o'] = $this->M_organisasi->find($id, 'no');

        $data['page'] = 'v_mahasiswa/organisasi/edit_o';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function update_o($id)
    {
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => date('ymdhis')
        ]);

        $this->M_organisasi->updateData($id, $_REQUEST, 'no', [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_organisasi/organisasi');
    }
}

/* End of file c_organisasi.php */
/* Location: ./application/controllers/c_organisasi.php */
