<?php
    defined(('BASEPATH')) OR exit('Tidak diperbolehkan untuk mengakses script secara langsung'); 
    class Input extends MY_Controller{
        //---constructor
        function __construct()
        {
            parent::__construct();
            
            $this->load->model('inputdata');            
            $this->load->helper(array('form', 'url'));  
            
           
        }
        //---constructor

        function laporan(){

            $datestring = '%d%m%Y%h%i%s';
            $time = time();

            $branch = $this->input->post('branch');
            $id =  mdate($datestring, $time);
            $todayDate = $this->input->post('todayDate');
            $error = $this->input->post('errorList');
            $solution = $this->input->post('solution');
            $pic = $this->input->post('pic');
            $description = $this->input->post('description');
            $effort = $this->input->post('effort');
            $state = $this->input->post('state');
            $target = $this->input->post('targetDate');
            
            if ($this->input->post('errorList')=='Other') {
                $error = $this->input->post('other');
                $data = array(  
                    'ID_laporan' => $id,
                    'tanggal' => $todayDate,
                    'eror' => $error,
                    'deskripsi' => $description,
                    'upaya' => $effort,
                    'solusi' => $solution,
                    'PIC' => $pic,
                    'target_date' => $target,
                    'status' => $state,
                    'kode_cabang' => $branch
                );
            }else{
            $data = array(  
                            'ID_laporan' => $id,
                            'tanggal' => $todayDate,
                            'eror' => $error,
                            'deskripsi' => $description,
                            'upaya' => $effort,
                            'solusi' => $solution,
                            'PIC' => $pic,
                            'target_date' => $target,
                            'status' => $state,
                            'kode_cabang' => $branch
                        );
            }
            $this->inputdata->input($data,'tb_laporan');
            redirect('cabang/zerodefect');
        }
        
    }//end Constructor
?>