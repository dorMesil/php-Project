<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_login  extends CI_Controller {
    //put your code here
     public function __construct()
        {
                parent::__construct();
                $this->load->model('users_model');
                $this->load->helper('url_helper');
                $this->load->helper('form');
                $this->load->library('session');
        }
            
        public function login()
        {
                
            $data['title'] = 'Sign In';
            $data['error'] = NULL;
            $data['user']=NULL;
            $this->load->view('templates/header', $data);
            $this->load->view('pages/login', $data);
            $this->load->view('templates/footer');

 
    
                         
        }
        public function auth(){

            $info = array(
               'mail' => $this->input->post('e-mail'),
               'password' => md5($this->input->post('password')));

            $check=$this->users_model->auth($info);

           if ($check==false){
                $data['error']= "User is not found";
                $data['title'] = 'Sign In';
                $data['mail'] = NULL;
                $data['user']=NULL;
                $this->load->view('templates/header', $data);
                $this->load->view('pages/login', $data);
                $this->load->view('templates/footer');
            }
            else{    
               
                $this->session->set_userdata($check); 
                
                redirect("ski");
            }

            
        }
        public function logout()
        {
              
             session_destroy();
             redirect("ski");
                         
        }
        public function register(){
            $user_info = array ( 
                
                'mail' => $this->input->post('e-mail'),
                'id' => $this->input->post('id'),

            );
            if($this->users_model->find_match($user_info)){
                $data['error'] = 'existing user';
                $data['user']=NULL;
                $data['title'] = 'Register';
                $this->load->view('templates/header', $data);
                $this->load->view('pages/register', $data);
                $this->load->view('templates/footer');
            }else{
            
            $info = array(
                'mail' => $this->input->post('e-mail'),
                'id' => $this->input->post('id'),
                'password' => md5($this->input->post('password')),
                'name' => $this->input->post('fname'),
                'last_name' => $this->input->post('lname'),
                'BOD' => $this->input->post('BOD'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'partner' => $this->input->post('partner'),
                'family_status' => $this->input->post('family_status'),
            );


            $error=$this->users_model->save($info);
            
            
           if ($error!=NULL){
                $data['error']= array("message"=>"Failed to register new user.  Error:  ".$error["message"]);
                $data['user']=NULL;
                $data['title'] = 'Register';
                $this->load->view('templates/header', $data);
                $this->load->view('pages/register', $data);
                $this->load->view('templates/footer');
            }
            else{
                $error = NULL;
               redirect("login");
            }
        }
        }
}
