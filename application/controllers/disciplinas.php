<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Disciplinas extends CI_Controller {

	public function index()
	{


		$data->view = $this->session->userdata("language") . "/disciplinas";

		$this->page->load( $data );
		
	}

}