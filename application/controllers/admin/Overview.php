<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index(){
	if($this->session->userdata('level')=='1'){
		$data['saldo']=$this->m_overview->tampil_saldo();
		$data['siswa']=$this->m_overview->tampil_jumlah_siswa();
		$data['setor']=$this->m_overview->tampil_setor();
		$data['penarikan']=$this->m_overview->tampil_penarikan();
        $this->load->view("admin/overview",$data);
	
	}else{
		if($this->session->userdata('level')=='2'){
			
			redirect('admin/tabungan');
		
		}
		else{
			$this->load->view("login");
		}
    }
}
		
}