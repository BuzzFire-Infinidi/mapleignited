<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ucp extends CI_Controller {


	public function index()
	{
		$this->load->view('structure/header');
		$this->load->view('structure/left');
		$this->load->view('ucp/ucp');
		$this->load->view('structure/right');
		$this->load->view('structure/footer');
	}
}

/* End of file ucp.php */
/* Location: ./application/controllers/ucp.php */