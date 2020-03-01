<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
    }
    

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'Login Page',
            ];
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                        'email' => $user['email'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role']=='admin') {
                        redirect('admin');
                    } else {
                    redirect('pasien');
                    }
            }else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password Salah! </div>');
                redirect('auth','refresh');
            }
        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email tidak ditemukan! </div>');
            redirect('auth','refresh');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('nomor', 'Nomor Telepon', 'trim|required');
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[5]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'trim|required|min_length[5]|matches[password1]');
        
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'Register',
            ];
            $this->load->view('auth/register', $data);
        } else {
            $data = [
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'no_telp' => $this->input->post('nomor'),
                'nama_lengkap' => $this->input->post('nama'),
                'role' => 'pasien',
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil daftar, silahkan login menggunakan email anda! </div>');
            redirect('auth','refresh');
        }
        
        
        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth','refresh');
    }

}

/* End of file Auth.php */
