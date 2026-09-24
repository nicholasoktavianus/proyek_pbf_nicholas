<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    // Ambil 1 user berdasarkan username
    public function get_user($username)
    {
        return $this->db->get_where('user', array('username' => $username))->row();
    }
}
