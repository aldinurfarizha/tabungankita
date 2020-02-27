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
        

        $result=$this->m_detail->detail_siswa($id_siswa);
        
        if($result->num_rows() == 1)
        {
            $this->load->view("admin/lihat",$data);
        }
        else{
            echo "NISN Salah, Periksa Kembali NISN";
        }
    }
    public function android_filter_bulan ()
    {
        $bulan=$this->input->post('bulan');
        $id_siswa=$this->input->post('id_siswa');
		$data['siswa']=$this->m_detail->detail_siswa($id_siswa);
		$data['tabungan']=$this->m_detail->detail_tabungan_bulan($bulan, $id_siswa);
        $this->load->view("admin/lihat",$data);
        
      
    }
    public function print ($id_siswa)
    {
		$data['siswa']=$this->m_detail->detail_siswa($id_siswa);
		$data['tabungan']=$this->m_detail->detail_tabungan($id_siswa);
        $this->load->view("admin/print",$data);
    }
}