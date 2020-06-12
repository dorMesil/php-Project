  <?php

class users_model extends CI_Model {
    //put your code here
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function auth($data)
      {
            $query = $this->db->get_where('user', $data);
            if($query){   
              return $query->row_array();
        }
        return false;
           
      }

/*      public function count_partner($parameter){
        $this->db->select('partner');
        $this->db->where($parameter);
        $query = $this->db->get('user');
        return count($query->result_array());
      }*/
        public function count_partner($parameter){
        $query = $this->db->where('partner',$parameter);
        $query = $this->db->get('user');
        return count($query->result_array());
    }
        public function count_family_status($parameter){
        $query = $this->db->where('family_status',$parameter);
        $query = $this->db->get('user');
        return count($query->result_array());
    }

    public function get_users(){
        $query = $this->db->get('user');
        return $query->result_array();
           
    }
      public function find_match($parameter){

        $query = $this->db->where($parameter);

        if($query->num_rows>0)
          return TRUE;
        else
          return FALSE;


      }
      public function get_users_name_where($parameter){
        
        $this->db->select('name, last_name');
        $this->db->where($parameter);
        $query = $this->db->get('user');
        return $query->result_array();
           
    }
      public function save($data){
        

       $error=NULL;
        if (!$this->db->insert('user', $data)){
            $error=$this->db->error();
        }

        return $error;
      }

  
}

