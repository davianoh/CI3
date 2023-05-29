<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model {

	function getDataMahasiswa() {
		$query = $this->db->get('tb_mahasiswa');
		return $query->result();
	}

	function insertDataMahasiswa($data) {
		$this->db->insert('tb_mahasiswa', $data);
	}

	function getDataMahasiswaDetail($nim) {
		$this->db->where('nim', $nim);
		$query = $this->db->get('tb_mahasiswa');
		return $query->row();
	}

	function updateDataMahasiswa($nim, $data) {
		$this->db->where('nim', $nim);
		$this->db->update('tb_mahasiswa', $data);
	}

	function deleteDataMahasiswa($nim) {
		$this->db->where('nim', $nim);
		$this->db->delete('tb_mahasiswa');
	}

	#---------------------------------------------
	
	function getDataReservasi() {
		$query = $this->db->get('tb_reservasi');
		return $query->result();
	}

	function insertDataReservasi($data) {
		$this->db->insert('tb_reservasi', $data);
	}

	function getDataReservasiDetail($kode) {
		$this->db->where('kode', $kode);
		$query = $this->db->get('tb_reservasi');
		return $query->row();
	}

	function updateDataReservasi($kode, $data) {
		$this->db->where('kode', $kode);
		$this->db->update('tb_reservasi', $data);
	}

	function deleteDataReservasi($kode) {
		$this->db->where('kode', $kode);
		$this->db->delete('tb_reservasi');
	}

	#----------------------------------------
	function getDataUserDetail($user) {
		$this->db->where('user', $user);
		$query = $this->db->get('tb_users');
		return $query->row();
	}

}

/* End of file M_Mahasiswa.php */
/* Location: ./application/models/M_Mahasiswa.php */