<?php

/**
 * 
 */
class Contact_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function contact_us($data)
	{
		$query = $this->db->insert('contact', $data);
		return $query;
	}
}

?>