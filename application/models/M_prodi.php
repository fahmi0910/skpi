<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_prodi extends CI_Model
{
    protected $table = 'prodi';
    protected $column = [
        'izin',
        'nama',
        'prodi',
        'jenis_dan_program',
        'jenjang',
        'persyaratan',
        'sertifikat_akreditasi',
        'akreditasi',
        'lama_studi',
        'bahasa',
        'sistem_penilaian',
        'jenis_lanjutan'
    ];
}

/* End of file M_prodi.php */
/* Location: ./application/models/M_prodi.php */
