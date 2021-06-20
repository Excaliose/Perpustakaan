<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mkategori', 'kt');
    }
    public function index()
    {
        $data['kategori'] = $this->kt->get_data();
        $data['page'] = 'admin/kategori/kategori';
        $this->load->view('layout/base', $data);
    }
}
