<?php

class Registers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('Register_model');
		// $this->load->library('../contollers/Events'); //loading controller as a library
	}

	public function index()
	{
		// $page = 'Registrate';
		$this->load->view('templates/header');
		$this->load->view('pages/Registrate');
		$this->load->view('templates/footer');
		
	}

	public function register_individual() {

		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('pass','Password','trim|required|min_length[8]');
		$this->form_validation->set_rules('fname','First Name','trim|required');
		$this->form_validation->set_rules('lname','Last Name','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('city','City','trim|required');
		$this->form_validation->set_rules('state','State','trim|required');
		$this->form_validation->set_rules('zip','Postal Code','trim|required|numeric|exact_length[5]');

		if ($this->form_validation->run() == FALSE)
		{

			$this->load->view('pages/IndividualSignup', $data);
		}
		else
		{
			$data = array(
				'EmailOfUser' => $this->input->post('email', TRUE),
				'PasswordOFUser' => $this->input->post('pass', TRUE),
				'FirstNameOfUser' => $this->input->post('fname', TRUE),
				'LastNameOfUser' => $this->input->post('lname', TRUE),
				'Address' => $this->input->post('address', TRUE),
				'City' => $this->input->post('city', TRUE),
				'State' => $this->input->post('state', TRUE),
				'PostalCode' => $this->input->post('zip', TRUE),
				'UserName' => $this->input->post('email', TRUE),
				'Role' => 'Individual'
			);

			$query = $this->Register_model->register_individual($data); //Inserts user into the user table

			redirect(base_url()."HomeIndividual");
			
		}
	}

	public function register_business() {
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('pass','Password','trim|required|min_length[8]');
		$this->form_validation->set_rules('fname','First Name','trim|required');
		$this->form_validation->set_rules('lname','Last Name','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('city','City','trim|required');
		$this->form_validation->set_rules('state','State','trim|required');
		$this->form_validation->set_rules('zip','Postal Code','trim|required|numeric|exact_length[5]');
		$this->form_validation->set_rules('btype','Business Type','trim|required');

		if($this->form_validation->run() == FALSE) 
		{
			$this->load->view('pages/BusinessSignup', $data);
		}
		else
		{
			$data = array(
				'EmailOfUser' => $this->input->post('email', TRUE),
				'PasswordOFUser' => $this->input->post('pass', TRUE),
				'FirstNameOfUser' => $this->input->post('fname', TRUE),
				'LastNameOfUser' => $this->input->post('lname', TRUE),
				'Address' => $this->input->post('address', TRUE),
				'City' => $this->input->post('city', TRUE),
				'State' => $this->input->post('state', TRUE),
				'PostalCode' => $this->input->post('zip', TRUE),
				'TypeOfBusiness' => $this->input->post('btype', TRUE),
				'UserName' => $this->input->post('email', TRUE),
				'Role' => 'Business'
			);

			$query = $this->Register_model->register_business($data);
			redirect(base_url()."HomeBusiness");
		}
	}

	public function register_agent() {

		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('pass','Password','trim|required|min_length[8]');
		$this->form_validation->set_rules('fname','First Name','trim|required');
		$this->form_validation->set_rules('lname','Last Name','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('city','City','trim|required');
		$this->form_validation->set_rules('state','State','trim|required');
		$this->form_validation->set_rules('zip','Postal Code','trim|required|numeric|exact_length[5]');

		if ($this->form_validation->run() == FALSE)
		{

			$this->load->view('pages/AgentSignup', $data);
		}
		else
		{
			$data = array(
				'EmailOfUser' => $this->input->post('email', TRUE),
				'PasswordOFUser' => $this->input->post('pass', TRUE),
				'FirstNameOfUser' => $this->input->post('fname', TRUE),
				'LastNameOfUser' => $this->input->post('lname', TRUE),
				'Address' => $this->input->post('address', TRUE),
				'City' => $this->input->post('city', TRUE),
				'State' => $this->input->post('state', TRUE),
				'PostalCode' => $this->input->post('zip', TRUE),
				'UserName' => $this->input->post('email', TRUE),
				'Role' => 'Agent'
			);

			$query = $this->Register_model->register_agent($data); //Inserts user into the user table

			redirect(base_url()."HomeAgentLEAN");
			
		}
	}
}
?>