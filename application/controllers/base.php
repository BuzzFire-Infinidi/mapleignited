<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {


	public function index()
	{
		$this->load->view('structure/header');
		$this->load->view('structure/left');
		$this->load->view('home');
		$this->load->view('structure/right');
		$this->load->view('structure/footer');
	}

	public function download()
	{
		$this->load->view('structure/header');
		$this->load->view('structure/left');
		$this->load->view('home');
		$this->load->view('structure/right');
		$this->load->view('structure/footer');
	}
}

/* End of file base.php */
/* Location: ./application/controllers/base.php */