<?php
defined('BASEPATH') or exit('No direct script access allowed');

class produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->library('form_validation', 'upload');
        $this->load->helper('form', 'file');
    }

    public function index()
    {
        $data['produk'] = $this->Madmin->join_produk()->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/produk/tampil', $data);
        $this->load->view('admin/layout/footer');
    }

    public function add()
    {
        $data['produk'] = $this->Madmin->join_produk()->result();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/produk/formAdd', $data);
        $this->load->view('admin/layout/footer');
    }

    public function get_by_id($id)
    {
        $dataWhere = array('id_produk' => $id);
        $data['produk'] = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();
        $data['foto'] = $this->Madmin->get_by_id('tbl_foto', $dataWhere)->row_object();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/produk/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit()
    {
        $id_produk = $this->input->post('id_produk');
        $id_kategori = $this->input->post('id_kategori');
        $nama_produk = $this->input->post('nama_produk');
        $harga_produk = $this->input->post('harga_produk');
        $stok = $this->input->post('stok');
        $berat_produk = $this->input->post('berat_produk');
        $warna_produk = $this->input->post('warna_produk');
        $ukuran_produk = $this->input->post('ukuran_produk');
        // $foto_produk = $this->input->post('foto_produk');
        $deskripsi_produk = $this->input->post('deskripsi_produk');

        $data_produk = array(
            'nama_produk' => $nama_produk,
            'id_kategori' => $id_kategori,
            'harga_produk' => $harga_produk,
            'stok' => $stok,
            'berat_produk' => $berat_produk,
            'warna_produk' => $warna_produk,
            'ukuran_produk' => $ukuran_produk,
            'deskripsi_produk' => $deskripsi_produk
        );

        $config['upload_path'] = '.\assets\foto_produk';
        $config['allowed_types'] = 'jpg|png|jpeg|PNG';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto_produk')) {
            $data_file = $this->upload->data();
            $data_foto = array(
                'id_produk' => $id_produk,
                'foto_produk' => $data_file['file_name']
            );
        }
        //Buat hapus foto lama di folder foto_produk (blm selesai)
        //unlink("assets/foto_produk".$data_file['file_name']);

        $this->Madmin->update_entry('id_produk', $id_produk, $data_produk, $data_foto);
        redirect('produk');
    }

    public function delete($id)
    {
        $this->Madmin->delete('tbl_produk', 'id_produk', $id);
        redirect('produk');
    }

    public function insert()
    {
        $this->load->database();
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('harga_produk', 'Harga Produk', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');
        $this->form_validation->set_rules('berat_produk', 'Berat Produk', 'required');
        $this->form_validation->set_rules('warna_produk', 'Warna Produk', 'required');
        $this->form_validation->set_rules('ukuran_produk', 'Ukuran Produk', 'required');
        $this->form_validation->set_rules('deskripsi_produk', 'Deskripsi Produk', 'required');
        $this->form_validation->set_rules('foto_produk', 'Foto Produk', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->add();
        } else {
            $data_produk = array(
                'nama_produk' => $this->input->post('nama_produk'),
                'id_kategori' => $this->input->post('id_kategori'),
                'harga_produk' => $this->input->post('harga_produk'),
                'stok' => $this->input->post('stok'),
                'berat_produk' => $this->input->post('berat_produk'),
                'warna_produk' => $this->input->post('warna_produk'),
                'ukuran_produk' => $this->input->post('ukuran_produk'),
                'deskripsi_produk' => $this->input->post('deskripsi_produk')
            );

            $config['upload_path'] = '.\assets\foto_produk';
            $config['allowed_types'] = 'jpg|png|jpeg|PNG';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto_produk')) {
                $data_file = $this->upload->data();
                $data_foto = array(
                    'foto_produk' => $data_file['file_name']
                );
            }

            $this->Madmin->insert_entry($data_produk, $data_foto);
            redirect('produk');
        }
    }

    // public function proses_tambah()
    // {
    //     $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', [
    //         'required' => '%s Wajib Diisi'
    //     ]);
    //     $this->form_validation->set_rules('id_kategori', 'Kategori', 'required', [
    //         'required' => '%s Wajib Diisi'
    //     ]);
    //     $this->form_validation->set_rules('harga_produk', 'Harga Produk', 'required', [
    //         'required' => '%s Wajib Diisi'
    //     ]);
    //     $this->form_validation->set_rules('stok', 'Stok', 'required', [
    //         'required' => '%s Wajib Diisi'
    //     ]);
    //     $this->form_validation->set_rules('berat_produk', 'Berat Produk', 'required', [
    //         'required' => '%s Wajib Diisi'
    //     ]);
    //     $this->form_validation->set_rules('warna_produk', 'Warna Produk', 'required', [
    //         'required' => '%s Wajib Diisi'
    //     ]);
    //     $this->form_validation->set_rules('ukuran_produk', 'Ukuran Produk', 'required', [
    //         'required' => '%s Wajib Diisi'
    //     ]);
    //     $this->form_validation->set_rules('id_foto', 'Foto', 'required', [
    //         'required' => '%s Wajib Diisi'
    //     ]);
    //     $this->form_validation->set_rules('deskripsi_produk', 'Deskripsi Produk', 'required', [
    //         'required' => '%s Wajib Diisi'
    //     ]);

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->add();
    //     } else {
    //         $data = array(
    //             'nama_produk' => $this->input->post('nama_produk'),
    //             'id_kategori' => $this->input->post('id_kategori'),
    //             'harga_produk' => $this->input->post('harga_produk'),
    //             'stok' => $this->input->post('stok'),
    //             'berat_produk' => $this->input->post('berat_produk'),
    //             'warna_produk' => $this->input->post('warna_produk'),
    //             'ukuran_produk' => $this->input->post('ukuran_produk'),
    //             'id_foto' => $this->input->post('id_foto'),
    //             'deskripsi_produk' => $this->input->post('deskripsi_produk')
    //         );
    //         $this->Madmin->insert_produk($data);

    //         $config['upload_path'] = '.\assets\foto_produk';
    //         $config['allowed_types'] = 'jpg|png|jpeg|PNG';
    //         $this->load->library('upload', $config);
    //         $id_produk = $this->db->insert_id();
    //         if ($this->upload->do_upload('foto_produk')) {
    //             $data_file = $this->upload->data();
    //             $datas = array(
    //                 'id_produk' => $id_produk,
    //                 'foto_produk' => $data_file['file_name']
    //             );
    //             $this->db->insert_foto($datas);
    //         }
    //         redirect('produk');
    //     }
    // }
}
