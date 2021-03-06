<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan extends CI_Model
{

    public function get($username)
    {
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }

    function print()
    {
        $data_siswa = $this->db->get('laporan');
        return $data_siswa->result();
    }

    function get_detail($id)
    {
        $this->db->where(array('id' => $id));
        $as = $this->db->get('laporan');
        return $as->row();
    }

    // FUNGSI CRUD
    // fungsi untuk mengambil data dari database
    function get_data($table)
    {
        return $this->db->get($table);
    }

    // fungsi untuk menginput data ke database
    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // fungsi untuk mengedit data
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    // fungsi untuk mengupdate atau mengubah data di database
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // fungsi untuk menghapus data dari database
    function delete_data($where, $table)
    {
        $this->db->delete($table, $where);
    }
    // AKHIR FUNGSI CRUD
}

/* End of file getkod_model.php */
/* Location: ./application/models/getkod_model.php */