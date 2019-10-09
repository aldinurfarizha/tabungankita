<?php

class Penarikan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{

		$data['data']=$this->m_siswa->tampil_siswa();
		$this->load->view('admin/penarikan',$data);
	}
	public function penarikan(){
		$id_siswa=$this->input->post('id_siswa');
		$penarikan=$this->input->post('penarikan');
		$res=$this->m_penarikan->penarikan($id_siswa,$penarikan);
		$this->session->set_flashdata('message', 'Data Berhasil Di Input');
		redirect('admin/penarikan');
	}
	
}