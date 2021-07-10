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
        $data['penerbit'] = $this->bk->get_data_penerbit();
        $data['pengarang'] = $this->bk->get_data_pengarang();
        $data['kategori'] = $this->bk->get_data_kategori();
        $data['buku'] = $this->bk->get_data();
        $data['page'] = 'admin/buku/buku';
        if(!$this->session->userdata('id')){
            $this->load->view('login', $data);
        }
        else{
        $this->load->view('layout/base', $data);
        }
    }
    public function tambah()
    {
        $data['penerbit'] = $this->bk->get_data_penerbit();
        $data['pengarang'] = $this->bk->get_data_pengarang();
        $data['kategori'] = $this->bk->get_data_kategori();
        $data['page'] = 'admin/buku/tambahBuku';
        $this->load->view('layout/base', $data);
    }

    public function prosesTambah()
    {
        $post = $this->input->post();
        if ($this->bk->tambah_data($post)) {
            redirect('buku');
        } else {
            // redirect('buku/tambah');
        }
    }
    
    public function edit($id)
    {
        $data['penerbit'] = $this->bk->get_data_penerbit();
        $data['pengarang'] = $this->bk->get_data_pengarang();
        $data['kategori'] = $this->bk->get_data_kategori();
        $data['buku'] = $this->bk->get_data_id($id);
        $data['page'] = 'admin/buku/editBuku';
        $this->load->view('layout/base', $data);
    }

    public function prosesEdit($id)
    {
        $post = $this->input->post();
        $this->bk->edit_data($post, $id);
        redirect('buku');
    }

    public function prosesHapus($id)
    {
        $this->bk->hapus_data($id);
        redirect('buku');
    }
}
