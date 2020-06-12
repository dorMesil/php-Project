<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_findski extends CI_Controller {
    
    
    public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
                $this->load->model('resort_model');
                
                $this->load->library('session');
        }

	
	public function index()
	{
                if($this->session->has_userdata('name')){
                        $data['user']=$this->session->all_userdata();
                }else{   
                        $data['user']=NULL;
                }
                $data['resorts'] = $this->resort_model->get_resorts();
                $data['country'] =$this->resort_model->select('country');
                        
        
                $this->load->view('templates/header' , $data);
                $this->load->view('pages/findski', $data);
                $this->load->view('templates/footer');
	}
       
        
}