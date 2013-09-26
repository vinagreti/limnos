<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Links extends CI_Controller {

	public function index()
	{

		$data->view = $this->session->userdata("language") . "/links";

		$this->page->load( $data );
		
	}

}