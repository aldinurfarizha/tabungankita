<?php

class m_detail extends CI_Model{


    function detail_siswa($id_siswa){
        $hsl=$this->db->query(" select  *
										  
        from 
        siswa
        where
        id_siswa = $id_siswa");
        return $hsl;
    }
    function detail_tabungan($id_siswa){
        $hsl=$this->db->query(" select  *
        from 
        tabungan
        where
        id_siswa = $id_siswa
        order by id_tabungan asc");
        return $hsl;
    }
}
?>