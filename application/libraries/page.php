<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page {

  public function __construct() {

    $this->CI =& get_instance();

    $this->CI->load->library('user_agent');

    if ($this->CI->agent->browser() == 'Internet Explorer' && $this->CI->agent->version() < 7 && uri_string() != "error/incompatibleUserAgent")
        redirect(site_url("error/incompativel"));

  }

  public function load( $data ) {

    if( ! $this->CI->session->userdata("language") )
      $this->CI->session->set_userdata("language", "pt-br");

    $data->content = $this->CI->load->view($data->view, $data, true);

    $this->CI->load->view($this->CI->session->userdata("language") . "/template", $data);

  }

}
/* End of file Permission.php */