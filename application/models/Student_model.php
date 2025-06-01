<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student_model extends CI_Model
{



    public function showdata_person()
    {

        $query = $this->db->get('person_student');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return [];
        }
    }

    public function addmember_person($data)
    {
        if ($this->db->insert('person_student', $data)) {
            return true;
        } else {
            log_message('error', 'Error inserting data: ' . $this->db->error()['message']); // Log error
            return false;
        }
    }
}
