<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manggota extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('member');
        return $q->result_array();
    }
}
