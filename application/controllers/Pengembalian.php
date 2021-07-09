<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pengembalian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MPengembalian', 'pengembalian');
        $this->load->model('MPeminjaman', 'peminjaman');
    }

    public function index()
    {
        $data['pengembalian'] = $this->pengembalian->get_data_view();
        $data['page'] = 'admin/pengembalian/pengembalian';
        $this->load->view('layout/base', $data);
    }

    public function tambah()
    {
        $data['peminjaman'] = $this->peminjaman->get_data_by_status();
        $data['page'] = 'admin/pengembalian/tambahPengembalian';
        $this->load->view('layout/base', $data);
    }

    public function prosesTambah()
    {
        $post = $this->input->post();
        if(empty($post['tanggal_kembali'])){
            $this->session->set_flashdata('msg', 'Tanggal belum diisi');
            redirect('pengembalian/tambah');

        }
       
        else{
             $result=$this->pengembalian->tambah_data($post);   
            $this->peminjaman->edit_status($post['id_transaksi']);
            redirect('pengembalian');
            
               }
     
     
     
       
    }
    public function edit($id)
    {
        $data['pengembalian'] = $this->pengembalian->get_data_by_id($id);
        $data['page'] = 'admin/pengembalian/editPengembalian';
        $this->load->view('layout/base', $data);
    }

    public function prosesEdit($id)
    {
        $post = $this->input->post();
        $this->pengembalian->edit_data($post, $id);
        redirect('pengembalian');
    }
    public function prosesHapus($id)
    {
        $this->peminjaman->hapus_data($id);
        redirect('pengembalian');
    }
}


    

