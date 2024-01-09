<?php

class Madmin extends CI_Model
{
	public function cek_login($u, $p)
	{
		$q = $this->db->get_where('tbl_admin', array('username' => $u, 'password' => $p));
		return $q;
	}

	public function get_all_data($tabel)
	{
		$q = $this->db->get($tabel);
		return $q;
	}

	public function insert($tabel, $data)
	{
		$this->db->insert($tabel, $data);
	}

	public function get_by_id($tabel, $id)
	{
		return $this->db->get_where($tabel, $id);
	}

	public function update($tabel, $data, $pk, $id)
	{
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function delete($tabel, $id, $val)
	{
		$this->db->delete($tabel, array($id => $val));
	}

	public function detail_data($id)
	{
		$this->db->select('*');
		// $this->db->from('tbl_kategori');
		$this->db->from('tbl_produk');
		$this->db->join('tbl_foto', 'tbl_foto.id_produk = tbl_produk.id_produk');
		// $this->db->get_where('tbl_produk', array('id_produk' => $id))->row();
		$this->db->where('tbl_foto.id_produk', $id);
		$query = $this->db->get();
		return $query;
	}

	public function join_order()
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('tbl_order', 'tbl_order.id_user = tbl_user.id_user');
		$this->db->join('tbl_detail_order', 'tbl_detail_order.id_order = tbl_order.id_order');
		return $this->db->get('');
	}

	public function join_produk()
	{
		$this->db->select('*');
		$this->db->from('tbl_kategori');
		$this->db->join('tbl_produk', 'tbl_produk.id_kategori = tbl_kategori.id_kategori');
		$this->db->join('tbl_foto', 'tbl_foto.id_produk = tbl_produk.id_produk');
		return $this->db->get('');
	}

	public function editPassword($u, $p)
	{
		$id = $this->db->get_where('tbl_admin', array('username' => $u))->row_object()->id_admin;
		$dataUpdate = array(
			'username' => $u,
			'password' => password_hash($p, PASSWORD_DEFAULT)
		);
		$this->db->where('id_admin', $id);
		$this->db->update('tbl_admin', $dataUpdate);
	}

	public function insert_entry($data_produk, $data_foto)
	{
		$this->db->insert('tbl_produk', $data_produk);
		$data_foto['id_produk'] = $this->db->insert_id();
		$this->db->insert('tbl_foto', $data_foto);
	}

	public function update_entry($pk, $id, $data_produk, $data_foto)
	{
		$this->db->where($pk, $id);
		$this->db->set($data_produk);
		$this->db->update('tbl_produk', $data_produk);

		$where  = array('id_produk' => $data_foto['id_produk']);

		$this->db->where($where);
		$this->db->update('tbl_foto', $data_foto);

		$this->db->where($where);
		return $this->db->get('tbl_foto')->row()->stid;
	}

	public function save_user($data)
	{
		$this->db->insert('tbl_user', $data);
	}

	public function cek_login_user($u, $p)
	{
		$query = $this->db->get_where('tbl_user', array('username' => $u));
		$check = $query->num_rows();
		$account = $query->row_object();
		$hash = $account->password;
		if ($check == 1) {
			if (password_verify($p, $hash)) {
				return array('loggedIn' => true, 'id_user' => $account->id_user);
			}
		}
		return array('loggedIn' => false, 'id_user' => $account->id_user);;
	}

	public function cek_login_admin($u, $p)
	{
		$query = $this->db->get_where('tbl_admin', array('username' => $u));
		$check = $query->num_rows();
		$account = $query->row_object();
		$hash = $account->password;
		if ($check == 1) {
			if (password_verify($p, $hash)) {
				return array('loggedIn' => true, 'id_admin' => $account->id_admin);
			}
		}
		return array('loggedIn' => false, 'id_admin' => $account->id_admin);;
	}

	public function save_admin($data)
	{
		$this->db->insert('tbl_admin', $data);
	}

	public function data_setting()
	{
		$this->db->select('*');
		$this->db->from('tbl_setting');
		$this->db->where('id', 1);
		return $this->db->get()->row();
	}

	public function editSetting($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('tbl_setting', $data);
	}

	public function detail_produk($id_produk)
	{
		$this->db->select('*');
		$this->db->from('tbl_produk');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori', 'left');
		$this->db->where('id_produk', $id_produk);
		return $this->db->get()->row();
	}

	public function belum_bayar()
	{
		$this->db->select('*');
		$this->db->from('tbl_order');
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$this->db->where('status_bayar=0');
		$this->db->order_by('id_order', 'desc');
		return $this->db->get()->result();
	}

	public function diproses()
	{
		$this->db->select('*');
		$this->db->from('tbl_order');
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$this->db->where('status_order=1');
		$this->db->order_by('id_order', 'desc');
		return $this->db->get()->result();
	}

	public function dikirim()
	{
		$this->db->select('*');
		$this->db->from('tbl_order');
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$this->db->where('status_order=2');
		$this->db->order_by('id_order', 'desc');
		return $this->db->get()->result();
	}

	public function selesai()
	{
		$this->db->select('*');
		$this->db->from('tbl_order');
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$this->db->where('status_order=3');
		$this->db->order_by('id_order', 'desc');
		return $this->db->get()->result();
	}

	public function detailOrder($id_order)
	{
		$this->db->select('*');
		$this->db->from('tbl_order');
		$this->db->where('id_order', $id_order);
		return $this->db->get()->row();
	}

	public function updateOrder($data)
	{
		$this->db->where('id_order', $data['id_order']);
		$this->db->update('tbl_order', $data);
	}

	public function insertDetail($data_order, $data_detail_order)
	{
		$this->db->insert('tbl_order', $data_order);
		$data_detail_order['id_order'] = $this->db->insert_id();
		$this->db->insert('tbl_detail_order', $data_detail_order);
	}
}
