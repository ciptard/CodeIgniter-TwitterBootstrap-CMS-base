<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	
	
	public function index()
	{
        if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
        
					
		$this->load->view('partials/header', $this->headerViewData());
		$this->load->view('home');
		$this->load->view('partials/footer');
	}
	
	
}

