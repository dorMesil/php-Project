<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_resultPage extends CI_Controller {
    
    
    public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
                $this->load->model('resort_model');
                
                $this->load->library('session');
        }

        public function search()
	{
            if($this->session->has_userdata('name')){
                    $data['user']=$this->session->all_userdata();
            }else{   
            $data['user']=NULL;
            }
            $parameter = $this->input->get();
            if($parameter['country'] == 'select country'){
                unset($parameter['country']);
            }
            if($parameter['name'] == ''){
                unset($parameter['name']);
            }
            $data['resorts'] = $this->resort_model->get_resorts_where($parameter);
            $data['country'] =$this->resort_model->select('country');
            $data['parameter'] = $parameter;
                
            $this->load->view('templates/header', $data);
            $this->load->view('pages/resultPage', $data);
            $this->load->view('templates/footer');
	}
        
}

