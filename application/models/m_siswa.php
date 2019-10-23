<?php

class m_siswa extends CI_Model{
    public function get_data()
    {
        return $this->db->get('siswa');
    }
    public function input_data($data,$table)
    {
  $this->db->insert($table,$data);
 }
 public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);

    }
    function cari_siswa($nama){
      $hsl=$this->db->query("SELECT * from siswa where nama like '%".$nama."%'");
      return $hsl;
    }
    function tampil_siswa(){
   
        $hsl=$this->db->query("SELECT * FROM siswa ");
        return $hsl;
    }
    function update_siswa($id_siswa,$nama,$alamat,$telepon){
		$hsl=$this->db->query("UPDATE siswa SET nama='$nama',alamat='$alamat',telepon='$telepon' WHERE id_siswa='$id_siswa'");
		return $hsl;
    }
    function hapus_siswa($id_siswa){
		$hsl=$this->db->query("DELETE FROM siswa where id_siswa='$id_siswa'");
		return $hsl;
	}
}

?>