<?php
defined('BASEPATH') or exit('No direct script access allowed');
class subject_model extends CI_Model
{

        public function queryListSubject()
        {
                $this->db->select('s.*, COUNT(ref_std_id) AS totalstd');
                $this->db->from('tbl_subject  as s');
                $this->db->join('tbl_enroll as e', 's.s_id=e.ref_s_id', 'left');
                $this->db->group_by('s.s_id');
                $query = $this->db->get();
                return $query->result();
        }

        public function queryListStd($s_id)
        {
                $this->db->select('s.*');
                $this->db->from('tbl_std  as s');
                $this->db->join('tbl_enroll as e', 's.std_id=e.ref_std_id');
                $this->db->where('e.ref_s_id', $s_id);
                $query = $this->db->get();
                return $query->result();
        }

        public function querySubjectDetail($s_id)
        {
                $this->db->select('s.*, t.teacher_name');
                $this->db->from('tbl_subject AS s');
                $this->db->join('tbl_teacher AS t', 't.teacher_id=s.ref_teacher_id');
                $this->db->where('s.s_id', $s_id);
                $rs = $this->db->get();
                if ($rs->num_rows() > 0) {
                        $data = $rs->row();
                        return $data;
                }
                return FALSE;
        }

        public function queryTeacherDetail()
        {
                $this->db->where('teacher_id', 1);
                $rs = $this->db->get('tbl_teacher');
                if ($rs->num_rows() > 0) {
                        $data = $rs->row();
                        return $data;
                }
                return FALSE;
        }


        public function checkDuplicate($s_id, $teacher_id, $currentDate)
        {
                $this->db->where('ref_s_id', $s_id);
                $this->db->where('ref_teacher_id', $teacher_id);
                $this->db->where('check_in_date', $currentDate);
                $query = $this->db->get('tbl_checkin');
                return $query->row();
        }



        public function saveCheckInToDB()
        {
              
                $std_id = $this->input->post('std_id'); 

                foreach ($std_id as $ref_std_id => $check_in_status) {

                        $ref_teacher_id = $this->input->post('teacher_id');
                        $ref_s_id = $this->input->post('s_id');

                        $data = array(
                                array(
                                        'ref_std_id' => $ref_std_id, 
                                        'check_in_status' => $check_in_status, 
                                        'ref_s_id' => $ref_s_id, 
                                        'ref_teacher_id' => $ref_teacher_id,  
                                        'check_in_date' => date('Y-m-d') 
                                )
                        );
                        $this->db->insert_batch('tbl_checkin', $data);
                } 
        } 

        public function queryCheckInStd($s_id, $teacher_id, $currentDate)
        {
                $this->db->select('s.*, i.check_in_status, i.no');
                $this->db->from('tbl_std  as s');
                $this->db->join('tbl_enroll as e', 's.std_id=e.ref_std_id');
                $this->db->join('tbl_checkin as i', 's.std_id=i.ref_std_id');
                $this->db->where('i.ref_s_id', $s_id); 
                $this->db->where('i.ref_teacher_id', $teacher_id);
                $this->db->where('i.check_in_date', $currentDate);
                $this->db->group_by('i.ref_std_id');
                $query = $this->db->get();
                return $query->result();
        }
       
        public function queryHistoryCheckInStd($check_in_date, $ref_s_id)
        {
                $this->db->select('s.*, i.check_in_status, i.no');
                $this->db->from('tbl_std  as s');
                $this->db->join('tbl_enroll as e', 's.std_id=e.ref_std_id');
                $this->db->join('tbl_checkin as i', 's.std_id=i.ref_std_id');
                $this->db->where('i.ref_s_id', $ref_s_id); 
             
                $this->db->where('i.check_in_date', $check_in_date);
                $this->db->group_by('i.ref_std_id');
                $query = $this->db->get();
                return $query->result();
        }


        public function insert_std()
        {
                $data = array(
                        'std_code' => $this->input->post('std_code'),
                        'std_name' => $this->input->post('std_name'),
                        'std_phone' => $this->input->post('std_phone'),
                        'std_email' => $this->input->post('std_email')
                );
                $query = $this->db->insert('tbl_std', $data);

                $insert_id = $this->db->insert_id();

                $dataInsertEnroll = array(
                        'ref_s_id' => $this->input->post('s_id'),
                        'ref_std_id' => $insert_id
                );
                $query = $this->db->insert('tbl_enroll', $dataInsertEnroll);
        }
     

        public function queryListdate($s_id)
        {

                $this->db->select('check_in_date, ref_s_id');
                $this->db->where('ref_s_id', $s_id);
                $this->db->group_by('check_in_date');
                $query = $this->db->get('tbl_checkin');
                return $query->result();
        }

      
        public function queryDateCheckin($check_in_date, $ref_s_id)
        {
                $this->db->select('check_in_date');
                $this->db->where('check_in_date', $check_in_date);
                $this->db->where('ref_s_id', $ref_s_id);
                $rs = $this->db->get('tbl_checkin');
                if ($rs->num_rows() > 0) {
                        $data = $rs->row();
                        return $data;
                }
                return FALSE;
        }
}
