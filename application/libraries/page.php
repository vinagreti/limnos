<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page {

  public function __construct() {

    $this->CI =& get_instance();

    $this->CI->load->library('user_agent');

    if ($this->CI->agent->browser() == 'Internet Explorer' && $this->CI->agent->version() < 7 && uri_string() != "error/incompatibleUserAgent")
        redirect(site_url("error/incompativel"));

  }

  public function load( $data ) {

    $data->content = $this->CI->load->view($data->view, $data, true);

    //print_r($data->content);

    $this->CI->load->view("template", $data);

  }

}
/* End of file Permission.php */