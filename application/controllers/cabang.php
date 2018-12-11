<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cabang extends MY_Controller {
    
        function __construct() {
            parent::__construct();
            
            // Load url helper
            $this->load->model('logincheker');
            $this->load->model('view');
            $this->load->helper('date');  
            if($this->session->userdata('status')!="1"){
                redirect(base_url(),'refresh');
               }            
        }

        public function zerodefect(){
           $this->render_page('cabang/zero_defect');
        }
    }
?>
