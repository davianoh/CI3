<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_Mahasiswa');
	}

	public function index()
	{
		// $queryAllReservasi = $this->M_Mahasiswa->getDataReservasi();
		// $DATA = array('queryAllRsv' => $queryAllReservasi);
		// $this->load->view('home', $DATA);

		$this->load->view('login');
	}

	public function fungsi_login()
	{
		// $queryMahasiswaDetail = $this->M_Mahasiswa->getDataMahasiswaDetail($nim);
		// $DATA = array('queryMhsDetail' => $queryMahasiswaDetail);
		// $this->load->view('halaman_edit_mhs', $DATA);
		
		$user = $this->input->post('user');
		$password = $this->input->post('password');

		$queryUserDetail = $this->M_Mahasiswa->getDataUserDetail($user);
		$queryAllReservasi = $this->M_Mahasiswa->getDataReservasi();

		if ($password == $queryUserDetail->password){
			$DATA = array('queryAllRsv' => $queryAllReservasi, 'queryUsr' => $queryUserDetail);
			$this->load->view('home', $DATA);
			//redirect(base_url(''));
		}else{
			redirect(base_url(''));
		}
	}

	public function halaman_tambah() 
	{
		$this->load->view('halaman_tambah_mhs');
	}

	public function halaman_edit($kode)
	{
		// $queryMahasiswaDetail = $this->M_Mahasiswa->getDataMahasiswaDetail($nim);
		// $DATA = array('queryMhsDetail' => $queryMahasiswaDetail);
		// $this->load->view('halaman_edit_mhs', $DATA);

		$queryReservasiDetail = $this->M_Mahasiswa->getDataReservasiDetail($kode);
		$DATA = array('queryRsvDetail' => $queryReservasiDetail);
		$this->load->view('halaman_edit_mhs', $DATA);
	}

	public function fungsiTambah()
	{
		$kode = $this->input->post('kode');
		$origin = $this->input->post('origin');
		$destinasi = $this->input->post('destinasi');
		$kapasitas = $this->input->post('kapasitas');
		$jadwal = $this->input->post('jadwal');
		$harga = $this->input->post('harga');

		$ArrInsert = array(
			'kode' => $kode,
			'origin' => $origin,
			'destinasi' => $destinasi,
			'kapasitas' => $kapasitas,
			'seats' => 0,
			'jadwal' => $jadwal, 
			'harga' => $harga
		);

		$this->M_Mahasiswa->insertDataReservasi($ArrInsert);

		$user = 'Davian';
		$queryUserDetail = $this->M_Mahasiswa->getDataUserDetail($user);
		$queryAllReservasi = $this->M_Mahasiswa->getDataReservasi();

		$DATA = array('queryAllRsv' => $queryAllReservasi, 'queryUsr' => $queryUserDetail);
		$this->load->view('home', $DATA);
	}

	public function fungsiEdit()
	{
		// $nim = $this->input->post('nim');
		// $nama = $this->input->post('nama');
		// $jurusan = $this->input->post('jurusan');

		// $ArrUpdate = array(
		// 	'nama' => $nama,
		// 	'jurusan' => $jurusan
		// );

		// $this->M_Mahasiswa->updateDataMahasiswa($nim, $ArrUpdate);
		// redirect(base_url(''));

		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$seats = $this->input->post('seats');

		$queryReservasiDetail = $this->M_Mahasiswa->getDataReservasiDetail($kode);

		$ArrUpdate = array(
			'origin' => $queryReservasiDetail->origin,
			'destinasi' => $queryReservasiDetail->destinasi,
			'kapasitas' => $queryReservasiDetail->kapasitas,
			'seats' => $queryReservasiDetail->seats + $seats,
			'jadwal' => $queryReservasiDetail->jadwal,
			'harga' => $queryReservasiDetail->harga
		);

		$this->M_Mahasiswa->updateDataReservasi($kode, $ArrUpdate);
		

		$user = 'Davian';
		$queryUserDetail = $this->M_Mahasiswa->getDataUserDetail($user);

		$ArrUpdate2 = array(
			'user' => $queryUserDetail->user,
			'password' => $queryUserDetail->password,
			'balance' => $queryUserDetail->balance - $queryReservasiDetail->harga * $seats
		);
		$this->M_Mahasiswa->updateDataUser($user, $ArrUpdate2);

		$queryAllReservasi = $this->M_Mahasiswa->getDataReservasi();
		$queryUserDetail2 = $this->M_Mahasiswa->getDataUserDetail($user);
		$DATA = array('queryAllRsv' => $queryAllReservasi, 'queryUsr' => $queryUserDetail2);
		$this->load->view('home', $DATA);

	}

	public function fungsiDelete($nim)
	{
		$this->M_Mahasiswa->deleteDataMahasiswa($nim);
		redirect(base_url(''));
	}
}
