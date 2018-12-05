<?php
class logincheker extends CI_Model{
    function checkuser($userid, $passid, $table){
        $this->db->select('username,password,state,kode_cabang');
        $this->db->from($table);
        $this->db->where('username', $userid);
        $this->db->where('password', $passid);
        $this->db->limit(1);
        
        $query = $this->db->get();

        if ($query->num_rows()==1) {
            return $query->result();
            
        }else{
            return FALSE;
        }
    }
}
?>