<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sobre extends CI_Controller {

	public function index()
	{

		$data->view = "sobre";

		$this->page->load( $data );
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */