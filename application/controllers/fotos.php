<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fotos extends CI_Controller {

	public function index()
	{

		$data->view = "fotos";

		$this->load->helper('directory');

		//$data->folders = array("Ambientes", "congressos e eventos", "Projetos");

		$data->folders = directory_map('./assets/img/galeria/', 1);

		$this->page->load( $data );
		
	}

	public function vendo( $pasta )
	{

		$data->view = "carousel";

		$this->load->helper('directory');

		$data->folder = urldecode( $pasta );

		$data->images = directory_map('./assets/img/galeria/'.urldecode( $pasta ), 1);

		$this->page->load( $data );
		
	}

}