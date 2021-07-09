<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mlogin', 'ad');
    }

    public function index()
    {
        $data['login'] = $this->ad->get_data();
        $this->load->view('login');
    }
    public function login()
    {
        $post = $this->input->post();
        $this->ad->login($post);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
