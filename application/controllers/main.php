<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {
    
    function __construct() {
        parent::__construct();
        
        // Load url helper
        $this->load->model('logincheker');
        $this->load->helper('date');  
        
         
    }

    public function index(){
        $this->login();
    }

    public function login_checker(){
        $userid=$this->input->post('userid');
        $passid=$this->input->post('passid');

        $checker = $this->logincheker->checkuser($userid, $passid, 'tb_user');
        
        if ($checker) {
            
             foreach ($checker as $user) {
                 $this->session->set_userdata('username', $user->username);
                 $this->session->set_userdata('status', $user->state);
                 $this->session->set_userdata('kode_cabang', $user->kode_cabang);

                 $state = $this->session->userdata('status');

                if ($state == 0) {                  
                    redirect('cabang/zerodefect');             
                    
                }
               else{
                redirect(base_url());
               }              
            }
        }
    }

    function logout(){

        $this->session->sess_destroy();
        redirect(base_url(),'refresh');
        
     }

  
  
}

?>
