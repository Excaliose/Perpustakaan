<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mbuku extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('buku');
        return $q->result_array();
    }
}
