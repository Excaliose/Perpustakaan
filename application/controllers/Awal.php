<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mbuku', 'bk');
    }
	public function index()
	{
        
		$data['page'] = 'client/daftarBuku';
        $data['buku'] = $this->bk->get_data();
		$this->load->view('layout/basefront', $data);
	}

}