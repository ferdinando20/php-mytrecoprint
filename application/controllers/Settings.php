<?php
defined('BASEPATH') or exit('No direct script access allowed');

class settings extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if (empty($this->session->userdata('username'))) {
            redirect('adminpanel');
        }
        $data['admin'] = $this->Madmin->get_all_data('tbl_admin')->result();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/settings/profile', $data);
        $this->load->view('admin/layout/footer');
    }

    public function save()
    {
        if (empty($this->session->userdata('username'))) {
            redirect('adminpanel');
        }
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            $password = $this->input->post('password');
            $this->Madmin->editPassword($this->session->userdata('username'), $password);
            $this->session->set_flashdata('success', '<strong>Success! </strong>Edit Password Berhasil!');
        } else {
            $this->session->set_flashdata('error', '<strong>Error! </strong>Password Tidak Boleh Kosong!');
        }
        redirect('settings');
    }

    // public function setting()
    // {
    //     $data['setting'] = $this->Madmin->get_all_data('tbl_setting')->result();
    //     $this->load->view('admin/layout/header');
    //     $this->load->view('admin/layout/menu');
    //     $this->load->view('admin/settings/formSetting', $data);
    //     $this->load->view('admin/layout/footer');
    // }
}
