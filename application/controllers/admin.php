<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends MY_Controller {
    
        function __construct() {
            parent::__construct();
            
            // Load url helper
            $this->load->model('logincheker');
            $this->load->model('view');
            $this->load->helper('date');  
            if($this->session->userdata('status')!="0"){
                redirect(base_url(),'refresh');
               }            
        }

        public function report(){
           $this->render_page('admin/report');
        }

    }
?>
