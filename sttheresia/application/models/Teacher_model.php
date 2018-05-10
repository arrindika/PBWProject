<?php
    /**
     *
     */
    class Teacher_model extends CI_Model
    {
        public function insert_dataguru($nama,$nip,$tanggal_lahir,$jenis_kelamin,$pendidikan_ijazah,$pendidikan_tahun,$pendidikan_tingkat,$pendidikan_jurusan,$mulai_kerja)
        {
            $data = array(
                'nama' => $nama,
                'nip' => $nip,
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'pendidikan_ijazah' => $pendidikan_ijazah,
                'pendidikan_tahun' => $pendidikan_tahun,
                'pendidikan_tingkat' => $pendidikan_tingkat,
                'pendidikan_jurusan' => $pendidikan_jurusan,
                'mulai_kerja' => $mulai_kerja
            );
            $this->db->insert('dataguru', $data);
        }

        public function select_dataguru()
        {
            $query = $this->db->get('dataguru');
            return $query->result();
        }

        public function select_dataguru_where_id($id)
        {
            $this->db->where('id', $id);
            $query = $this->db->get('dataguru');
            return $query->result();
        }

        public function update_dataguru_where_id($id,$nama,$nip,$tanggal_lahir,$jenis_kelamin,$pendidikan_ijazah,$pendidikan_tahun,$pendidikan_tingkat,$pendidikan_jurusan,$mulai_kerja){
            $data = array(
                'nama' => $nama,
                'nip' => $nip,
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'pendidikan_ijazah' => $pendidikan_ijazah,
                'pendidikan_tahun' => $pendidikan_tahun,
                'pendidikan_tingkat' => $pendidikan_tingkat,
                'pendidikan_jurusan' => $pendidikan_jurusan,
                'mulai_kerja' => $mulai_kerja
            );
            $this->db->where('id', $id);
            $this->db->update('dataguru', $data);
        }

        public function delete_dataguru_where_id($deleteID){
            $this->db->where('id', $deleteID);
            $this->db->delete('dataguru');

        }
    }

?>
