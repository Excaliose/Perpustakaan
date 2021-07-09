<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mlogin extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('admin');
        return $q->result_array();
    }
    public function login($post)
    {
        $this->db->where('username', $post['id']);
        $this->db->where('password', $post['password']);
        $q = $this->db->get('admin');
        if($q->num_rows()>0){
            
            $array = array(
                'id' => $post['id']
            );
            $this->session->set_userdata( $array );
            redirect('welcome');
        }else{
           $this->session->set_flashdata('errorlogin', '<p class="login-box-msg text-danger">username dan password salah</p>');  
                     
            redirect('login');
        }
    }
}
