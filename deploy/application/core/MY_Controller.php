<?php
/**
 * Abstract Contoller
 *
 * @author Matt Collins
 */
class MY_Controller extends CI_Controller {
	public $title = SITE_TITLE;

	public function  __construct() {
		parent::__construct();

		$this->load->database();
		$this->load->library('session');
		$this->load->helper('url');
                $this->load->library('ion_auth');
        
        
	}

	public function headerViewData()
	{
		$this->load->library('session');

		$headerData = array();
		$headerData['title'] = $this->title;
		$headerData['bodyID'] = strtolower($this->router->fetch_class() .'-'.$this->router->fetch_method());
                $headerData['loggedIn'] = $this->ion_auth->logged_in();

		return $headerData;
	}
}