<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_program_kursus extends CI_Model {

    // Tampilkan semua data
    public function view_data_program_kursus()
    {
        return $this->db->get('program_kursus')->result();
    }

    // Hapus data
    public function hapus_program_kursus($idprogramkursus)
    {
        $this->db->where('idprogramkursus', $idprogramkursus);
        $this->db->delete('program_kursus');
    }

    // Tambah data
    public function input_data_program_kursus($data)
    {
        $this->db->insert('program_kursus', $data);
    }

    // Ambil data by ID (untuk edit)
    public function get_data_program_kursus($idprogramkursus)
    {
        return $this->db->get_where('program_kursus', ['idprogramkursus' => $idprogramkursus])->row();
    }

    // Update data
    public function edit_data_program_kursus($where, $data)
    {
        $this->db->where($where);
        $this->db->update('program_kursus', $data);
    }
}