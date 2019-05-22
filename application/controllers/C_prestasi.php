<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_prestasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_prestasi');
        $this->load->library('upload_service');

        if ($this->session->userdata('level')!="mahasiswa") {
            redirect('C_login/index');
        }
    }

    public function prestasi()
    {
        $data = array();
        $data['data_prestasi']=$this->M_prestasi->where(['id_user' => auth()->id])->get();
        $data['page'] = 'v_mahasiswa/prestasi/prestasi';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function input_p()
    {
        $data['page'] = 'v_mahasiswa/prestasi/input_prestasi';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function simpan_p()
    {
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => date('ymdhis')
        ]);

        $this->M_prestasi->insert($_REQUEST, [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_prestasi/prestasi');
    }
    public function hapus_p($id)
    {
        $this->M_prestasi->delete($id, 'no');
        redirect('C_prestasi/prestasi');
    }
    public function edit_p($id)
    {
        $data = array();
        $data['edit_p'] = $this->M_prestasi->find($id, 'no');
        $data['page'] = 'v_mahasiswa/prestasi/edit_p';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function update_p($id)
    {
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => date('ymdhis')
        ]);

        $this->M_prestasi->updateData($id, $_REQUEST, 'no', [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);
        redirect('C_prestasi/prestasi');
    }
}

/* End of file c_prestasi.php */
/* Location: ./application/controllers/c_prestasi.php */
