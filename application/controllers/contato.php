<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function index()
	{

		$data->view = $this->session->userdata("language") . "/contato";

		$this->page->load( $data );
		
	}

}