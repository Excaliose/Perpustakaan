<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mkategori extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('kategori');
        return $q->result_array();
    }
}
