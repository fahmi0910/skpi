<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_sistem');
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
                    identitas_diri.ttl AS identitas_diri_ttl,
                    identitas_diri.no_ijazah AS identitas_diri_no_ijazah,
                    identitas_diri.masuk AS identitas_diri_masuk,
                    identitas_diri.lulus AS identitas_diri_lulus,
                    identitas_diri.gelar AS identitas_diri_gelar,
                    karya_ilmiah.* ,
                    keahlian.*,
                    kepanitiaan.*,
                    magang.*,
                    prestasi.*,
                    prodi.*,
                    seminar.*';
        $data['mahasiswa'] = $this->M_sistem->getIdentitasDiri()
                            ->getSeminarUser()
                            ->getPrestasiUser()
                            ->getProdiUser()
                            ->getMagangUser()
                            ->getKepanitiaanUser()
                            ->getKaryaIlmiahUser()
                            ->getKeahlianUser()
                            ->find(
                                $id,
                                't_user.id',
                                $string
                        );
                            
        $data['page'] = 'v_prodi/skpi';
        $this->load->view('v_prodi/template_p', $data);
    }
}

/* End of file c_prodi.php */
/* Location: ./application/controllers/c_prodi.php */
