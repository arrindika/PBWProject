<?php

class Gallery_model extends CI_Model{

	//fetch all pictures from db
	function selectAllPicture(){
		$all_pics = $this->db->get('gallery');
		return $all_pics->result();
	}

	//save picture data to db
	function store_pic_data($file,$path2,$post){
        $data = array(
            'namaFoto' => $post['namaFoto'],
            'fileFoto'=>$file,
            'pathFoto'=>$path2
        );
        $this->db->insert('gallery', $data);

    }
}
