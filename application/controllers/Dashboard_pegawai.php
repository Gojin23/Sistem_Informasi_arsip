<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard_Pegawai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Madmin');
        $this->load->helper('download');
        $this->load->library('pagination');
    }

    public function dashboard()
    {


        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/layout/footer');
    }
    public function index()
    {
        $data['indeks_count'] = $this->Madmin->get_all_data('indeks')->num_rows();
        $data['suratmasuk_count'] = $this->Madmin->get_all_data('suratmasuk')->num_rows();
        $data['suratkeluar_count'] = $this->Madmin->get_all_data('suratkeluar')->num_rows();

        // Calculate total surat masuk dan keluar
        $total_surat = $data['suratmasuk_count'] + $data['suratkeluar_count'];
        $data['total_surat'] = $total_surat;
        $this->load->view('dashboard_pegawai/layout/header');
        $this->load->view('dashboard_pegawai/layout/menu');
        $this->load->view('dashboard_pegawai/dashboardPegawai', $data);
        $this->load->view('dashboard_pegawai/layout/footer');
    }


    public function kontak()
    {

        $this->load->view('dashboard_pegawai/layout/header');
        $this->load->view('dashboard_pegawai/layout/menu');
        $this->load->view('dashboard_pegawai/layout/kontak');
        $this->load->view('dashboard_pegawai/layout/footer');
    }

    //public function tampilSuratMasuk()
    //{

    //$data['suratmasuk'] = $this->Madmin->get_all_data('suratmasuk')->result();

    // $this->load->view('dashboard_pegawai/layout/header');
    // $this->load->view('dashboard_pegawai/layout/menu');
    // $this->load->view('dashboard_pegawai/TampilSuratMasuk', $data);
    // $this->load->view('dashboard_pegawai/layout/footer');
    //}
    public function downloadsuratmasuk($file_id)
    {
        // Ambil informasi file berdasarkan $file_id (contoh menggunakan model)
        $file = $this->Madmin->getFileByIdmasuk($file_id);

        if ($file) {
            $file_path = './assets/suratmasuk/' . $file->file;

            // Periksa apakah file tersebut ada
            if (file_exists($file_path)) {
                // Lakukan proses download menggunakan helper force_download
                force_download($file->file, file_get_contents($file_path));
            } else {
                // Jika file tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
                echo "File not found";
            }
        } else {
            // Jika file tidak ditemukan di database, tampilkan pesan error atau redirect ke halaman lain
            echo "File not found in database";
        }
    }

    public function carisuratmasuk()
    {
        $keyword = $this->input->post('keyword');
        $data['suratmasuk'] = $this->Madmin->get_keywordmasuk($keyword);
        $this->load->view('dashboard_pegawai/layout/header');
        $this->load->view('dashboard_pegawai/layout/menu');
        $this->load->view('dashboard_pegawai/TampilSuratMasuk', $data);
        $this->load->view('dashboard_pegawai/layout/footer');
    }
    public function tampilSuratMasuk($offset = 0)
    {
        $this->load->library('pagination');

        // Pagination configuration
        $config['base_url'] = site_url('dashboard_pegawai/tampilSuratMasuk');
        $config['total_rows'] = $this->Madmin->get_all_data('suratmasuk')->num_rows();
        $config['per_page'] = 5; // Number of items per page

        // Initialize pagination
        $this->pagination->initialize($config);

        // Calculate the offset based on current page
        $offset = $this->uri->segment(3) ? $this->uri->segment(3) : 0;

        // Get data for current page using offset
        $data['suratmasuk'] = $this->Madmin->get_suratmasuk_page($config['per_page'], $offset);

        $this->load->view('dashboard_pegawai/layout/header');
        $this->load->view('dashboard_pegawai/layout/menu');
        $this->load->view('dashboard_pegawai/TampilSuratMasuk', $data);
        $this->load->view('dashboard_pegawai/layout/footer');
    }


    public function cetaklaporansm()
    {
        // Get input data from the form
        $tanggal_awal = $this->input->post('tanggal_awal');
        $tanggal_akhir = $this->input->post('tanggal_akhir');

        // If both dates are provided, filter the data based on the date range
        if ($tanggal_awal && $tanggal_akhir) {
            $data['suratmasuk'] = $this->Madmin->get_suratkeluar_by_date_range($tanggal_awal, $tanggal_akhir);
        } else {
            // Otherwise, get all surat keluar
            $data['suratmasuk'] = $this->Madmin->get_all_data('suratmasuk')->result();
        }

        // Load the view for printing
        $this->load->view('dashboard_pegawai/printSuratMasuk', $data);
    }



    public function tampilSuratKeluar()
    {
        $this->load->library('pagination');

        // Pagination configuration
        $config['base_url'] = site_url('dashboard_pegawai/tampilSuratKeluar');
        $config['total_rows'] = $this->Madmin->get_all_data('suratkeluar')->num_rows();
        $config['per_page'] = 5; // Number of items per page

        // Initialize pagination
        $this->pagination->initialize($config);

        // Calculate the offset based on current page
        $offset = $this->uri->segment(3) ? $this->uri->segment(3) : 0;

        // Get data for current page using offset

        $data['suratkeluar'] = $this->Madmin->get_suratmasuk_pageSk($config['per_page'], $offset);
        $this->load->view('dashboard_pegawai/layout/header');
        $this->load->view('dashboard_pegawai/layout/menu');
        $this->load->view('dashboard_pegawai/TampilSuratKeluar', $data);
        $this->load->view('dashboard_pegawai/layout/footer');
    }
    public function downloadsuratkeluar($file_id)
    {
        // Ambil informasi file berdasarkan $file_id (contoh menggunakan model)
        $file = $this->Madmin->getFileByIdKeluar($file_id);

        if ($file) {
            $file_path = './assets/suratkeluar/' . $file->file;

            // Periksa apakah file tersebut ada
            if (file_exists($file_path)) {
                // Lakukan proses download menggunakan helper force_download
                force_download($file->file, file_get_contents($file_path));
            } else {
                // Jika file tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
                echo "File not found";
            }
        } else {
            // Jika file tidak ditemukan di database, tampilkan pesan error atau redirect ke halaman lain
            echo "File not found in database";
        }
    }
    public function carisuratkeluar()
    {
        $keyword = $this->input->post('keyword');
        $data['suratkeluar'] = $this->Madmin->get_keyword($keyword);
        $this->load->view('dashboard_pegawai/layout/header');
        $this->load->view('dashboard_pegawai/layout/menu');
        $this->load->view('dashboard_pegawai/TampilSuratKeluar', $data);
        $this->load->view('dashboard_pegawai/layout/footer');
    }
    public function cetaklaporansk()
    {
        // Get input data from the form
        $tanggal_awal = $this->input->post('tanggal_awal');
        $tanggal_akhir = $this->input->post('tanggal_akhir');

        // If both dates are provided, filter the data based on the date range
        if ($tanggal_awal && $tanggal_akhir) {
            $data['suratkeluar'] = $this->Madmin->get_suratkeluar_by_date_range($tanggal_awal, $tanggal_akhir);
        } else {
            // Otherwise, get all surat keluar
            $data['suratkeluar'] = $this->Madmin->get_all_data('suratkeluar')->result();
        }

        // Load the view for printing
        $this->load->view('dashboard_pegawai/printSuratKeluar', $data);
    }


    public function indeks()
    {
        $data['indeks'] = $this->Madmin->get_all_data('indeks')->result();

        $this->load->view('dashboard_pegawai/layout/header');
        $this->load->view('dashboard_pegawai/layout/menu');
        $this->load->view('dashboard_pegawai/indeks', $data);
        $this->load->view('dashboard_pegawai/layout/footer');
    }
}
