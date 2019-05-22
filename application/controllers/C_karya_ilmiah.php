<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_karya_ilmiah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_karya_ilmiah');
        $this->load->library('upload_service');

        if ($this->session->userdata('level')!="mahasiswa") {
            redirect('C_login/index');
        }
    }

    public function karya_ilmiah()
    {
        $data = array();
        $data['data_karya_ilmiah']=$this->M_karya_ilmiah->where(['id_user' => auth()->id])->get();
        $data['page'] = 'v_mahasiswa/karya_ilmiah/karya_ilmiah';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function input()
    {
        $data['page'] = 'v_mahasiswa/karya_ilmiah/input';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function simpan()
    {
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => date('ymdhis')
        ]);

        $this->M_karya_ilmiah->insert($_REQUEST, [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_karya_ilmiah/karya_ilmiah');
    }
    public function hapus($id)
    {
        $this->M_karya_ilmiah->delete($id, 'no');
        redirect('C_karya_ilmiah/karya_ilmiah');
    }
    public function edit($id)
    {
        $data = array();
        $data['edit'] = $this->M_karya_ilmiah->find($id, 'no');

        $data['page'] = 'v_mahasiswa/karya_ilmiah/edit';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function update($id)
    {
        $filename = $this->upload_service->photo($_FILES, [
            'upload_path' => './assets/upload',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => date('ymdhis')
        ]);

        $this->M_karya_ilmiah->updateData($id, $_REQUEST, 'no', [
            'bukti' => $filename,
            'id_user' => auth()->id
        ]);

        redirect('C_karya_ilmiah/karya_ilmiah');
    }
}

/* End of file c_karya_ilmiah.php */
/* Location: ./application/controllers/c_karya_ilmiah.php */
