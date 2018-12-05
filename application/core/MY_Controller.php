<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class MY_Controller extends CI_Controller {
    function render_page($content , $data = null){

        $data['contentnya'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/index', $data);
    }

    function login(){
      
        $this->load->view('login');
    }
}



?>