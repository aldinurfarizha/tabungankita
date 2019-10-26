<?php

class Akun extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{

		$data['data']=$this->m_akun->tampil_akun();
		$this->load->view('admin/akun',$data);
	}
	
	public function tambah_aksi(){
		$username		=$this->input->post('username');
		$kelas			=$this->input->post('kelas');
		$password		=$this->input->post('password');
		$level="2";
		$this->m_akun->tambah_akun($username,$kelas,$password,$level);
		$this->session->set_flashdata('message', 'Data Berhasil Di Input');
		redirect('admin/akun');
	}
	public function hapus_akun()
    {
		$id_akun=$this->input->post('id_akun');
		$this->m_akun->hapus_akun($id_akun);
		redirect('admin/akun');
	}
	public function edit_siswa()
    {
		$id_siswa=$this->input->post('id_siswa');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$telepon=$this->input->post('telepon');
	
		$this->m_siswa->update_siswa($id_siswa,$nama,$alamat,$telepon);
	
		redirect('admin/siswa');
    }
	
}