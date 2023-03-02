<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $users = $this->db->get_where('tb_users', ['email' => $email])->row_array();

            if ($users > 0) {
                if (password_verify($password, $users['password'])) {
                    $data = array(
                        'users' => $users
                    );
                    $this->session->set_userdata($data);
                    redirect(base_url('admins/dashboard'));
                } else {
                    $this->session->set_flashdata('pesan', '<script>alert("Password Salah")</script>');
                    redirect(base_url('admin'));
                }
            } else {
                $this->session->set_flashdata('pesan', '<script>alert("Akun tidak ditemukan")</script>');
                redirect(base_url('admin'));
            }
        }
    }

    public function logout()
    {
        
        $this->session->unset_userdata('users');
        redirect(base_url(''));
        
    }
}

/* End of file Admin.php */
