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
}
?>