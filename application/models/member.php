<?php
class Member extends CI_Model {
    
   
    public function showdata()
    {
            $query = $this->db->get('m_std');
            return $query->result();
    }
   
    public function showdata2()
    {
        $this->db->select('m.*,p.*');
        $this->db->from('m_std as m');
        $this->db->join('position as p','m.pid=p.pid');
        $query = $this->db->get();
            return $query->result();
    }
    public function addmember()
    {
        $data = array(
            'ar_name'=>  $this->input->post('ar_name'),
            'ar_class'=>  $this->input->post('ar_class'),
            'pid'=>  $this->input->post('pid'),
            'ar_department'=>  $this->input->post('ar_department')
            
        );

        $query=$this->db->insert('m_std',$data);

    }
    public function addSubject()
    {
        $data = array(
            's_name'=>  $this->input->post('s_name'),
            'ref_teacher_id' => 1
            
            
        );

        $query=$this->db->insert('tbl_subject',$data);

    }
    public function addmember_person()
    {
        $data = array(
            'ar_name'=>  $this->input->post('ar_name'),
            'ar_class'=>  $this->input->post('ar_class'),
            'ar_status'=>  $this->input->post('ar_status'),
            'ar_department'=>  $this->input->post('ar_department')
            
        );

        $query=$this->db->insert('m_std',$data);

    }
    public function deletedata($ar_id)
    {
        $this->db->where('ar_id', $ar_id);
        $this->db->delete('m_std');
    }
    public function deleteSubject($s_id)
    {
        $this->db->where('s_id', $s_id);
        $this->db->delete('tbl_subject');
    }
    public function editmember()
    {
        $data = array(
            'ar_name'=>  $this->input->post('ar_name'),
            'ar_class'=>  $this->input->post('ar_class'),
            'pid'=>  $this->input->post('pid'),
            'ar_department'=>  $this->input->post('ar_department')
        );
        $this->db->where('ar_id',$this->input->post('ar_id'));
        $query=$this->db->update('m_std',$data);
    }
    public function read($ar_id)
    {
            $this->db->select('*');
            $this->db->from('m_std');
            $this->db->where('ar_id',$ar_id);
            $query = $this->db->get();
            if($query->num_rows()>0){
                $data = $query->row();
                return $data;
            }
            return false;
    }
    public function count_students()
{
    return $this->db->count_all('m_std'); // นับแถวทั้งหมดในตารางนักศึกษา
}
}
