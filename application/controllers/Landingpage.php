<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Landingpage extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('subject', 'subject', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $settings = $this->db->get('tb_settings')->row_array();
            $dokumentasi = $this->db->get('tb_dokumentasi', 6)->result();
            $quote = $this->db->get('tb_quote')->result();

            $data = array(
                'title' => 'Istana Pagaruyuang',
                'isi' => 'page/home',
                'settings' => $settings,
                'dokumentasi' => $dokumentasi,
                'quote' => $quote,
            );
            $this->load->view('page/layout', $data, FALSE);
        } else {
            $this->load->library('email');

            $mail_config['smtp_host'] = 'smtp.gmail.com';
            $mail_config['smtp_port'] = '587';
            $mail_config['smtp_user'] = 'alfigofranspratamaa@gmail.com';
            $mail_config['_smtp_auth'] = TRUE;
            $mail_config['smtp_pass'] = 'picipricswlkuism';
            $mail_config['smtp_crypto'] = 'tls';
            $mail_config['protocol'] = 'smtp';
            $mail_config['mailtype'] = 'html';
            $mail_config['send_multipart'] = FALSE;
            $mail_config['charset'] = 'utf-8';
            $mail_config['wordwrap'] = TRUE;
            $this->email->initialize($mail_config);

            $this->email->set_newline("\r\n");

            // Set to, from, message, etc.

            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $subject = htmlspecialchars($_POST['subject']);
            $message = htmlspecialchars($_POST['message']);

            $this->load->library('email');

            $this->email->from($email, $name);
            $this->email->to('alfigofranspratamaa@gmail.com');

            $this->email->subject($subject);
            $this->email->message($message);

            $send = $this->email->send();

            if ($send) {
                echo '<script>alert("Sukses")</script>';
            } else {
                $error = $this->email->print_debugger(array('headers'));
                echo "<script>" . json_encode($error) . "</script>";
            }
        }
    }

    public function dokumentasi($id)
    {
        $settings = $this->db->get('tb_settings')->row_array();
        $dokumentasi = $this->db->get_where('tb_dokumentasi', ['id_dokumentasi' => $id])->row_array();

        $data = array(
            'title' => 'Istana Pagaruyuang',
            'isi' => 'page/dokumentasi/detail',
            'settings' => $settings,
            'dokumentasi' => $dokumentasi,
        );
        $this->load->view('page/layout', $data, FALSE);
    }

    public function alldokumentasi()
    {
        $settings = $this->db->get('tb_settings')->row_array();
        $dokumentasi = $this->db->get('tb_dokumentasi')->result();

        $data = array(
            'title' => 'Istana Pagaruyuang',
            'isi' => 'page/dokumentasi/all',
            'settings' => $settings,
            'dokumentasi' => $dokumentasi,
        );
        $this->load->view('page/layout', $data, FALSE);
    }
}

/* End of file Landingpage.php */
