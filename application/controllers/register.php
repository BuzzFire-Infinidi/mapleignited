<?php

class Register extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('insertreg');
		$this->load->library('recaptcha');
	}	
	function index()
	{
		//Validation RUles
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean|min_length[6]|max_length[12]|is_unique[accounts.name]');			
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean|min_length[6]|max_length[12]|matches[confirm_password]|sha1');			
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|xss_clean|max_length[45]|sha1');			
		$this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email|max_length[45]');
		$this->recaptcha->recaptcha_check_answer();
		$this->form_validation->set_error_delimiters('<br /><div class="alert alert-danger">', '</div>');
		$data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();
        $data['page'] = 'main/register';
		if ($this->form_validation->run() == FALSE) //Validation has not passed
		{
			if(!$this->recaptcha->getIsValid())
			{
				$data['captcha_status'] = '1';
			}
			else{$data['captcha_status'] = '';}
			$this->load->view('structure/header');
			$this->load->view('structure/left');
			$this->load->view('main/register',$data);
			$this->load->view('structure/right');
			$this->load->view('structure/footer');
		}
		else // Validation Passed
		{
			// Create Array for Model
			$form_data = array(
					       	'name' => set_value('username'),
					       	'password' => set_value('password'),
					       	'email' => set_value('email')
						);
					
			//Run Model
			if ($this->insertreg->SaveForm($form_data) == TRUE) // Model has completed
			{
				redirect('Register/success');   // Redirect to Success Page/Eventually log user in
			}
			else
			{
			echo 'An error occured. Please let the administrator know.';
			// Model did not execute
			}
		}
	}
	function success() //Success Page
	{
		$this->load->view('structure/header');
		$this->load->view('structure/left');
		$this->load->view('main/reg_success');
		$this->load->view('structure/right');
		$this->load->view('structure/footer');
	}
}
?>