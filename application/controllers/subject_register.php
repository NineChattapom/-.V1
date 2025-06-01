<?php
#[\AllowDynamicProperties] // ใช้ที่คลาสเท่านั้น
class subject_register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // เรียกใช้ model หรือส่วนของการจัดการฐานข้อมูล
        $this->load->model('subject_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['rs'] = $this->subject_model->queryListSubject();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;



        $this->load->view('subject_list_register', $data);
    }

    public function detail($s_id)
    {

        $data['rssubject'] = $this->subject_model->querySubjectDetail($s_id);

        // ตรวจสอบว่า subject มีข้อมูลหรือไม่
        if (empty($data['rssubject']->s_id)) {
            redirect('');
        }

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;


        $this->load->view('user/event_form', $data);
    }
    public function register()
    {
        // echo'<pre>';
        // print_r($_POST);
        // echo'</pre>';
        // exit;

        // // ตรวจสอบข้อมูลจากฟอร์ม

        $this->subject_model->insert_std();
        redirect('subject_register/index', 'refresh');
    }
}
