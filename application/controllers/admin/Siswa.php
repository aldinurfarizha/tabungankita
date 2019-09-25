<?php

class Siswa extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{

		$data['siswa']=$this->m_siswa->get_data()->
		result();
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
	public function hapus ($id_siswa)
    {
        $where = array ('id_siswa' => $id_siswa);
        $this->m_siswa->hapus_data($where, 'siswa');
		redirect('admin/siswa');
	}
	public function edit ($id_siswa)
    {
        $where = array ('noid' => $id_siswa);
        $data['siswa'] = $this->m_siswa->edit_data($where, 'siswa')->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
    }
	
}