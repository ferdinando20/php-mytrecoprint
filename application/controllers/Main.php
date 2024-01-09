<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->library('form_validation');
        $this->load->library('cart');
    }

    public function index()
    {
        $data['produk'] = $this->Madmin->join_produk()->result();
        $data['user'] = $this->Madmin->get_all_data('tbl_user', array('id_user' => $this->session->userdata('id_user')))->row();
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/home', $data);
        $this->load->view('home/layout/footer');
    }

    public function register()
    {
        $this->load->view('home/layout/header');
        $this->load->view('home/register');
        $this->load->view('home/layout/footer');
    }

    public function login()
    {
        $this->load->view('home/layout/header');
        $this->load->view('home/login');
        $this->load->view('home/layout/footer');
    }

    public function login_aksi()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required',
            array('required' => '<div class="alert alert-danger alert-dismissible fade show"><strong>Error! 
        </strong>Username Tidak Boleh Kosong! <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>')
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array('required' => '<div class="alert alert-danger alert-dismissible fade show"><strong>Error! 
        </strong>Password Tidak Boleh Kosong! <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>')
        );
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan form login dengan pesan error
            $this->load->view('home/layout/header');
            $this->load->view('home/login');
            $this->load->view('home/layout/footer');
        } else {
            $u = $this->input->post('username');
            $p = $this->input->post('password');

            $cek = $this->Madmin->cek_login_user($u, $p);

            if ($cek['loggedIn']) {
                $data_session = array(
                    'id_user' => $cek['id_user'],
                    'User' => $u,
                    'status' => 'login'
                );

                $this->session->set_userdata($data_session);
                redirect('main');
            } else {
                redirect('main/login');
            }
        }
    }

    public function register_aksi()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama_user', '', 'required');
        $this->form_validation->set_rules('alamat_user', '', 'required');
        $this->form_validation->set_rules('kodepos', '', 'required');
        $this->form_validation->set_rules('tlp_user', '', 'required');
        // $this->form_validation->set_rules('statusAktif', '', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan form login dengan pesan error
            redirect('main/register');
        } else {
            $u = $this->input->post('username');
            $p = $this->input->post('password');
            $nama_user = $this->input->post('nama_user');
            $alamat_user = $this->input->post('alamat_user');
            $kodepos = $this->input->post('kodepos');
            $tlp_user = $this->input->post('tlp_user');
            // $statusAktif = $this->input->post('statusAktif');

            // Encrypt password
            $hashed_password = password_hash($p, PASSWORD_DEFAULT);
            // Save user
            $user_data = array(
                'username' => $u,
                'password' => $hashed_password,
                'nama_user' => $nama_user,
                'alamat_user' => $alamat_user,
                'kodepos' => $kodepos,
                'tlp_user' => $tlp_user
                // 'statusAktif' => $statusAktif
            );

            $this->db->insert('tbl_user', $user_data);
            redirect('main');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('main');
    }

    public function about()
    {
        $this->load->view('home/layout/header');
        $this->load->view('home/about');
        $this->load->view('home/layout/footer');
    }

    public function katalog()
    {
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $data['produk'] = $this->Madmin->join_produk()->result();
        $data['user'] = $this->Madmin->get_by_id(
            'tbl_user',
            array('id_user' => $this->session->userdata('id_user'))
        )->row();
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/katalog', $data);
        $this->load->view('home/layout/footer');
    }

    public function detailProduk($id_produk)
    {
        $dataWhere = array('id_produk' => $id_produk);
        $data['produk'] = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();
        $data['foto'] = $this->Madmin->get_by_id('tbl_foto', $dataWhere)->row_object();
        $data['user'] = $this->Madmin->get_all_data(
            'tbl_user',
            array('id_user' => $this->session->userdata('id_user'))
        )->row();
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/detailProduk', $data);
        $this->load->view('home/layout/footer');
    }

    public function mycart()
    {
        $data['produk'] = $this->Madmin->get_all_data('tbl_produk')->result();
        $data['cartItems'] = $this->cart->contents();
        $data['user'] = $this->Madmin->get_all_data('tbl_user', array('id_user' => $this->session->userdata('id_user')))->row();
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/mycart', $data);
        $this->load->view('home/layout/footer');
    }

    public function add_cart($id_produk)
    {
        $dataWhere = array('id_produk' => $id_produk);
        $produk = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();
        $foto = $this->Madmin->get_by_id('tbl_foto', $dataWhere)->row_object();

        //Add product to cart
        $data = array(
            'id' => $produk->id_produk,
            'qty' => 1,
            'price' => $produk->harga_produk,
            'name' => $produk->nama_produk,
            'image' => $foto->foto_produk,
            'weight' => $produk->berat_produk
        );
        $this->cart->insert($data);
        redirect("main/mycart");
    }

    public function updateItemQty()
    {
        $update = 0;
        $rowid = $this->input->get('rowid');
        $qty = $this->input->get('qty');
        if (!empty($rowid) && !empty($qty)) {
            $data = array(
                'rowid' => $rowid,
                'qty' => $qty
            );
            $update = $this->cart->update($data);
        }
        echo $update ? 'ok' : 'err';
    }

    public function delete_cart($rowid)
    {
        $remove = $this->cart->remove($rowid);
        redirect("main/mycart");
    }

    public function profile()
    {
        $data['user'] = $this->Madmin->get_by_id('tbl_user', array('id_user' => $this->session->userdata('id_user')))->row();
        $this->load->view('home/layout/header');
        $this->load->view('home/profile', $data);
        $this->load->view('home/layout/footer');
    }

    public function editProfile()
    {
        $id = $this->session->userdata('id_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_user = $this->input->post('nama_user');
        $alamat_user = $this->input->post('alamat_user');
        $kodepos = $this->input->post('kodepos');
        $tlp_user = $this->input->post('tlp_user');
        $config['upload_path'] = './assets/foto_profile/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($password != "") {
            if ($this->upload->do_upload('foto_profile')) {
                $data_file = $this->upload->data();
                $dataUpdate = array(
                    'foto_profile' => $data_file['file_name'],
                    'username' => $username,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                    'nama_user' => $nama_user,
                    'alamat_user' => $alamat_user,
                    'kodepos' => $kodepos,
                    'tlp_user' => $tlp_user
                );
                $this->Madmin->update('tbl_user', $dataUpdate, 'id_user', $id);
            } else {
                redirect('main/profile');
            }
        } else {
            $dataUpdate = array(
                'foto_profile' => $data_file['file_name'],
                'username' => $username,
                'nama_user' => $nama_user,
                'alamat_user' => $alamat_user,
                'kodepos' => $kodepos,
                'tlp_user' => $tlp_user
            );
            $this->Madmin->update('tbl_user', $dataUpdate, 'id_user', $id);
        }
        redirect('main/profile');
    }

    // public function cekout()
    // {
    //     // if ($this->session->userdata('username') == '') {
    //     //     $this->session->set_flashdata('error', 'Anda Belum Login !!!!');
    //     //     redirect('main/login');
    //     // } else {
    //     $this->pelanggan_login->proteksi_halaman();
    //     $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', array(
    //         'required' => '%s Harus Diisi !!!'
    //     ));
    //     $this->form_validation->set_rules('kota', 'Kota', 'required', array(
    //         'required' => '%s Harus Diisi !!!'
    //     ));
    //     $this->form_validation->set_rules('expedisi', 'Expedisi', 'required', array(
    //         'required' => '%s Harus Diisi !!!'
    //     ));
    //     $this->form_validation->set_rules('paket', 'Paket', 'required', array(
    //         'required' => '%s Harus Diisi !!!'
    //     ));
    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('home/layout/header');
    //         $this->load->view('home/checkout');
    //         $this->load->view('home/layout/footer');
    //     } else {
    //         $dataInput = array(
    //             'id_user' => $this->session->userdata('id_user'),
    //             'tgl_order' => date('Y-m-d'),
    //             'nama_penerima' => $this->input->post('nama_penerima'),
    //             'hp_penerima' => $this->input->post('hp_penerima'),
    //             'provinsi' => $this->input->post('provinsi'),
    //             'kota' => $this->input->post('kota'),
    //             'alamat' => $this->input->post('alamat'),
    //             'kode_pos' => $this->input->post('kode_pos'),
    //             'expedisi' => $this->input->post('expedisi'),
    //             'paket' => $this->input->post('paket'),
    //             'estimasi' => $this->input->post('estimasi'),
    //             'ongkir' => $this->input->post('ongkir'),
    //             'berat' => $this->input->post('berat'),
    //             'grand_total' => $this->input->post('grand_total'),
    //             'total_bayar' => $this->input->post('total_bayar'),
    //         );
    //         $this->Madmin->insert('tbl_order', $dataInput);

    //         $i = 1;
    //         foreach ($this->cart->contents() as $item) {
    //             $data_rinci = array(
    //                 //'id_order' => $this->input->post('id_order'),
    //                 'id_produk' => $item['id'],
    //                 'jumlah' => $item['qty'],
    //                 'harga' => $item['price']
    //             );
    //             $this->Madmin->insert('tbl_detail_order', $data_rinci);
    //         }

    //         $this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Proses !!!');
    //         $this->cart->destroy();
    //         redirect('main/myorder');
    //     }
    //     //}
    // }

    public function cekout()
    {
        if ($this->session->userdata('User') == '') {
            $this->session->set_flashdata('error', 'Anda Belum Login !!!!');
            redirect('main/login');
        } else {
            $this->load->view('home/layout/header');
            $this->load->view('home/checkout');
            $this->load->view('home/layout/footer');
        }
    }

    public function simpancekout()
    {
        $dataInput = array(
            'id_user' => $this->session->userdata('id_user'),
            'tgl_order' => date('Y-m-d'),
            'nama_penerima' => $this->input->post('nama_penerima'),
            'tlp_penerima' => $this->input->post('tlp_penerima'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
            'alamat' => $this->input->post('alamat'),
            'kode_pos' => $this->input->post('kode_pos'),
            'expedisi' => $this->input->post('expedisi'),
            'paket' => $this->input->post('paket'),
            'estimasi' => $this->input->post('estimasi'),
            'ongkir' => $this->input->post('ongkir'),
            //'berat' => $this->input->post('berat'),
            'grand_total' => $this->input->post('grand_total'),
            'total_bayar' => $this->input->post('total_bayar'),
            'status_bayar' => '0',
        );
        // $this->Madmin->insert('tbl_order', $dataInput);

        $i = 1;
        foreach ($this->cart->contents() as $item) {
            $data_rinci = array(
                // 'id_order' => $this->session->userdata('id_order'),
                'id_produk' => $item['id'],
                'jumlah' => $item['qty'],
                'harga' => $item['price']
            );
            $this->Madmin->insertDetail($dataInput, $data_rinci);
        }

        $this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Proses !!!');
        $this->cart->destroy();
        redirect('main/myorder');
    }


    public function myorder()
    {
        $data['order'] = $this->Madmin->belum_bayar();
        // $dataWhere = array('id_order' => $id);
        // $data['order'] = $this->Madmin->get_by_id('tbl_order', $dataWhere)->row();
        // $data['order'] = $this->Madmin->get_by_id('tbl_order', array('id_user' => $this->session->userdata('id_user')))->row();
        $this->load->view('home/layout/header');
        $this->load->view('home/myorder', $data);
        $this->load->view('home/layout/footer');
    }
}
