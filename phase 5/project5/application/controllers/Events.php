<?php

class Events extends CI_Controller() {
	public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('Event_model');
	}

	public function index()
	{
		$this->load->model('Event_model');
		$data['eventdetail'] = $this->Event_model->getEvents();
		$this->load->vars($data);	

		$this->load->view('templates/header');
		$this->load->view('HomeIndividual');
		$this->load->view('templates/footer');
	}

	public function displayEvents() {

		$data = array(
			'eventdetail' => ''
		);		

		$data['eventdetail'] = $this->Event_model->getEvents();

		$this->load->view('HomeIndividual', $data);
		// $this->load->view('templates/footer');
	}
	
}
?>