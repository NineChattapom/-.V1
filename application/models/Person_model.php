<?php
class Person_model extends CI_Model {
    
    public function get_person_by_id($id) {
        $this->db->where('person_id', $id);
        $query = $this->db->get('person_student');  // ดึงข้อมูลจากตาราง person_student
        return $query->row();  // ส่งข้อมูลกลับไป
    }
}
