<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_sistem');
        $this->load->model('M_prestasi');
        $this->load->model('M_prodi');
        $this->load->model('M_magang');
        $this->load->model('M_datadiri');
        $this->load->model('M_seminar');
        $this->load->model('M_keahlian');
        $this->load->model('M_organisasi');
        $this->load->model('M_kepanitiaan');
        $this->load->model('M_karya_ilmiah');
        $this->load->model('M_user_organisasi');
        if ($this->session->userdata('level')!="a_prodi") {
            redirect(C_login/index);
        }
    }
    public function index()
    {
        $data = array();
        $data['ambil_data']=$this->M_sistem->where(['level' => 'mahasiswa'])->getLeftJoinIdentitasDiri()->get();
        $data['page'] = 'v_prodi/data_mahasiswa';
        $this->load->view('v_prodi/template_p', $data);
    }

    public function ambil($id)
    {
        $string = 'identitas_diri.nama AS identitas_diri_nama,
                    identitas_diri.nim AS identitas_diri_nim,
                    identitas_diri.ttl AS identitas_diri_ttl,
                    identitas_diri.no_ijazah AS identitas_diri_no_ijazah,
                    identitas_diri.masuk AS identitas_diri_masuk,
                    identitas_diri.lulus AS identitas_diri_lulus,
                    identitas_diri.gelar AS identitas_diri_gelar,
                    prodi.*,
                    prodi.nama AS prodi_nama,
                    ';
        $data['mahasiswa'] = $this->M_sistem->getIdentitasDiri()
                            ->getProdiUser()
                            ->find(
                                $id,
                                't_user.id',
                                $string
                            );
        $data['mahasiswa_prestasi'] = $this->M_prestasi->where(['id_user' => $id])->get();
        $data['mahasiswa_magang'] = $this->M_magang->where(['id_user' => $id])->get();
        $data['mahasiswa_keahlian'] = $this->M_keahlian->where(['id_user' => $id])->get();
        $data['mahasiswa_kepanitiaan'] = $this->M_kepanitiaan->where(['id_user' => $id])->get();
        $data['mahasiswa_seminar'] = $this->M_seminar->where(['id_user' => $id])->get();
        $data['mahasiswa_karya_ilmiah'] = $this->M_karya_ilmiah->where(['id_user' => $id])->get();
        $data['mahasiswa_user_organisasi'] = $this->M_user_organisasi->getOrganisasiData()->where(['id_user' => $id])->get();
        // dd($data);
        $data['page'] = 'v_prodi/skpi';
        $this->load->view('v_prodi/template_p', $data);
    }
    
    public function edit_data_diri($id)
    {
        $data = array();
        $data['page'] = 'v_mahasiswa/edit_m';
        $data['data_diri'] = $this->M_datadiri->find($id, 'nim');
        $data['prodi'] = $this->M_prodi->get('id, prodi');
        
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    
    public function edit_prodi($id)
    {
        $data = array();
        $data['page'] = 'v_prodi/v_management_prodi/edit';
        $data['prodi'] = $this->M_prodi->find($id);
        $this->load->view('v_prodi/template_p', $data);
    }
    
    public function edit_prestasi($id)
    {
        $data = array();
        $data['edit_p'] = $this->M_prestasi->find($id, 'no');
        $data['page'] = 'v_mahasiswa/prestasi/edit_p';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    
    public function edit_pelatihan($id)
    {
        $data = array();
        $data['edit_s'] = $this->M_seminar->find($id, 'no');

        $data['page'] = 'v_mahasiswa/seminar/edit_s';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    
    public function edit_user_organisasi($id)
    {
        $data = array();
        $data['edit_o'] = $this->M_user_organisasi->find($id, 'user_organisasi.id');
        $data['organisasis'] = $this->M_organisasi->get();
        $data['page'] = 'v_mahasiswa/organisasi/edit_o';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    
    public function edit_keahlian($id)
    {
        $data = array();
        $data['edit'] = $this->M_keahlian->find($id, 'no');

        $data['page'] = 'v_mahasiswa/keahlian/edit_keahlian';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    
    public function edit_magang($id)
    {
        $data = array();
        $data['edit'] = $this->M_magang->find($id, 'no');

        $data['page'] = 'v_mahasiswa/magang/edit';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    
    public function edit_karya_ilmiah($id)
    {
        $data = array();
        $data['edit'] = $this->M_karya_ilmiah->find($id, 'no');

        $data['page'] = 'v_mahasiswa/karya_ilmiah/edit';
        $this->load->view('v_mahasiswa/template_m', $data);
    }

    public function edit_kepanitiaan($id)
    {
        $data = array();
        $data['edit'] = $this->M_kepanitiaan->find($id, 'no');

        $data['page'] = 'v_mahasiswa/kepanitiaan/edit';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
}

/* End of file c_prodi.php */
/* Location: ./application/controllers/c_prodi.php */
