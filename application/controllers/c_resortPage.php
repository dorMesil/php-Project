<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_resortPage extends CI_Controller {
    
    
    public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
                $this->load->model('resort_model');
                $this->load->model('review_model');
                $this->load->model('users_model');
                $this->load->helper('form');
                $this->load->library('session');
        }

	
        public function index()
	{
               
                $parameter = $this->input->get();
                
                $data['review'] = $this->review_model->get_review_where($parameter);
                $data['resort'] = $this->resort_model->get_resorts_where($parameter);
                if($this->session->has_userdata('name')){
                        $data['user']=$this->session->all_userdata();
                }else{   
                        $data['user']=NULL;
                }
        
                $this->load->view('templates/header', $data);
                $this->load->view('pages/resortPage', $data);
                $this->load->view('templates/footer');
        }

        public function add_review(){

                $data = array();
                if($this->session->has_userdata('name')){
                        $data['user']=$this->session->all_userdata();
                        $info = array(
                                'review' => $this->input->post('review'),
                                'rate' => $this->input->post('rate'),
                                'user_name' => $data['user']['name']." ".$data['user']['last_name'],
                                'user_id' => $data['user']['id'],
                                'name' => $this->input->post('resort_name') );
        

                }else{   
                        $info = array(
                                'review' => $this->input->post('review'),
                                'rate' => $this->input->post('rate'),
                                'user_name' => 'guest',
                                'user_id' => 'unknown',
                                'name' => $this->input->post('resort_name') );
        
                        

                }
                
                        
                $error=$this->review_model->save($info);
                
              
                       redirect("allski");
                    

        }



}