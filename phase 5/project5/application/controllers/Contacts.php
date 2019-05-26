<?php

/**
 * 
 */
class Contacts extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('Contact_model');
	}

	public function index()
	{
		// $page = 'Registrate';
		$this->load->view('templates/header');
		$this->load->view('pages/Contacto');
		$this->load->view('templates/footer');
		
	}

	public function contact_us() {

		$this->form_validation->set_rules('contactofname','First Name','trim|required');
		$this->form_validation->set_rules('contactolname','Last name','trim|required');
		$this->form_validation->set_rules('contactoemail','Email','trim|required');
		$this->form_validation->set_rules('contactotopic','Topic','trim|required');
		$this->form_validation->set_rules('contactomsg','Message','trim|required');

		if ($this->form_validation->run() == FALSE)
		{

			$this->load->view('pages/Contacto', $data);
		}
		else
		{
			$data = array(
				'FirstName' => $this->input->post('contactofname', TRUE),
				'LastName' => $this->input->post('contactolname', TRUE),
				'Email' => $this->input->post('contactoemail', TRUE),
				'Topic' => $this->input->post('contactotopic', TRUE),
				'Message' => $this->input->post('contactomsg', TRUE)
			);

			$query = $this->Contact_model->contact_us($data); //Inserts user into the user table

			redirect(base_url()."Contacto");
			// $this->getIndividual();	
			// $this->Events->getIndividual();
			
		}
	}
}

?>