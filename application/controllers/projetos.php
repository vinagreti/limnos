<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projetos extends CI_Controller {

	public function index()
	{

		$data->view = "projetos";

		$this->page->load( $data );
		
	}

}