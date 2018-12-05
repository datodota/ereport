<?php

class Inputdata extends CI_Model{
    
    function input($data,$table)
    {
        $this->db->insert($table, $data);            
    }
}
?>