<?php

class Tabungan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		$data['data']=$this->m_tabungan->tampil_tabungan();
        $this->load->view("admin/tabungan",$data);
	}
	public function cari(){
		
		$id=$this->input->post('cari');
		$this->m_tabungan->cari_siswa($id);
		$data['data']=$this->m_tabungan->cari_siswa($id);
		$this->load->view('admin/tabungan',$data);
	}

	
	
}