<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publicacoes extends CI_Controller {

	public function index()
	{

		$data->view = $this->session->userdata("language") . "/publicacoes";

		$this->page->load( $data );
		
	}

}