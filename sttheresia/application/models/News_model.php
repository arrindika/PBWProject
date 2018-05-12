<?php
    /**
     *
     */
    class News_model extends CI_Model
    {

        public function insert_news($newsTitle,$newsBody,$newsDate,$newsAuthor)
        {
            $data = array(
                'newsTitle' => $newsTitle,
                'newsBody' => $newsBody,
                'newsDate' => $newsDate,
                'newsAuthor' => $newsAuthor
            );
            $this->db->insert('info', $data);
        }
        public function select_news()
        {
            $query = $this->db->get('info');
            return $query->result();
        }
        public function select_news_where_id($id)
        {
            $this->db->where('id', $id);
            $query = $this->db->get('info');
            return $query->result();
        }
        public function update_news_where_id($id,$newsTitle,$newsBody,$newsDate,$newsLocation){
            $data = array(
                'newsTitle' => $newsTitle,
                'newsBody' => $newsBody,
                'newsDate' => $newsDate,
                'newsAuthor' => $newsLocation
            );
            $this->db->where('id', $id);
            $this->db->update('info', $data);
        }
        public function delete_news_where_id($deleteID){
            $this->db->where('id', $deleteID);
            $this->db->delete('info');
        }
        public function select_news_two_nearest()
        {
            $this->db->order_by('newsDate', 'ASC');
            $this->db->limit(2);
            $query = $this->db->get('info');
            return $query->result();
        }
    }

?>
