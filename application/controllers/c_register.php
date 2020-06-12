<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_register extends CI_Controller {
    
    
    public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
                $this->load->model('users_model');
                $this->load->helper('form');
                $this->load->library('session');
        }


        public function index(){
            $data['user']=NULL;
            $data['error']= NULL;
            $this->load->view('templates/header', $data);
            $this->load->view('pages/register', $data);
            $this->load->view('templates/footer');


        }
}