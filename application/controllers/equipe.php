<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Equipe extends CI_Controller {

	public function index()
	{

		$data->view = "equipe";

		$this->page->load( $data );
		
	}

}