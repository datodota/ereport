<?php
    class View extends CI_Model{
        function tampil_zerodefect()
        {
           return $this->db->get('tb_laporan');              
        }
    }//end class
?>