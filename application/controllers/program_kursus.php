<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_kursus extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_program_kursus');
        $this->load->library('form_validation');
    }

    // TAMPIL DATA
    public function index()
    {
        $data['data_program'] = $this->model_program_kursus->view_data_program_kursus();
        $this->load->view('template/header');
        $this->load->view('program_kursus', $data);
        $this->load->view('template/footer');
    }

    // HAPUS DATA
    public function hapus($idprogramkursus)
    {
        $this->model_program_kursus->hapus_program_kursus($idprogramkursus);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
        redirect('program_kursus');
    }

    // TAMBAH DATA (Tampil Form + Proses Simpan)
    public function tambahprogram_kursus()
    {
        // Generate ID otomatis (PK001, PK002, ...)
        $this->db->select_max('idprogramkursus');
        $datakode = $this->db->get('program_kursus')->row_array();

        if ($datakode['idprogramkursus'] != null) {
            $nilaikode = substr($datakode['idprogramkursus'], 2);
            $kode = (int)$nilaikode;
            $kode = $kode + 1;
            $hasilkode = "PK" . str_pad($kode, 3, '0', STR_PAD_LEFT);
        } else {
            $hasilkode = "PK001";
        }

        $data = ['idprogramkursus' => $hasilkode];

        // Jika form disubmit, langsung simpan
        if ($this->input->post('nmprogramkursus')) {
            $this->_inputdata($hasilkode);
            die;
        }

        $this->load->view('template/header');
        $this->load->view('tambahprogram_kursus', $data);
        $this->load->view('template/footer');
    }

    private function _inputdata($idprogramkursus)
    {
        $nmprogramkursus = $this->input->post('nmprogramkursus');

        $data = [
            'idprogramkursus' => $idprogramkursus,
            'nmprogramkursus' => $nmprogramkursus,
        ];

        $this->model_program_kursus->input_data_program_kursus($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Program Kursus Berhasil Ditambahkan</div>');
        redirect('program_kursus');
    }

    private function _rules()
    {
        $this->form_validation->set_rules('idprogramkursus', 'idprogramkursus', 'required|trim|xss_clean');
        $this->form_validation->set_rules('nmprogramkursus', 'nmprogramkursus', 'required|trim|xss_clean');
    }

    // EDIT DATA (Tampil Form + Proses Update)
    public function editprogram_kursus($idprogramkursus = 0)
    {
        $data['edit'] = $this->model_program_kursus->get_data_program_kursus($idprogramkursus);

        // Jika form disubmit, langsung update
        if (isset($_POST['submit'])) {
            $this->_prosesedit();
        }

        $this->load->view('template/header');
        $this->load->view('editprogram_kursus', $data);
        $this->load->view('template/footer');
    }

    private function _prosesedit()
    {
        $idprogramkursus = $this->input->post('idprogramkursus');
        $nmprogramkursus = $this->input->post('nmprogramkursus');

        $data = array(
            'idprogramkursus' => $idprogramkursus,
            'nmprogramkursus' => $nmprogramkursus
        );

        $where = array('idprogramkursus' => $idprogramkursus);
        $this->model_program_kursus->edit_data_program_kursus($where, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil DiUbah</div>');
        redirect('program_kursus');
    }
}