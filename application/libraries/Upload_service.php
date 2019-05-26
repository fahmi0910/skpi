<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_service
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }
    public function photo($file, array $config = null)
    {
        $this->ci->load->library('upload', $config);
        $extension = pathinfo($file[array_keys($file)[0]]["name"], PATHINFO_EXTENSION);
        if (! $this->ci->upload->do_upload(array_keys($file)[0])) {
            $error = array('error' => $this->ci->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->ci->upload->data());
        }
        
        return $config['file_name'].'.'.$extension;
    }
}



/* End of file upload.php */
/* Location: ./application/libraries/upload.php */
