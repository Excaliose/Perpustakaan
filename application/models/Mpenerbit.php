<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mpenerbit extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('penerbit');
        return $q->result_array();
    }
}
