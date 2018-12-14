<?php
    defined(('BASEPATH')) OR exit('Tidak diperbolehkan untuk mengakses script secara langsung'); 
    class updatedata extends MY_Controller{
        //---constructor
        function __construct()
        {
            parent::__construct();
            
            $this->load->model('inputdata');   
            $this->load->model('m_edit');            
            $this->load->helper(array('form', 'url'));  
            
           
        }
        //---constructor

        function update_report(){

            $id= $this->input->post('idUpdate');
            $solution = $this->input->post('solutionUpdate');
            $state = $this->input->post('stateUpdate');
            $targetdate = $this->input->post('targetDateUpdate');
            
            $data = array(
                'status' => $state,
                'solusi' => $solution,
                'target_date' => $targetdate    
            );

            $where = array('ID_laporan' => $id);
            $this->m_edit->update_data($where, $data, 'tb_laporan');
            redirect('cabang/zerodefect');
        }
    }//end Constructor
?>
