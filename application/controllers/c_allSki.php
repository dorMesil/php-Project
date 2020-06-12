<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_allski extends CI_Controller {
    
    
    public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
                $this->load->model('resort_model');
                
                $this->load->library('session');
        }

	
	public function index()
	{
                $data = array();

                if($this->session->has_userdata('name')){
                        $data['user']=$this->session->all_userdata();
                        $par = $data['user']['partner'];
                        $data['resorts'] = $this->resort_model->get__where($par ,'1');
                        // $data['resorts'] = $this->resort_model->get_resorts_where($par , NULL);
                        $resorts = $this->resort_model->get__where($par , NULL);
                        foreach($resorts as $resort){
                                array_push($data['resorts'], $resort);
                        }
                        

                }else{   
                        $data['user']=NULL;
                        
                        $data['resorts'] = $this->resort_model->get_resorts();
                }
                
                $data['country'] =$this->resort_model->select('country');
                
                
                $this->load->view('templates/header', $data);
                $this->load->view('pages/allski', $data);
                $this->load->view('templates/footer');
        }
        

        public function rate($user){

                $data['resorts'] = $this->resort_model->get_resorts();
                $data['user']=$this->session->all_userdata();

                foreach ($data['rasorts'] as $key => $value) {
                        $rating = 0;
                        


                
                }
                


        }
       
        
}