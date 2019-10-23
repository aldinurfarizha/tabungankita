<?php

class m_overview extends CI_Model{

    function tampil_saldo(){
   
        $hsl=$this->db->query(" select penarikan, setoran, sum(setoran)-sum(penarikan) as saldo from tabungan");
        return $hsl;
    }
   
    function tampil_jumlah_siswa(){
        $hsl=$this->db->query("SELECT COUNT(*) as jml_siswa FROM siswa");
        return $hsl;
    }
    function tampil_setor(){
        $hsl=$this->db->query("SELECT SUM(setoran) as jml_setoran from tabungan");
        return $hsl;
    }
    function tampil_penarikan(){
        $hsl=$this->db->query("SELECT SUM(penarikan) as jml_penarikan from tabungan");
        return $hsl;
    }
}
?>