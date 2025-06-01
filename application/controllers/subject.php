<?php
#[\AllowDynamicProperties] // ใช้ที่คลาสเท่านั้น
class Subject extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('subject_model');
    }

    public function maincheck()
    {
        $data = [
            'rsteacher' => $this->subject_model->queryTeacherDetail(),
            'rs' => $this->subject_model->queryListSubject(),
        ];


        $this->load->view('h_admin');
        $this->load->view('navbar_admin');

        $this->load->view('subject/subject_list', $data);
    }

    public function checkInForm($s_id)
    {
        $data['rsteacher'] = $this->subject_model->queryTeacherDetail();
        $data['rssubject'] = $this->subject_model->querySubjectDetail($s_id);

        // ตรวจสอบว่า subject มีข้อมูลหรือไม่
        if (empty($data['rssubject']->s_id)) {
            redirect('');
        }

        $data['rsStd'] = $this->subject_model->queryListStd($s_id);

        if (empty($data['rsStd'])) {
            redirect('');
        }


        $this->load->view('navbar_admin');
        $this->load->view('subject/std_list_view', $data);
    }

    public function saveCheckIn()
    {

        $s_id = $this->input->post('s_id', TRUE);
        $teacher_id = $this->input->post('teacher_id', TRUE);
        $currentDate = date('Y-m-d');


        $result = $this->subject_model->checkDuplicate($s_id, $teacher_id, $currentDate);

        if (!empty($result)) {

            $this->session->set_flashdata('warning_duplicate', TRUE);
            redirect('Subject', 'refresh');
        } else {

            $this->subject_model->saveCheckInToDB();
            $this->session->set_flashdata('save_success', TRUE);
            redirect('Subject/CheckIndetail/' . $s_id . '/' . $teacher_id . '/' . $currentDate, 'refresh');
        }
    }






    public function CheckIndetail($s_id, $teacher_id, $currentDate)
    { //open fun
        // echo $s_id;
        // echo '<hr>';
        // echo $teacher_id;
        // echo '<hr>';
        // echo $currentDate;

        $data['rsteacher'] = $this->subject_model->queryTeacherDetail();
        $data['rssubject'] = $this->subject_model->querySubjectDetail($s_id);

        if (empty($data['rssubject']->s_id)) {
            redirect('');
        } //if (empty($data['rssubject']->s_id))

        $data['rsStd'] = $this->subject_model->queryCheckInStd($s_id, $teacher_id, $currentDate);
        // echo '<pre>';
        // print_r($data['rsStd']);
        // echo'</pre>';
        // exit();



        if (empty($data['rsStd'])) {
            redirect('');
        } //if (empty($data['rsStd']))

        //$this->load->view('template/header');
        $this->load->view('navbar_admin');  // เมนูหลัก
        $this->load->view('subject/std_check_in_list_view', $data);
        //$this->load->view('template/footer');

    } //close fun 



    public function checkInHistory($s_id)
    {

        $data['rsdate'] = $this->subject_model->queryListdate($s_id);

        //  echo '<pre>';
        // print_r($data);
        // echo'</pre>';
        // exit();

        //$this->load->view('sidebar_admin');  
        $this->load->view('subject/subject_list_history', $data);
    }

    public function checketailBydate($check_in_date, $ref_s_id)
    { //open fun
        // echo $s_id;
        // echo '<hr>';
        // echo $teacher_id;
        // echo '<hr>';
        // echo $currentDate;


        $data['rssubject'] = $this->subject_model->querySubjectDetail($ref_s_id);

        if (empty($data['rssubject']->s_id)) {
            redirect('');
        } //if (empty($data['rssubject']->s_id))

        //คิวรี่ว่ามาหรือขาด
        $data['rsStd'] = $this->subject_model->queryHistoryCheckInStd($check_in_date, $ref_s_id);
        // echo '<pre>';
        // print_r($data['rsStd']);
        // echo'</pre>';
        // exit();

        if (empty($data['rsStd'])) {
            redirect('');
        } //if (empty($data['rsStd']))

        //คิวรี่วันที่
        $data['rsdate'] = $this->subject_model->queryDateCheckin($check_in_date, $ref_s_id);
        //  echo '<pre>';
        // print_r($data['rsdate']);
        // echo'</pre>';
        // exit();


        //$this->load->view('template/header');
      
        $this->load->view('subject/history_check_in_list_view', $data);
        //$this->load->view('template/footer');

    } //close fun 





}
