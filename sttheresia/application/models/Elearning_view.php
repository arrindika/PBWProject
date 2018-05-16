<?php
    /**
     *
     */
    class Elearning_view extends CI_Model
    {
       public function login($idpengguna, $passpengguna)
	{
        $check= $this->db->get_where('pengguna', array('ni_pengguna'=>$idpengguna, 'pass_pengguna'=> sha1($passpengguna)));
        if($check->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
	}
        
    }

?>
