<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->library('form_validation');
        $this->load->helper('form', 'file');
    }

    public function index()
    {
        if (empty($this->session->userdata('username'))) {
            redirect('adminpanel');
        }
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/tampil', $data);
        $this->load->view('admin/layout/footer');
    }

    public function add()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/formAdd');
        $this->load->view('admin/layout/footer');
    }

    public function save()
    {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->add();
        } else {
            $nama_kategori = $this->input->post('nama_kategori');
            $dataInput = array('nama_kategori' => $nama_kategori);
            $this->Madmin->insert('tbl_kategori', $dataInput);
            redirect('kategori');
        }
    }

    public function get_by_id($id)
    {
        $dataWhere = array('id_kategori' => $id);
        $data['kategori'] = $this->Madmin->get_by_id('tbl_kategori', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit()
    {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required', array('required' => '<div class="alert alert-danger alert-dismissible fade show"><strong>Error! </strong>Nama Kategori Tidak Boleh Kosong! <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>'));
        if ($this->form_validation->run() == FALSE) {
            redirect('kategori/get_by_id');
        } else {
            $id = $this->input->post('id_kategori');
            $namaKat = $this->input->post('nama_kategori');
            $dataUpdate = array('nama_kategori' => $namaKat);
            $this->Madmin->update('tbl_kategori', $dataUpdate, 'id_kategori', $id);
            redirect('kategori');
        }
    }

    public function delete($id)
    {
        $this->Madmin->delete('tbl_kategori', 'id_kategori', $id);
        redirect('kategori');
    }
}
