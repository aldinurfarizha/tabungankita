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
				redirect('auth');
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
		$angka1=$this->input->post('penarikan');
		$penarikan= str_replace(".", "", $angka1);
		$angka2=$this->input->post('max_total');
		$saldomax= str_replace(".", "", $angka2);
		if($saldomax>=$penarikan){
			$res=$this->m_penarikan->penarikan($id_siswa,$penarikan);
			$this->session->set_flashdata('message', 'Data Berhasil Di Input');
			redirect('admin/penarikan');
		}	
		else{
			$this->session->set_flashdata('gagal', 'Data gagal Di Input');
			redirect('admin/penarikan');
		}
		
	}
	
}
