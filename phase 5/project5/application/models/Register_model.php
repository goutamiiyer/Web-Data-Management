<?php
	class Register_model extends CI_Model {
		public function __construct()
		{
			parent::__construct();
		}

		public function register_individual($data)
		{
			// $this->db->where('EmailOfUser',$email);
			// $this->db->where('PasswordOFUser',$pass);
			// $this->db->where('FirstNameOfUser',$fname);
			// $this->db->where('LastNameOfUser',$lname);
			// $this->db->where('Address',$address);
			// $this->db->where('City',$city);
			// $this->db->where('State',$state);
			// $this->db->where('PostalCode',$zip);
			// $this->db->where('Role','Individual');
			// $this->db->where('UserName',$email);
			// $query = $this->db->post('user');
			// if($query->num_rows() == 1)
			// {
			// 	redirect(base_url().'HomeIndividual')
			// }
			$query = $this->db->insert('user', $data);
			return $query;
		}
		public function register_business($data)
		{
			$query = $this->db->insert('user', $data);
			return $query;
		}
		public function register_agent($data)
		{
			$query = $this->db->insert('user', $data);
			return $query;
		}
	}
?>