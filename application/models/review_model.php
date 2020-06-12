<?php

class review_model extends CI_Model {
    //put your code here
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function get_review(){
        $query = $this->db->get('review');
        return $query->result_array();
           
    }
    public function get_review_where($where){
        $query = $this->db->get_where('review',$where);
        return $query->result_array();
    }
    public function select($select){
        
        $this->db->select($select);
        $query = $this->db->get('review');
        return $query->result_array();
    }

    public function save($data){
        

        $error=NULL;
         if (!$this->db->insert('review', $data)){
             $error=$this->db->error();
         }
 
         return $error;
       }
}

