<?php

class m_penarikan extends CI_Model{


    function penarikan($id_siswa,$penarikan){
        $saldo=$this->db->query(" select  penarikan,
        setoran,
        sum(setoran)-sum(penarikan) as satota
        from 
        tabungan
        where
        id_siswa = $id_siswa");
        foreach ($saldo->result() as $row)
        {
            echo $row->satota;
        }
        $hsl=$this->db->query("insert INTO tabungan SET
        id_siswa = $id_siswa,
        penarikan = $penarikan,
        saldo = $row->satota-$penarikan,
        tgl = CURDATE(); 
        ");
        $hsl2=$this->db->query("UPDATE siswa set saldo = $row->satota-$penarikan where id_siswa = $id_siswa");
        return $hsl;
        return $hsl2;
    }
    
   
}
?>