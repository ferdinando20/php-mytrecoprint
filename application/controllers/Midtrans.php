<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Midtrans extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Midtrans_model');
    }


    public function index()
    {
        $data = [
            'semuaproduk'   => $this->Midtrans_model->getallproduk(),
            'keranjang'     => $this->Midtrans_model->getallcart()
        ];
        $this->load->view('midtrans/cart', $data);
    }

    public function simpan()
    {
        $productid  = $this->input->post('produkid');
        $jumlah  = $this->input->post('jumlah');
        $datainsert =   [
            'product_id'   => $productid,
            'jumlah'       => $jumlah,
            'status'       => 0
        ];

        $insert     = $this->Midtrans_model->insertcart($datainsert);
        if ($insert > 0) {
            $this->session->set_flashdata('message', 'Data keranjang berhasil ditambah');
        } else {
            $this->session->set_flashdata('message', 'Server sedang sibuk, silahkan coba lagi');
        }
        redirect('midtrans');
    }
}
