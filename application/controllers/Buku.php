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
    public function tambah()
    {
        $data['penerbit'] = $this->bk->get_data_penerbit();
        $data['pengarang'] = $this->bk->get_data_pengarang();
        $data['kategori'] = $this->bk->get_data_kategori();
        $this->form_validation->set_rules('cover', 'cover', 'callback_cek_upload');
        $data['cover'] = ['file_name'];
        $data['page'] = 'admin/buku/tambahBuku';
        $this->load->view('layout/base', $data);
    }

    public function prosesTambah()
    {
        $post = $this->input->post();
        $this->bk->tambah_data($post);
        redirect('buku');
    }
    public function cek_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['overwrite'] = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('cover')) {
            $this->form_validation->set_message('cek_upload', $this->upload->display_errors());
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function edit($id)
    {
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
