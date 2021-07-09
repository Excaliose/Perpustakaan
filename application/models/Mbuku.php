<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mbuku extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('view_data_buku');
        return $q->result_array();
    }
    public function get_data_id($id)
    {
        $this->db->where('id_buku', $id);
        $q = $this->db->get('buku');
        return $q->row_array();
    }
    public function get_data_penerbit()
    {
        $q = $this->db->get('penerbit');
        return $q->result_array();
    }
    public function get_data_pengarang()
    {
        $q = $this->db->get('pengarang');
        return $q->result_array();
    }
    public function get_data_kategori()
    {
        $q = $this->db->get('kategori');
        return $q->result_array();
    }
    public function tambah_data($post)
    {
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('penerbit', 'penerbit', 'required');
        $this->form_validation->set_rules('pengarang', 'pengarang', 'required');
        // $this->form_validation->set_rules('cover', 'cover', 'callback_cek_upload');
        $input = array(
            'judul' => $post['judul'],
            'kategori' => $post['kategori'],
            'jumlah' => $post['jumlah'],
            'penerbit' => $post['penerbit'],
            'pengarang' => $post['pengarang'],
            'tahun_terbit' => $post['tahun_terbit'],
        );
        if ($this->form_validation->run() == FALSE) {
            echo validation_errors('<span class="error">', '</span>');
            return false;
        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = 10000;
            // $config['max_width'] = 1024;
            // $config['max_height'] = 768;
            $config['overwrite'] = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('cover')) {
                $this->form_validation->set_message('cek_upload', $this->upload->display_errors());
                return FALSE;
            } else {
                $dataupload = $this->upload->data();
                $input['cover'] = $dataupload['file_name'];
                $this->db->insert('buku', $input);
                return TRUE;
            }
        }
    }
    public function hapus_data($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('buku');
    }
    public function edit_data($post, $id)
    {
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('penerbit', 'penerbit', 'required');
        $this->form_validation->set_rules('pengarang', 'pengarang', 'required');
        // $this->form_validation->set_rules('cover', 'cover', 'callback_cek_upload');
        $input = array(
            'judul' => $post['judul'],
            'kategori' => $post['kategori'],
            'jumlah' => $post['jumlah'],
            'penerbit' => $post['penerbit'],
            'pengarang' => $post['pengarang'],
            'tahun_terbit' => $post['tahun_terbit'],
        );
        if ($this->form_validation->run() == FALSE) {
            echo validation_errors('<span class="error">', '</span>');
            return false;
        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = 10000;
            // $config['max_width'] = 1024;
            // $config['max_height'] = 768;
            $config['overwrite'] = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('cover')) {
                $this->form_validation->set_message('cek_upload', $this->upload->display_errors());
                $this->db->where('id_buku', $id);
                $this->db->update('buku', $input);
                return TRUE; 
            } else {
                $dataupload = $this->upload->data();
                $input['cover'] = $dataupload['file_name'];
                $this->db->where('id_buku', $id);
                $this->db->update('buku', $input);
                return TRUE;
            }
        }
    }
    public function cek_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        // $config['max_size'] = 10000;
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;
        $config['overwrite'] = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('cover')) {
            $this->form_validation->set_message('cek_upload', $this->upload->display_errors());
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function edit_jumlah($post, $dataBook)
    {
        if( $dataBook['jumlah']-$post['jumlah']>=0){
        $input = array(
            'jumlah' => $dataBook['jumlah']-$post['jumlah'],
          
        );
        $this->db->where('id_buku', $post['id_buku']);
        $this->db->update('buku', $input);
        return true;
    }
    else{
        return false;
    }
    }
}
