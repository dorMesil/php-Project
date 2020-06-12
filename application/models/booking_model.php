<?php

class booking_model extends CI_Model {
    //put your code here
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function get_booking(){
        $query = $this->db->get('booking');
        return $query->result_array();
           
    }
    
    public function get_booking_where($where, $par){
        $query = $this->db->where($where ,$par);
        $query = $this->db->get('booking');
        return $query->result_array();
    }
    public function save($data){
        

        $error=NULL;
         if (!$this->db->insert('booking', $data)){
             $error=$this->db->error();
         }
 
         return $error;
       }
    

    public function select($select){
        
        $this->db->select($select);
        $query = $this->db->get('booking');
        return $query->result_array();
    }
}

