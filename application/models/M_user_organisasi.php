<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user_organisasi extends CI_Model
{
    protected $table = 'user_organisasi';

    public function getOrganisasiData()
    {
        $this->db->join('organisasi', 'user_organisasi.id_organisasi = organisasi.id');

        return $this;
    }
}
