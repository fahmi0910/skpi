<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_sistem extends CI_Model
{
    protected $table = 't_user';
    protected $column = [
        'username',
        'password',
        'level'
    ];

    public function getIdentitasDiri()
    {
        $this->db->join('identitas_diri', 't_user.id = identitas_diri.id_user');

        return $this;
    }
    public function getLeftJoinIdentitasDiri()
    {
        $this->db->join('identitas_diri', 't_user.id = identitas_diri.id_user', 'left');

        return $this;
    }

    public function getProdiUser()
    {
        $this->db->join('prodi', 'identitas_diri.prodi_id = prodi.id', 'left');

        return $this;
    }

    public function getSeminarUser()
    {
        $this->db->join('seminar', 'seminar.id_user = t_user.id', 'left');

        return $this;
    }
    public function getPrestasiUser()
    {
        $this->db->join('prestasi', 'prestasi.id_user = t_user.id', 'left');

        return $this;
    }
    
    public function getMagangUser()
    {
        $this->db->join('magang', 'magang.id_user = t_user.id', 'left');

        return $this;
    }
    
    public function getKepanitiaanUser()
    {
        $this->db->join('kepanitiaan', 'kepanitiaan.id_user = t_user.id', 'left');

        return $this;
    }
    public function getKaryaIlmiahUser()
    {
        $this->db->join('karya_ilmiah', 'karya_ilmiah.id_user = t_user.id', 'left');

        return $this;
    }
    public function getKeahlianUser()
    {
        $this->db->join('keahlian', 'keahlian.id_user = t_user.id', 'left');

        return $this;
    }
}
