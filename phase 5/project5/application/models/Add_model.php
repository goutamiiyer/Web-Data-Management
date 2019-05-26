<?php

/**
 * 
 */
class Add_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function add_event($data)
	{
		$query = $this->db->insert('events', $data);
		return $query;
	}
}

?>