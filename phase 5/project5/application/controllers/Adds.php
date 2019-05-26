<?php

/**
 * 
 */
class Adds extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('Add_model');
	}

	public function index()
	{
		// $page = 'Registrate';
		$this->load->view('templates/header');
		$this->load->view('pages/AddEvent');
		$this->load->view('templates/footer');
		
	}

	public function add_event() {

		$this->form_validation->set_rules('eventname','Event Name','trim|required');
		$this->form_validation->set_rules('responsible','Responsible name','trim|required');
		$this->form_validation->set_rules('place','Place','trim|required');
		$this->form_validation->set_rules('date','Date','trim|required');
		$this->form_validation->set_rules('hour','Hour','trim|required');
		$this->form_validation->set_rules('cost','Cost','trim|required');

		if ($this->form_validation->run() == FALSE)
		{

			$this->load->view('pages/AddEvent', $data);
		}
		else
		{
			$data = array(
				'DetailOfEvents' => $this->input->post('eventname', TRUE),
				'Responsible' => $this->input->post('responsible', TRUE),
				'Place' => $this->input->post('place', TRUE),
				'DateofEvent' => $this->input->post('date', TRUE),
				'Hour' => $this->input->post('hour', TRUE),
				'PriceOfEvent' => $this->input->post('cost', TRUE)
			);

			$query = $this->Add_model->add_event($data); //Inserts user into the user table

			redirect(base_url()."Eventos");
			// $this->getIndividual();	
			// $this->Events->getIndividual();
			
		}
	}
}

?>