<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_booking extends CI_Controller {
    
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->model('resort_model');
        $this->load->model('booking_model');
        
        $this->load->library('session');
    }

    public function index(){
        $data['resorts'] = $this->resort_model->get_resorts();
        $data['country'] =$this->resort_model->select('country');
        if($this->session->has_userdata('name')){
                $data['user']=$this->session->all_userdata();
        }else{   
        $data['user']=NULL;
        }
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/booking', $data);
        $this->load->view('templates/footer');

    }

    public function book(){
        $info = array(
            'resort_name' => $this->input->post('resort_name'),
            'num_adults' => $this->input->post('num_adults'),
            'num_rooms' => $this->input->post('num_rooms'),
            'num_child' => $this->input->post('e-num_child'),
            'check_in' => $this->input->post('check_in'),
            'check_out' => $this->input->post('check_out')
        );

        $error=$this->booking_model->save($info);
        
        
       if ($error!=NULL){
            $data['error']= array("message"=>"Failed book.  Error:  ".$error["message"]);
            $data['user']=NULL;

            $this->load->view('templates/header', $data);
            $this->load->view('pages/booking', $data);
            $this->load->view('templates/footer');
        }
        else{
           redirect("allski");
        }
    }

    
}
