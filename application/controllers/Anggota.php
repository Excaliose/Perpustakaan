<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Manggota', 'agt');
    }
    public function index()
    {
        $data['anggota'] = $this->agt->get_data();
        $data['page'] = 'admin/anggota/anggota';
        $this->load->view('layout/base', $data);
    }
}
