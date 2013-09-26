<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Language extends CI_Controller {

	public function set( $language )
	{

		$this->session->set_userdata("language", $language);

		redirect( $_SERVER["HTTP_REFERER"] );

	}

}