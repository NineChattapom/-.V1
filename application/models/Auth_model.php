<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    public function get_user($username) {
        
        $this->db->where('username', $username);
        $query = $this->db->get('users');  

      
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;  
        }
    }
}


