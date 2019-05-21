<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_datadiri extends CI_Model
{
    protected $table = 'identitas_diri';
    protected $column = [
        'nim',
        'nama',
        'ttl',
        'no_ijazah',
        'masuk',
        'lulus',
        'gelar',
        'id_user',
        'prodi_id'
    ];
}

/* End of file m_datadiri.php */
/* Location: ./application/models/m_datadiri.php */
