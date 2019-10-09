<?php

class Setoran extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{

		$data['data']=$this->m_siswa->tampil_siswa();
		$this->load->view('admin/setoran',$data);
	}
	public function setor(){
		$id_siswa=$this->input->post('id_siswa');
		$setoran=$this->input->post('setoran');
		$res=$this->m_setoran->setor($id_siswa,$setoran);
		$this->session->set_flashdata('message', 'Data Berhasil Di Input');
		redirect('admin/setoran');
	}
	
}