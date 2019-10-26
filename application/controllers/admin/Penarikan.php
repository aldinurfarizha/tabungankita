<?php

class Penarikan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		{
			if($this->session->userdata('level')=='1'){
				$data['data']=$this->m_siswa->tampil_siswa();
				$this->load->view('admin/penarikan',$data);
			}
			else{
				if($this->session->userdata('level')=='2'){
				
					$data['data']=$this->m_siswa->tampil_siswa_kelas();
					$this->load->view('admin/penarikan',$data);
					}
					else{
						redirect('auth');
					}
			}
		}
	
	}
	public function cari(){
		
		$nama=$this->input->post('cari');
		$this->m_siswa->cari_siswa($nama);
		$data['data']=$this->m_siswa->cari_siswa($nama);
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