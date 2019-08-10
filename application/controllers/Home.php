<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('public/home');
		$this->load->view('layout/footer');
	}
		public function submit()
		{
			$this->form_validation->set_rules('name','Name','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('email','Email Address','required|valid_email', 
											array(
												'required' => 'Please enter %s it is mandatory.',
												'valid_email' => '%s you have entered is not valid.'
												)
										);
			$this->form_validation->set_rules('contact','Contact Number','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('speciality','Speciality','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('hospital','Hospital','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('place','Place','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question1A','Question 1A','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question1B','Question 1B','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question1C','Question 1C','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);

			$this->form_validation->set_rules('question2A','Question 2A','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question2B','Question 2B','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question2C','Question 2C','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3A1','Question 3A1','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3A2','Question 3A2','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3B1','Question 3B1','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3B2','Question 3B2','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3C1','Question 3C1','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3C2','Question 3C2','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3D1','Question 3D1','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3D2','Question 3D2','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3E1','Question 3E1','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3E2','Question 3E2','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3F1','Question 3F1','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3F2','Question 3F2','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3G1','Question 3G1','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3G2','Question 3G2','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3H1','Question 3H1','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3H2','Question 3H2','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3I1','Question 3I1','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question3I2','Question 3I2','required',
											array(
												'required' => 'Please enter value it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question4','Question 4','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question5A','Question 5A','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question5B','Question 5B','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question5C','Question 5C','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question5D','Question 5D','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question6A','Question 6A','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question6B','Question 6B','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question6C','Question 6C','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question7A','Question 7A','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question7B','Question 7B','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question7C','Question 7C','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question7D','Question 7D','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question8','Question 8','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
		
			$this->form_validation->set_rules('question10','Question 10','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question11','Question 11','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question12','Question 12','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			$this->form_validation->set_rules('question13','Question 13','required',
											array(
												'required' => 'Please enter %s it is mandatory.'
												)
										);
			if($this->form_validation->run())
			{
				$post = $this->input->post();	
				$this->load->model('Result');
				//print_r($post); exit();
				$add = $this->Result->submitQuiz($post);
				if($add == 1)
				{
					//$this->load->view('layout/header');
					$this->load->view('public/thankyou');
					//$this->load->view('layout/footer');
				}
				else
				{
					echo " Not Inserted";
				}
			//print_r($post); exit();
			//echo "Hola";
			}
			else
			{
				$this->index();
			}
		}

		public function stats()
		{
			$this->load->database();
			$this->load->model('Result');
			$data['allResponses'] = $this->Result->get_all_responses();
			$this->load->view('layout/header');
			$this->load->view('public/stats',$data);
			$this->load->view('layout/footer');	
		}

		public function view()
		{
			$id = ($this->uri->segment(3)/19995);
			//print_r($id); exit();
			$this->load->database();
			$this->load->model('Result');
			$data['singleResponse'] = $this->Result->get_single_response($id);
			$this->load->view('layout/header');
			$this->load->view('public/view',$data);
			$this->load->view('layout/footer');		
		}



}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
