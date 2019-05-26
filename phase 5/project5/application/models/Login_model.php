<?php  
	/**
	 * Login model
	 */
	class Login_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function getLogin($data)
		{
			$condition = "EmailOfUser="."'".$data['username']."' AND "."PasswordOFUser="."'".$data['password']."'";
			$this->db->select('UserId, Role');
			$this->db->from('user');
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows() == 1) 
			{
				return $query->result();
			} 
			else 
			{
				return false;
			}
		}
	}

?>