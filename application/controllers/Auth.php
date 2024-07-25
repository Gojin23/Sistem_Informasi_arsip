<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Madmin');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }



    public function login()
    {
        // Validasi form
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman login
            $this->load->view('admin/login');
        } else {
            // Ambil input dari form
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Cek kredensial pengguna
            $user = $this->Madmin->login($username, $password);

            if ($user) {
                // Jika login berhasil, arahkan sesuai level akses pengguna
                $this->session->set_userdata($user); // Set data pengguna ke dalam sesi

                switch ($user['level']) {
                    case 'superadmin':
                        redirect('DashboardAdmin');
                        break;
                    case 'admin':
                        redirect('Dashboard_pegawai');
                        break;
                        // tambahkan case lainnya sesuai dengan level akses yang Anda miliki
                    default:
                        redirect('Auth');
                        break;
                }
            } else {
                // Jika login gagal, kembali ke halaman login dengan pesan error
                $this->session->set_flashdata('error', 'Username atau password salah.');
                redirect('Auth');
            }
        }
    }

    public function logout()
    {
        // Hapus semua data sesi dan arahkan ke halaman login
        $this->session->sess_destroy();
        redirect('auth');
    }
}
