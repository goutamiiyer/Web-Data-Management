<?php
	/**
	 * Login Controller
	 */
	class Logins extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('Login_model');
		}

		public function index()
		{
			// $page = 'Registrate';
			$this->load->view('templates/header');
			$this->load->view('pages/IniciarSesion');
			$this->load->view('templates/footer');
		}

		public function login_user()
		{
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('pass','Password','trim|required');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('pages/IniciarSesion');
			}
			else
			{
				$data = array(
					'username' => $this->input->post('email'),
					'password' => $this->input->post('pass')
				);

				$query = $this->Login_model->getLogin($data);
				if($query)
				{
					$session_data = array(
						'username' => $query[0]->UserId,
						'role' => $query[0]->Role
					);
					$this->session->set_userdata('loggedin', $session_data);
					if($session_data['role'] == 'Individual')//Role == "Individual" go to HomeIndividual
					{
						redirect(base_url()."HomeIndividual");
					}
					if($session_data['role'] == 'Business')
					{
						redirect(base_url()."HomeBusiness");
					}
					if($session_data['role'] == 'Agent')
					{
						redirect(base_url()."HomeAgentLEAN");
					}
				}
				else
				{
					// $data['error'] = 'Enter the correct credentials';
					redirect('IniciarSesion', $data);
				}
			}
			
		}
	}
?>