<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MPeminjaman', 'peminjaman');
        $this->load->model('MPengembalian', 'pengembalian');
    }

    public function index()
    {
        $data['peminjaman'] = $this->peminjaman->get_count();
        $data['pengembalian'] = $this->pengembalian->get_count();
        $data['page'] = 'admin/dashboard';
        $this->load->view('layout/base', $data);
    }

    public function tambah()
    {
        $data['page'] = 'admin/anggota/tambahAnggota';
        $this->load->view('layout/base', $data);
    }

    public function prosesTambah()
    {
        $post = $this->input->post();
        $this->agt->tambah_data($post);
        redirect('anggota');
    }

    public function edit($id)
    {
        $data['anggota'] = $this->agt->get_data_id($id);
        $data['page'] = 'admin/anggota/editAnggota';
        $this->load->view('layout/base', $data);
    }

    public function prosesEdit($id)
    {
        $post = $this->input->post();
        $this->agt->edit_data($post, $id);
        redirect('anggota');
    }

    public function prosesHapus($id)
    {
        $this->agt->hapus_data($id);
        redirect('anggota');
    }
    
}
