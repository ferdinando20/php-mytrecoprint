<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('Madmin');
    }

    public function proteksi_halaman()
    {
        if ($this->ci->session->userdata('User') == '') {
            $this->ci->session->set_flashdata('error', 'Anda Belum Login !!!!');
            redirect('main/login');
        }
    }
}

/* End of file User_login.php */
