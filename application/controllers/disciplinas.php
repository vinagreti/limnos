<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Disciplinas extends CI_Controller {

	public function index()
	{

		$data->view = "disciplinas";

		$this->page->load( $data );
		
	}

}