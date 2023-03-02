<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dokumentasi extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Dokumentasi',
            'isi' => 'admin/dokumentasi/home'
        );

        $this->load->view('admin/layout', $data, FALSE);
        
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_pengunjung', 'nama_pengunjung', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Tambah Dokumentasi',
                'isi' => 'admin/dokumentasi/tambah'
            );
            $this->load->view('admin/layout', $data, FALSE);
        } else {
            $nama_pengunjung = $this->input->post('nama_pengunjung');
            $tanggal = $this->input->post('tanggal');
            $deskripsi = $this->input->post('deskripsi');


            $config['upload_path'] = 'vendor/dokumentasi';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size']  = '99999';
            $config['max_width']  = '9999';
            $config['max_height']  = '9999';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('thumbnail')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('pesan', "<script>alert('$error')</script>");
                redirect(base_url('admins/dokumentasi/tambah'));
            } else {
                $data = array(
                    'thumbnail' => $this->upload->data('file_name'),
                    'nama_pengunjung' => $nama_pengunjung,
                    'tanggal' => $tanggal,
                    'deskripsi' => $deskripsi,
                );

                $this->db->insert('tb_dokumentasi', $data);
                $this->session->set_flashdata('pesan', '<script>alert("Success Post Dokumentasi")</script>');
                redirect(base_url('admins/dokumentasi'));
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama_pengunjung', 'Nama Pengunjung', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Dokumentasi',
                'isi' => 'admin/dokumentasi/edit',
                'id' => $id
            );

            $this->load->view('admin/layout', $data, FALSE);
        } else {
            $nama_pengunjung = $this->input->post('nama_pengunjung');
            $tanggal = $this->input->post('tanggal');
            $deskripsi = $this->input->post('deskripsi');

            $config['upload_path'] = 'vendor/dokumentasi/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size']  = '9999';
            $config['max_width']  = '9999';
            $config['max_height']  = '9999';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('thumbnail')) {
                $data = array(
                    'nama_pengunjung' => $nama_pengunjung,
                    'tanggal' => $tanggal,
                    'deskripsi' => $deskripsi,
                );

                $this->db->where('id_dokumentasi', $id);
                $this->db->update('tb_dokumentasi', $data);
                $this->session->set_flashdata('pesan', '<script>alert("Berhasil update")</script>');
                redirect(base_url('admins/dokumentasi'));
            } else {
                $data = array(
                    'thumbnail' => $this->upload->data('file_name'),
                    'nama_pengunjung' => $nama_pengunjung,
                    'tanggal' => $tanggal,
                    'deskripsi' => $deskripsi,
                );

                $this->db->where('id_dokumentasi', $id);
                $this->db->update('tb_dokumentasi', $data);
                $this->session->set_flashdata('pesan', '<script>alert("Berhasil update")</script>');
                redirect(base_url('admins/dokumentasi'));
            }
        }
    }

    public function hapus($id)
    {
        $this->db->where('id_dokumentasi', $id);
        $this->db->delete('tb_dokumentasi');
        $this->session->set_flashdata('pesan', '<script>alert("Berhasil hapus data")</script>');
        redirect(base_url('admins/dokumentasi'));
    }
}

/* End of file Dokumentasi.php */
