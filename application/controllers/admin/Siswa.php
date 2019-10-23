<?php

class Siswa extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{

		$data['data']=$this->m_siswa->tampil_siswa();
		$this->load->view('admin/siswa',$data);
	}
	public function cari(){
		
		$nama=$this->input->post('cari');
		$this->m_siswa->cari_siswa($nama);
		$data['data']=$this->m_siswa->cari_siswa($nama);
		$this->load->view('admin/siswa',$data);
	}
	public function tambah_aksi(){
		$id_siswa		=$this->input->post('id_siswa');
		$nama			=$this->input->post('nama');
		$jenis_kelamin	=$this->input->post('jenis_kelamin');
		$alamat			=$this->input->post('alamat');
		$telepon		=$this->input->post('telepon');
		$data = array(
			'id_siswa'			=> $id_siswa,
			'nama'				=> $nama,
			'jenis_kelamin'		=> $jenis_kelamin,
			'alamat'			=> $alamat,
			'telepon'			=> $telepon,
		);
		$res=$this->m_siswa->input_data($data, 'siswa');
		$this->session->set_flashdata('message', 'Data Berhasil Di Input');
		redirect('admin/siswa');
	}
	public function hapus_siswa()
    {
		$id_siswa=$this->input->post('id_siswa');
		$this->m_siswa->hapus_siswa($id_siswa);
		redirect('admin/siswa');
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