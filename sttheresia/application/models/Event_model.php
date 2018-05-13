<?php
    /**
     *
     */
    class Event_model extends CI_Model
    {
        public function insert_event($eventTitle,$eventBody,$eventDate,$eventLocation){
            $data = array(
                'eventTitle' => $eventTitle,
                'eventBody' => $eventBody,
                'eventDate' => $eventDate,
                'eventLocation' => $eventLocation
            );
            $this->db->insert('event', $data);
        }
        public function select_events()
        {
            $this->db->order_by('eventDate', 'ASC');
            $query = $this->db->get('event');
            return $query->result();
        }
        public function select_events_where_id($id)
        {
            $this->db->where('id', $id);
            $query = $this->db->get('event');
            return $query->result();
        }
        public function update_event_where_id($id,$eventTitle,$eventBody,$eventDate,$eventLocation){
            $data = array(
                'eventTitle' => $eventTitle,
                'eventBody' => $eventBody,
                'eventDate' => $eventDate,
                'eventLocation' => $eventLocation
            );
            $this->db->where('id', $id);
            $this->db->update('event', $data);
        }
        public function delete_event_where_id($deleteID){
            $this->db->where('id', $deleteID);
            $this->db->delete('event');

        }

        public function select_events_four_nearest()
        {
            $this->db->order_by('eventDate', 'ASC');
            $this->db->limit(4);
            $query = $this->db->get('event');
            return $query->result();
        }

    }

?>
