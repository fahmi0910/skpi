<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_kepanitiaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kepanitiaan');

        if ($this->session->userdata('level')!="mahasiswa") {
            redirect(C_login/index);
        }
    }

    public function kepanitiaan()
    {
        $data = array();
        $data['data_kepanitiaan']=$this->M_kepanitiaan->data();
        $data['kirim_kepanitiaan']=$this->M_kepanitiaan->kirim();
        $data['page'] = 'v_mahasiswa/kepanitiaan/kepanitiaan';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function input()
    {
        $data['page'] = 'v_mahasiswa/kepanitiaan/input';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function simpan()
    {
        // $data = array();
        // $data['aktif'] = 'active';
        // $data['page'] = 'masukan';
        // $this->load->view('template',$data);
        //upload file
        $config['file_name'] = $this->input->post('nama', true);
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpg|png';
        $config['overwrite']= true;
            

        //setting proses size
        $config['image_library']='gd2';
        $config['maintain_ratio']= true;
        $config['quality'] = '50%';
        $config['width'] = 600;
        $config['height'] = 400;
            
        $this->load->library('upload', $config);
            
        $this->upload->do_upload("bukti");
        $data = $this->upload->data();
            
        $path = $_FILES['bukti']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
            
        if ($ext=='') {
            $file='';
        } else {
            $file = $this->input->post('nama', true).'.'.$ext;
        }

        $this->M_kepanitiaan->simpan($file);
        //print_r($this->upload->display_errors());
        redirect('C_kepanitiaan/kepanitiaan');
    }
    public function hapus()
    {
        $this->M_kepanitiaan->hapus($this->uri->segment(3));
        if ($this->db->affected_rows()) {
            $this->session->set_flashdata('info', 'Berhasil di hapus!');
        } else {
            $this->session->set_flashdata('info', 'Gagal di hapus!');
        }
        redirect('C_kepanitiaan/kepanitiaan');
    }
    public function edit()
    {
        $data = array();
        $data['edit'] = $this->M_kepanitiaan->edit($this->uri->segment(3));
            
            
        // echo $this->db->last_query();exit;
        $data['page'] = 'v_mahasiswa/kepanitiaan/edit';
        $this->load->view('v_mahasiswa/template_m', $data);
    }
    public function update()
    {
        $config['file_name'] = $this->input->post('nama', true);
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpg|png';
        $config['overwrite']= true;
        

        //setting proses size
        $config['image_library']='gd2';
        $config['maintain_ratio']= true;
        $config['quality'] = '50%';
        $config['width'] = 600;
        $config['height'] = 400;
        
        $this->load->library('upload', $config);
        
        
        $path = $_FILES['bukti']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        
        if ($ext=='') {
            $file='';
        } else {
            $file = $this->input->post('nama', true).'.'.$ext;
        }

        //proses resize
        $config['source_image']='./asset/upload/'.$file;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $this->upload->do_upload("bukti");
        $data = $this->upload->data();

        $this->M_kepanitiaan->update($file);
        redirect('C_kepanitiaan/kepanitiaan');
    }
}

/* End of file c_kepanitiaan.php */
/* Location: ./application/controllers/c_kepanitiaan.php */
