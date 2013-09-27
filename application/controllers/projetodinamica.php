<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projetodinamica extends CI_Controller {

	public function index()
	{


		$data->view = $this->session->userdata("language") . "/projetodinamica";

		$this->page->load( $data );
		
	}

}