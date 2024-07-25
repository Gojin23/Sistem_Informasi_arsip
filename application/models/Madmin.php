<?php
class Madmin extends CI_Model
{

    public function login($username, $password)
    {
        // Query ke database untuk memeriksa kredensial pengguna
        $query = $this->db->get_where('user', array('username' => $username, 'password' => $password));

        if ($query->num_rows() == 1) {
            // Jika kredensial benar, kembalikan data pengguna
            return $query->row_array();
        } else {
            // Jika kredensial salah, kembalikan false
            return false;
        }
    }
    public function get_all_data($tabel)
    {
        $q = $this->db->get($tabel);
        return $q;
    }
    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }
    public function get_by_id($tabel, $id)
    {
        return $this->db->get_where($tabel, $id);
    }
    public function update($tabel, $data, $pk, $id)
    {
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }
    public function detail_data($id = null)
    {
        $query = $this->db->get_where('user', array('id_user' => $id))->row();
        return $query;
    }
    public function delete($tabel, $id, $val)
    {
        $this->db->delete($tabel, array($id => $val));
    }
    public function getFileByIdmasuk($file_id)
    {
        // Ambil informasi file berdasarkan $file_id dari database
        $this->db->where('id_suratmasuk', $file_id);
        $query = $this->db->get('suratmasuk');
        return $query->row();
    }
    public function getFileByIdKeluar($file_id)
    {
        // Ambil informasi file berdasarkan $file_id dari database
        $this->db->where('id_suratkeluar', $file_id);
        $query = $this->db->get('suratkeluar');
        return $query->row();
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('suratkeluar', $keyword);
        $this->db->like('no_suratkeluar', $keyword);
        $this->db->or_like('judul_suratkeluar', $keyword);
        $this->db->or_like('id_indeks', $keyword);
        $this->db->like('tujuan', $keyword);
        $this->db->or_like('tgl_keluar', $keyword);
        $this->db->or_like('keterangan', $keyword);
        $this->db->or_like('file', $keyword);
        return $this->db->get()->result();
    }
    public function get_keywordmasuk($keyword)
    {
        $this->db->select('*');
        $this->db->from('suratmasuk', $keyword);
        $this->db->like('no_suratmasuk', $keyword);
        $this->db->or_like('namasurat', $keyword);
        $this->db->or_like('tglditerima', $keyword);
        $this->db->like('id_indeks', $keyword);
        $this->db->or_like('keterangan', $keyword);
        $this->db->or_like('file', $keyword);
        return $this->db->get()->result();
    }

    public function get_suratmasuk_by_date_range($tanggal_awal, $tanggal_akhir)
    {
        $this->db->select('*');
        $this->db->from('suratmasuk');
        $this->db->where('tglditerima >=', $tanggal_awal);
        $this->db->where('tglditerima <=', $tanggal_akhir);
        return $this->db->get()->result();
    }
    public function get_suratkeluar_by_date_range($tanggal_awal, $tanggal_akhir)
    {
        $this->db->select('*');
        $this->db->from('suratkeluar');
        $this->db->where('tgl_keluar >=', $tanggal_awal);
        $this->db->where('tgl_keluar <=', $tanggal_akhir);
        return $this->db->get()->result();
    }

    public function get_suratmasuk_page($limit, $offset)
    {
        $this->db->limit($limit, $offset);
        return $this->db->get('suratmasuk')->result();
    }
    public function get_suratmasuk_pageSk($limit, $offset)
    {
        $this->db->limit($limit, $offset);
        return $this->db->get('suratkeluar')->result();
    }
    
    
}
