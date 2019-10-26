<?php

class Detail extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}
	public function rinci ($id_siswa)
    {
		$data['siswa']=$this->m_detail->detail_siswa($id_siswa);
		$data['tabungan']=$this->m_detail->detail_tabungan($id_siswa);
        $this->load->view("admin/detail",$data);
    }
    public function android ($id_siswa)
    {
		$data['siswa']=$this->m_detail->detail_siswa($id_siswa);
		$data['tabungan']=$this->m_detail->detail_tabungan($id_siswa);
        $this->load->view("admin/lihat",$data);
    }
}