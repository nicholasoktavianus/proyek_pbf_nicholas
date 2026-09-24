<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        if ($this->session->userdata('status') == 'login') {
            redirect('dashboard');
        }
        $this->load->view('login');
    }

    public function aksi_login()
    {
        $username = trim($this->input->post('username', TRUE));
        $password = (string) $this->input->post('password');

        if ($username === '' || $password === '') {
            $this->session->set_flashdata('error', 'Username dan password harus diisi!');
            redirect('login');
        }

        $user = $this->M_login->get_user($username);

        if (!$user) {
            $this->session->set_flashdata('error', 'Username tidak ditemukan di tabel user!');
            redirect('login');
        }

        if ($this->_cek_password($password, $user->password)) {
            $this->session->set_userdata(array(
                'status'    => 'login',
                'iduser'    => $user->iduser,
                'username'  => $user->username,
                'user_role' => $user->user_role
            ));
            redirect('dashboard');
        }

        $this->session->set_flashdata('error', 'Password salah!');
        redirect('login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    // Cocok untuk 3 kemungkinan isi kolom password di tabel user:
    // hash bcrypt (password_hash), md5, atau teks biasa
    private function _cek_password($input, $tersimpan)
    {
        if (password_verify($input, $tersimpan)) {
            return TRUE;
        }
        if (strlen($tersimpan) === 32 && md5($input) === strtolower($tersimpan)) {
            return TRUE;
        }
        return $input === $tersimpan;
    }
}
