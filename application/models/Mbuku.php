<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mbuku extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('buku');
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
        $input = array(
            'judul' => $post['judul'],
            'cover' => $post['cover'],
            'kategori' => $post['kategori'],
            'jumlah' => $post['jumlah'],
            'penerbit' => $post['penerbit'],
            'pengarang' => $post['pengarang'],
            'tahun_terbit' => $post['tahun_terbit'],
            
        );
        $this->db->insert('buku', $input);
    }
    public function hapus_data($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('buku');
    }
    public function edit_data($post, $id)
    {
        $input = array(
            'judul' => $post['nomer_induk'],
            'cover' => $post['status'],
            'kategori' => $post['kategori'],
            'jumlah' => $post['jumlah'],
            'penerbit' => $post['penerbit'],
            'pengarang' => $post['pengarang'],
            'tahun_terbit' => $post['tahun_terbit'],
        );
        $this->db->where('id_buku', $id);
        $this->db->update('buku', $input);
    }
    public function edit_jumlah($post,$dataBook)
    {
        if( $dataBook['jumlah']-$post['jumlah']>0){
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
