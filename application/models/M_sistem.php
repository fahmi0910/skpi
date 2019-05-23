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
    protected $status;

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
}
