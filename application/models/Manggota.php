<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manggota extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('member');
        return $q->result_array();
    }
    public function get_data_id($id)
    {
        $this->db->where('nomer_anggota', $id);
        $q = $this->db->get('member');
        return $q->row_array();
    }
    public function tambah_data($post)
    {
        $input = array(
            'nomer_induk' => $post['nomer_induk'],
            'nama' => $post['nama'],
            'email' => $post['email'],
            'alamat' => $post['alamat'],
            'status' => $post['status']
        );
        $this->db->insert('member', $input);
    }
    public function hapus_data($id)
    {
        $this->db->where('nomer_anggota', $id);
        $this->db->delete('member');
    }
    public function edit_data($post, $id)
    {
        $input = array(
            'nomer_induk' => $post['nomer_induk'],
            'nama' => $post['nama'],
            'email' => $post['email'],
            'alamat' => $post['alamat'],
            'status' => $post['status']
        );
        $this->db->where('nomer_anggota', $id);
        $this->db->update('member', $input);
    }
    public function get_count(){
        
        return $this->db->count_all_results('member');
    }
}
