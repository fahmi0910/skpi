<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_service
{
    protected $ci;

    public function __construct()
    {
        $this->ci = get_instance();
    }
    public function photo($file, array $config = null)
    {
        $config['allowed_types'] = 'jpg|gif|png|jpeg|JPG|PNG';
        $config['max_size'] = 5000;
        $config['max_width'] = 5024;
        $config['max_height'] = 7568;
        $config['overwrite'] = true;
        $this->ci->load->library('upload', $config);
        $extension = pathinfo($file[array_keys($file)[0]]["name"], PATHINFO_EXTENSION);

        // dd($file[array_keys($file)[0]]);
        if (! $this->ci->upload->do_upload(array_keys($file)[0])) {
            $error = array('error' => $this->ci->upload->display_errors());
            dd($error);
        } else {
            $data = array('upload_data' => $this->ci->upload->data());
        }
        $file_name = str_replace(' ', '_', $config['file_name'].'.'.$extension);

        return $file_name;
    }
}



/* End of file upload.php */
/* Location: ./application/libraries/upload.php */
