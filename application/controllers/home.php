<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

		$data->view = $this->session->userdata("language") . "/home";

		$this->page->load( $data );
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */