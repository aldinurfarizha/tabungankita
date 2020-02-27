<?php

class Setoran extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		{
			if($this->session->userdata('level')=='1'){
				$data['data']=$this->m_siswa->tampil_siswa();
				$this->load->view('admin/setoran',$data);
			}
			else{
				if($this->session->userdata('level')=='2'){
				
					$data['data']=$this->m_siswa->tampil_siswa_kelas();
					$this->load->view('admin/setoran',$data);
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
		$this->load->view('admin/setoran',$data);
	}
	public function setor(){
		$id_siswa=$this->input->post('id_siswa');
		$angka1=$this->input->post('setoran');
		$setoran= str_replace(".", "", $angka1);
		$res=$this->m_setoran->setor($id_siswa,$setoran);
		$this->session->set_flashdata('message', 'Data Berhasil Di Input');
		redirect('admin/setoran');
	}
	
}