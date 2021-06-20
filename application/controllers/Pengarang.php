<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mpengarang', 'pg');
    }
    public function index()
    {
        $data['pengarang'] = $this->pg->get_data();
        $data['page'] = 'admin/pengarang/pengarang';
        $this->load->view('layout/base', $data);
    }
}
