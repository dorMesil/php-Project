<?php

class resort_model extends CI_Model {
    //put your code here
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function get_resorts(){
        $query = $this->db->get('resorts');
        return $query->result_array();
           
    }
    
    public function get_resorts_where($where){
        $query = $this->db->get_where('resorts', $where);
        return $query->result_array();
    }
    public function get__where($where, $par){
        $query = $this->db->where($where, $par);
        $query = $this->db->get('resorts');
        return $query->result_array();
    }
    

    public function select($select){
        
        $this->db->select($select);
        $query = $this->db->get('resorts');
        return $query->result_array();
    }
}

