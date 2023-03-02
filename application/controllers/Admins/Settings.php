<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Settings',
            'isi' => 'admin/settings'
        );

        $this->load->view('admin/layout', $data, FALSE);
    }

    public function edit($id)
    {
        $judul_halaman = $this->input->post('judul_halaman');
        $text_sambutan = $this->input->post('text_sambutan');
        $desc_sambutan = $this->input->post('desc_sambutan');
        $desc_web = $this->input->post('desc_web');
        $alamat = $this->input->post('alamat');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $twitter = $this->input->post('twitter');
        $instagram = $this->input->post('instagram');
        $facebook = $this->input->post('facebook');


        $config['upload_path'] = 'vendor/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '9999999';
        $config['max_width']  = '99999';
        $config['max_height']  = '99999';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('sampul')) {
            $data = array(
                'judul_halaman' => $judul_halaman,
                'text_sambutan' => $text_sambutan,
                'desc_sambutan' => $desc_sambutan,
                'desc_web' => $desc_web,
                'alamat' => $alamat,
                'phone' => $phone,
                'email' => $email,
                'twitter' => $twitter,
                'instagram' => $instagram,
                'facebook' => $facebook,
            );

            $this->db->update('tb_settings', $data);
            $this->session->set_flashdata('pesan', '<script>alert("Success Edited")</script>');
            redirect('admins/settings');
        } else {
            $dataa = array('upload_data' => $this->upload->data());

            $data = array(
                'judul_halaman' => $judul_halaman,
                'text_sambutan' => $text_sambutan,
                'desc_sambutan' => $desc_sambutan,
                'sampul_website' => $this->upload->data('file_name'),
                'desc_web' => $desc_web,
                'alamat' => $alamat,
                'phone' => $phone,
                'email' => $email,
                'twitter' => $twitter,
                'instagram' => $instagram,
                'facebook' => $facebook,
            );

            $this->db->update('tb_settings', $data);
            $this->session->set_flashdata('pesan', '<script>alert("Success Edited")</script>');
            redirect('admins/settings');
        }
    }
}

/* End of file Settings.php */
