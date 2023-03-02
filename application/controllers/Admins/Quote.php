<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Quote extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Apa Kata Pengunjung ?',
            'isi' => 'admin/quote/all'
        );

        $this->load->view('admin/layout', $data, FALSE);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
        $this->form_validation->set_rules('quote', 'quote', 'trim|required');



        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Tambah Apa Kata Pengunjung',
                'isi' => 'admin/quote/tambah'
            );

            $this->load->view('admin/layout', $data, FALSE);
        } else {
            $nama = $this->input->post('nama');
            $pekerjaan = $this->input->post('pekerjaan');
            $quote = $this->input->post('quote');

            $config['upload_path'] = 'vendor/quote/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size']  = '9999';
            $config['max_width']  = '9999';
            $config['max_height']  = '9999';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('profile')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('pesan', "<script>alert('$error')</script>");
                redirect(base_url('admins/quote'));
            } else {
                $a = array('upload_data' => $this->upload->data());
                $data = array(
                    'nama' => $nama,
                    'pekerjaan' => $pekerjaan,
                    'quote' => $quote,
                    'profile' => $this->upload->data('file_name')
                );

                $this->db->insert('tb_quote', $data);
                $this->session->set_flashdata('pesan', "<script>alert('Berhasil tambah data')</script>");
                redirect(base_url('admins/quote'));
            }
        }
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_quote');
        $this->session->set_flashdata('pesan', '<script>alert("Berhasil hapus data")</script>');
        redirect(base_url('admins/quote'));
    }
}

/* End of file Quote.php */
