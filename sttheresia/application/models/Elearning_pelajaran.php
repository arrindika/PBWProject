<?php
    /**
     *
     */
    class Elearning_pelajaran extends CI_Model
    {
       public function materi(){
        $query= $this->db->get('daftar_matpel');
        if($query->num_rows()>0){
            return $query->result();
        }
        else{
            return false; 
        }
	}
        public function dapet($where=""){
            $query = $this->db->query('SELECT a.id_matpel, nama_materi, nama_guru
FROM daftar_materi a
JOIN daftar_matpel b ON a.id_matpel = b.id_matpel '.$where);
         if($query->num_rows()>0){
            return $query->result();
        }
        else{
            return false; 
        }
	}
        
    }

?>
