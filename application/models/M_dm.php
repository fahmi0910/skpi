<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dm extends CI_Model {

    function ambil_data()
    {	
        $hasil=$this->db->query("SELECT * FROM mahasiswa");

        return $hasil;
    }

}

/* End of file m_datadiri.php */
/* Location: ./application/models/m_datadiri.php */
