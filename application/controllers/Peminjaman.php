<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MPeminjaman', 'peminjaman');
        $this->load->model('MPegawai', 'pegawai');
        $this->load->model('MBuku', 'buku');
    }

    public function index()
    {
        $data['peminjaman'] = $this->peminjaman->get_data();
        $data['page'] = 'admin/peminjaman/peminjaman';
        $this->load->view('layout/base', $data);
    }

    public function tambah()
    {
        $data['pegawai'] = $this->pegawai->get_data();
        $data['page'] = 'admin/peminjaman/tambahPeminjaman';
        $this->load->view('layout/base', $data);
    }

    public function prosesTambah()
    {
        $post = $this->input->post();
        if($post['jumlah']<=0){
            $this->session->set_flashdata('msg', 'Gagal...Jumlah tidak valid');
            redirect('peminjaman/tambah');
        }
        else{
            $data= $this->buku->get_data_id($post['id_buku']);
            $result = $this->buku->edit_jumlah($post,$data);
            if(!$result){
                $this->session->set_flashdata('msg', 'Gagal...Jumlah peminjaman melebihi stok');
                redirect('peminjaman/tambah');
               }
               else{
                redirect('peminjaman');
                $this->peminjaman->tambah_data($post);
               
               }
     
     
     
       
    }
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
