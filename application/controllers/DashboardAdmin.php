<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboardAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        #$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        #echo 'selamat datang' . $data['user']['nama_lengkap'];
        $data ['user_count'] = $this->Madmin->get_all_data('user')->num_rows();
        $data['indeks_count'] = $this->Madmin->get_all_data('indeks')->num_rows();
        $data['suratmasuk_count'] = $this->Madmin->get_all_data('suratmasuk')->num_rows();
        $data['suratkeluar_count'] = $this->Madmin->get_all_data('suratkeluar')->num_rows();

        // Calculate total surat masuk dan keluar
        $total_surat = $data['suratmasuk_count'] + $data['suratkeluar_count'];
        $data['total_surat'] = $total_surat;
                $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/layout/footer');
    }

    public function TampilUserAdmin()
    {

        $data['user'] = $this->Madmin->get_all_data('user')->result();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/user/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function AddUserAdmin()
    {
        $data['user'] = $this->Madmin->get_all_data('user')->result();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/user/formadd', $data);
        $this->load->view('admin/layout/footer');
    }
    public function SaveUserAdmin()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namalengkap = $this->input->post('nama_lengkap');
        $bio = $this->input->post('bio');
        $email = $this->input->post('email');
        $level = $this->input->post('level');
        $config['upload_path'] = './assets/profil/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $data_file = $this->upload->data();

            $dataInput = array(
                'username' => $username,
                'password' => $password,
                'nama_lengkap' => $namalengkap,
                'bio' => $bio,
                'email' => $email,
                'level' => $level,
                'image' => $data_file['file_name']
            );
            $this->Madmin->insert('user', $dataInput);
            redirect('dashboardAdmin/TampilUserAdmin');
        }
    }




    public function get_by_idUserAdmin($id)
    {
        $dataWhere = array('id_user' => $id);
        $data['id_user'] = $this->Madmin->get_by_id('user', $dataWhere)->row_object();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/user/edit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function editUserAdmin()
    {
        $id_user = $this->input->post('id_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namalengkap = $this->input->post('nama_lengkap');
        $bio = $this->input->post('bio');
        $email = $this->input->post('email');
        $level = $this->input->post('level');
        $config['upload_path'] = './assets/profil/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $data_file = $this->upload->data();

            $dataUpdate = array(
                'username' => $username,
                'password' => $password,
                'nama_lengkap' => $namalengkap,
                'bio' => $bio,
                'email' => $email,
                'level' => $level,
                'image' => $data_file['file_name']

            );
            $this->Madmin->update('user', $dataUpdate, 'id_user', $id_user);
            redirect('dashboardAdmin/TampilUserAdmin');
        } else {
            $dataUpdate = array(
                'username' => $username,
                'password' => $password,
                'nama_lengkap' => $namalengkap,
                'bio' => $bio,
                'email' => $email,
                'level' => $level,


            );
            $this->Madmin->update('user', $dataUpdate, 'id_user', $id_user);
            redirect('dashboardAdmin/TampilUserAdmin');
        }
    }
    public function detailUserAdmin($id)
    {
        $this->load->model('Madmin');
        $detail = $this->Madmin->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/user/detail', $data);
        $this->load->view('admin/layout/footer');
    }



    public function deleteUserAdmin($id)
    {
        $this->Madmin->delete('user', 'id_user', $id);
        redirect('dashboardAdmin/tampilUserAdmin');
    }


    //function untuk suratmasuk
    public function tampilSuratMasuk()
    {
        $data['suratmasuk'] = $this->Madmin->get_all_data('suratmasuk')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/suratmasuk/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function addSuratMasuk()
    {

        $data['indeks'] = $this->Madmin->get_all_data('indeks')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/suratmasuk/addSuratMasuk', $data);
        $this->load->view('admin/layout/footer');
    }


    public function saveSuratMasuk()
    {
        $no_suratmasuk = $this->input->post('no_suratmasuk');
        $namasurat = $this->input->post('namasurat');
        $asalsurat = $this->input->post('asalsurat');
        $tglditerima = $this->input->post('tglditerima');
        $id_indeks = $this->input->post('id_indeks');
        $keterangan = $this->input->post('keterangan');
        $file = $_FILES['file'];
        if ($file = '') {
        } else {
            $config['upload_path'] = './assets/suratmasuk';
            $config['allowed_types'] = 'jpg|pdf|png';

            $this->load->library('upload', $config);
        }
        if (!$this->upload->do_upload('file')) {
            echo "upload gagal";
            die();
        } else {
            $file = $this->upload->data('file_name');
        }
        $dataInput = array(
            'no_suratmasuk' => $no_suratmasuk,
            'namasurat' => $namasurat,
            'asalsurat' => $asalsurat,
            'tglditerima' => $tglditerima,
            'id_indeks' => $id_indeks,
            'keterangan' => $keterangan,
            'file' => $file
        );
        $this->Madmin->insert('suratmasuk', $dataInput);
        $this->session->set_flashdata('success', 'Data surat masuk berhasil disimpan');
        redirect('dashboardAdmin/TampilSuratMasuk');
    }


    public function get_by_idSuratMasuk($id)
    {
        $dataWhere = array('id_suratmasuk' => $id);
        $data['id_suratmasuk'] = $this->Madmin->get_by_id('suratmasuk', $dataWhere)->row_object();
        $data['indeks'] = $this->Madmin->get_all_data('indeks')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/suratmasuk/edit', $data);
        $this->load->view('admin/layout/footer');
    }
    public function editSuratMasuk()
    {
        $id_suratmasuk= $this->input->post('id_suratmasuk');
        $no_suratmasuk = $this->input->post('no_suratmasuk');
        $namasurat = $this->input->post('namasurat');
        $asalsurat = $this->input->post('asalsurat');
        $tglditerima = $this->input->post('tglditerima');
        $id_indeks = $this->input->post('id_indeks');
        $keterangan = $this->input->post('keterangan');
        $config['upload_path'] = './assets/suratmasuk';
        $config['allowed_types'] = 'jpg|pdf|png';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
            $data_file = $this->upload->data();

            $dataUpdate = array(
                'no_suratmasuk' => $no_suratmasuk,
                'namasurat' => $namasurat,
                'asalsurat' => $asalsurat,
                'tglditerima' => $tglditerima,
                'id_indeks' => $id_indeks,
                'keterangan' => $keterangan,
                'file' => $data_file['file_name']

            );
            $this->Madmin->update('suratmasuk', $dataUpdate, 'id_suratmasuk', $id_suratmasuk);
            redirect('dashboardAdmin/TampilSuratMasuk');
        } else {
            $dataUpdate = array(
                'no_suratmasuk' => $no_suratmasuk,
                'namasurat' => $namasurat,
                'asalsurat' => $asalsurat,
                'tglditerima' => $tglditerima,
                'id_indeks' => $id_indeks,
                'keterangan' => $keterangan


            );
            $this->Madmin->update('suratmasuk', $dataUpdate, 'id_suratmasuk', $id_suratmasuk);
            redirect('dashboardAdmin/TampilSuratmasuk');
        }
    }
    public function deleteSuratMasuk($id)
    {
        $this->Madmin->delete('suratmasuk', 'id_suratmasuk', $id);
        redirect('dashboardAdmin/tampilSuratmasuk');
    }


    //function untuk surattkeluar

    public function TampilSuratKeluar()
    {
        $data['suratkeluar'] = $this->Madmin->get_all_data('suratkeluar')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/suratkeluar/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function addSuratKeluar()
    {

        $data['indeks'] = $this->Madmin->get_all_data('indeks')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/suratkeluar/addSuratKeluar', $data);
        $this->load->view('admin/layout/footer');
    }
    public function saveSuratKeluar()
    {

        $no_suratkeluar = $this->input->post('no_suratkeluar');
        $judul_suratkeluar = $this->input->post('judul_suratkeluar');
        $id_indeks = $this->input->post('id_indeks');
        $tujuan = $this->input->post('tujuan');
        $tgl_keluar = $this->input->post('tgl_keluar');
        $keterangan = $this->input->post('keterangan');
        $file = $_FILES['file'];
        if ($file = '') {
        } else {
            $config['upload_path'] = './assets/suratkeluar';
            $config['allowed_types'] = 'jpg|pdf|png';

            $this->load->library('upload', $config);
        }
        if (!$this->upload->do_upload('file')) {
            echo "upload gagal";
            die();
        } else {
            $file = $this->upload->data('file_name');
        }
        $dataInput = array(
            'no_suratkeluar' => $no_suratkeluar,
            'judul_suratkeluar' => $judul_suratkeluar,
            'id_indeks' => $id_indeks,
            'tujuan' => $tujuan,
            'tgl_keluar' => $tgl_keluar,
            'keterangan' => $keterangan,
            'file' => $file
        );
        $this->Madmin->insert('suratkeluar', $dataInput);
        
        redirect('dashboardAdmin/TampilSuratMasuk');
    }


    public function get_by_idSuratKeluar($id)
    {
        $dataWhere = array('id_suratkeluar' => $id);
        $data['id_suratkeluar'] = $this->Madmin->get_by_id('suratkeluar', $dataWhere)->row_object();
        $data['indeks'] = $this->Madmin->get_all_data('indeks')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/suratkeluar/edit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function editSuratKeluar()
    {
        $id_suratkeluar= $this->input->post('id_suratkeluar');
        $no_suratkeluar = $this->input->post('no_suratkeluar');
        $judul_suratkeluar = $this->input->post('judul_suratkeluar');
        $id_indeks = $this->input->post('id_indeks');
        $tujuan = $this->input->post('tujuan');
        $tgl_keluar = $this->input->post('tgl_keluar');
        $keterangan = $this->input->post('keterangan');
        $config['upload_path'] = './assets/suratkeluar';
        $config['allowed_types'] = 'jpg|pdf|png';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
            $data_file = $this->upload->data();

            $dataUpdate = array(
            'no_suratkeluar' => $no_suratkeluar,
            'judul_suratkeluar' => $judul_suratkeluar,
            'id_indeks' => $id_indeks,
            'tujuan' => $tujuan,
            'tgl_keluar' => $tgl_keluar,
            'keterangan' => $keterangan,
            'file' => $data_file['file_name']

            );
            $this->Madmin->update('suratkeluar', $dataUpdate, 'id_suratkeluar', $id_suratkeluar);
            redirect('dashboardAdmin/TampilSuratKeluar');
        } else {
            $dataUpdate = array(
            'no_suratkeluar' => $no_suratkeluar,
            'judul_suratkeluar' => $judul_suratkeluar,
            'id_indeks' => $id_indeks,
            'tujuan' => $tujuan,
            'tgl_keluar' => $tgl_keluar,
            'keterangan' => $keterangan


            );
            $this->Madmin->update('suratkeluar', $dataUpdate, 'id_suratkeluar', $id_suratkeluar);
            redirect('dashboardAdmin/TampilSuratKeluar');
        }
    }
    public function deleteSuratKeluar($id)
    {
        $this->Madmin->delete('suratkeluar', 'id_suratkeluar', $id);
        redirect('dashboardAdmin/TampilSuratKeluar');
    }
    public function TampilIndeks()
    {
        $data['indeks'] = $this->Madmin->get_all_data('indeks')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/indeks/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function addIndeks()
    {

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/indeks/formaddindeks');
        $this->load->view('admin/layout/footer');
    }
    public function saveIndeks()
    {
        $this->form_validation->set_rules('kode_indeks', 'Kode_indeks', 'required');
        $this->form_validation->set_rules('judul_indeks', 'Judul_indeks', 'required');
        $this->form_validation->set_rules('detail', 'Detail', 'required');

        if ($this->form_validation->run() == FALSE) {
            redirect('dashboardAdmin/addIndeks');
        } else {

            $kodeindeks = $this->input->post('kode_indeks');
            $namaindeks = $this->input->post('judul_indeks');
            $detail = $this->input->post('detail');
            $dataInput = array(
                'kode_indeks' => $kodeindeks,
                'judul_indeks' => $namaindeks, 'detail' => $detail
            );
            $this->Madmin->insert('indeks', $dataInput);
            redirect('dashboardAdmin/tampilIndeks');
        }
    }
    public function get_by_idIndeks($id)
    {
        $dataWhere = array('id_indeks' => $id);
        $data['id_indeks'] = $this->Madmin->get_by_id('indeks', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/indeks/edit', $data);
        $this->load->view('admin/layout/footer');
    }
    public function editIndeks()
    {
        $id_indeks = $this->input->post('id_indeks');
        $kodeindeks = $this->input->post('kode_indeks');
        $namaindeks = $this->input->post('judul_indeks');
        $detail = $this->input->post('detail');
        $dataUpdate = array(
            'id_indeks' => $id_indeks,
            'kode_indeks' => $kodeindeks,
            'judul_indeks' => $namaindeks,
            'detail' => $detail

        );
        $this->Madmin->update('indeks', $dataUpdate, 'id_indeks', $id_indeks);
        redirect('dashboardAdmin/TampilIndeks');
    }
    public function deleteIndeks($id)
    {
        $this->Madmin->delete('indeks', 'id_indeks', $id);
        redirect('dashboardAdmin/tampilIndeks');
    }
}
