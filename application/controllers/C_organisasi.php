<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_organisasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user_organisasi');
        $this->load->model('M_organisasi');
        $this->load->library('upload_service');

        if ($this->session->userdata('level')!="mahasiswa") {
            redirect('C_login/index');
        }
    }

    public function organisasi()
    {
        $data = array();
        $data['data_organisasi'] = $this->M_user_organisasi
                                    ->getOrganisasiData()
                                    ->where(['id_user' => auth()->id])
                                    ->get('user_organisasi.*, user_organisasi.id AS id_user_organisasi, organisasi.*');

        $data['page'] = 'v_mahasiswa/organisasi/organisasi';
        $this->load->view('v_mahasiswa/template_m', $data);
    }

    public function input_o()
    {
        $data['page'] = 'v_mahasiswa/organisasi/input_o';
        $data['organisasis'] = $this->M_organisasi->get();
        $this->load->view('v_mahasiswa/template_m', $data);
    }

    public function simpan_o()
    {
        $organisasi = $this->M_organisasi->find($_REQUEST['id_organisasi']);
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => $organisasi->nama.auth_user_organisasi()->nim.date('ymdhis')
        ]);

        $this->M_user_organisasi->insert($_REQUEST, [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_organisasi/organisasi');
    }
    public function hapus_o($id)
    {
        $this->M_user_organisasi->delete($id);
        redirect('C_organisasi/organisasi');
    }
    public function edit_o($id)
    {
        $data = array();
        $data['edit_o'] = $this->M_user_organisasi->find($id, 'user_organisasi.id');
        $data['organisasis'] = $this->M_organisasi->get();
        $data['page'] = 'v_mahasiswa/organisasi/edit_o';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function update_o($id)
    {
        $organisasi = $this->M_organisasi->find($_REQUEST['id_organisasi']);
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => $organisasi->nama.auth_user_organisasi()->nim.date('ymdhis')
        ]);

        $this->M_user_organisasi->updateData($id, $_REQUEST, 'user_organisasi.id', [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_organisasi/organisasi');
    }
}

/* End of file c_organisasi.php */
/* Location: ./application/controllers/c_organisasi.php */
