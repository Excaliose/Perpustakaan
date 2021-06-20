<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penerbit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mpenerbit', 'pn');
    }
    public function index()
    {
        $data['penerbit'] = $this->pn->get_data();
        $data['page'] = 'admin/penerbit/penerbit';
        $this->load->view('layout/base', $data);
    }
}
