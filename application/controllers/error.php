<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {

	public function incompativel()
	{

		$data->view = "incompativel";

		$this->page->load( $data );
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */