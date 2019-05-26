<?php
class Event_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getEvents() {
		$this->db->select('EventId, EventImage,	DetailOfEvents, Place, DateofEvent, Hour');
		$this->db->from('events');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function updateEvents($event_id, $data)
	{
		return $this->db->where('EventId', $event_id)->update('events', $data);
	}
	
	public function deleteEvent($event_id)
	{
		return $this->db->delete('events', array('EventId' => $event_id));
	}
}
?>