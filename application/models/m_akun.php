<?php

class m_akun extends CI_Model{
    public function get_data()
    {
        return $this->db->get('user');
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
    function tampil_akun(){
   
        $hsl=$this->db->query("SELECT * FROM user ");
        return $hsl;
    }
    function update_siswa($id_siswa,$nama,$alamat,$telepon){
		$hsl=$this->db->query("UPDATE siswa SET nama='$nama',alamat='$alamat',telepon='$telepon' WHERE id_siswa='$id_siswa'");
		return $hsl;
    }
    function tambah_akun($username,$kelas,$password,$level){
      $hsl=$this->db->query("INSERT INTO user (`username`, `password`, `nama`, `level`) VALUES ('$username', SHA1('$password'), '$kelas', '$level');");
      return $hsl;
      }
    
    function hapus_akun($id_akun){
		$hsl=$this->db->query("DELETE FROM user where user_id='$id_akun'");
		return $hsl;
	}
}

?>