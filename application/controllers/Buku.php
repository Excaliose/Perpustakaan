<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mbuku', 'bk');
    }
    public function index()
    {
        $data['buku'] = $this->bk->get_data();
        $data['page'] = 'admin/buku/buku';
        $this->load->view('layout/base', $data);
    }
}
