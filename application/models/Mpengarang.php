<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mpengarang extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('pengarang');
        return $q->result_array();
    }
}
