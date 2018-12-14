<?php
    class m_edit extends CI_Model{
        function update_data($where,$data,$table)
        {
            $this->db->where($where);
            $this->db->update($table, $data);            
        }
    }

?>