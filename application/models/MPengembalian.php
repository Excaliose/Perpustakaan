<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MPengembalian extends CI_Model
{
    public function get_data()
    {
        $query = $this->db->get('pengembalian');
        return $query->result_array();
    }
    public function get_data_by_id($id){
        $this->db->where('id_transaksi',$id);
        $query= $this->db->get('pengembalian');
        return $query->row_array();

    }
    public function tambah_data($post)
    {
        $input = array(
            'nomer_anggota' => $post['nomer_anggota'],
            'id_buku' => $post['id_buku'],
            'tanggal_pinjam' =>  $post['tanggal_pinjam'],
            'tanggal_akhir_peminjaman' =>  $post['tanggal_akhir_peminjaman'],
            'id_pegawai' =>  $post['id_pegawai'],
            'jumlah' => $post['jumlah']
        );
        $this->db->insert('peminjaman', $input);
    }
}
