<?php
    /**
     *
     */
    class Elearning_view extends CI_Model
    {
        public function select_matpel($id_matpel,$nama_matpel)
        {
            $this->db->where('id', $id);
            $query = $this->db->get('daftar_matpel');
            return $query->result();
        }
        
    }

?>
