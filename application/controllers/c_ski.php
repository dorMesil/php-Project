<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class c_ski extends CI_Controller {
    
    
    public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
                $this->load->library('session');
        }

	
	public function index()
	{
                
                
                if($this->session->has_userdata('name')){
                        $data['user']=$this->session->all_userdata();
                }else{   
                $data['user']=NULL;
                }
                
                $this->load->view('templates/header', $data);
                $this->load->view('pages/ski');
                $this->load->view('templates/footer');
        }
        

}

