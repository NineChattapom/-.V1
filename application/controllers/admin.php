<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // ตรวจสอบว่า user มี role เป็น 'admin' หรือไม่
        if ($this->session->userdata('role') !== 'admin') {
            redirect('auth');
        }

        $this->load->model('member');
    }

    public function index()
    {
        $this->load->model('member');
        $data['student_count'] = $this->member->count_students(); // ฟังก์ชันที่เพิ่มไปก่อนหน้านี้
    
        $this->load->view('h_admin');
        $this->load->view('navbar_admin');
        $this->load->view('sidebar_admin');
        $this->load->view('admin/main_content', $data); // ส่งตัวแปรไปที่ view นี้
        $this->load->view('footer');
    }
    
    public function spin_random()
    {

        $this->load->view('h_admin');
        $this->load->view('navbar_admin');
        $this->load->view('sidebar_admin');
        $this->load->view('admin/spin');
        $this->load->view('footer');
    }


    public function admin_table()
    {

        $data['query'] = $this->member->showdata2();


        $this->load->view('h_admin');
        $this->load->view('navbar_admin');
        $this->load->view('sidebar_admin');
        $this->load->view('admin/admin_from_list', $data);
        $this->load->view('footer');
    }
    public function admin_table_insert()
    {

        $this->load->view('h_admin');
        $this->load->view('navbar_admin');
        $this->load->view('sidebar_admin');
        $this->load->view('admin/admin_from_add');
        $this->load->view('footer');
    }

    public function adding()
    {
        $this->member->addmember();
        redirect('admin_table', 'refresh');
    }
    public function editdata()
    {
        $this->member->editmember();
        redirect('admin_table', 'refresh');
    }

    public function calendar()
    {
        $this->load->view('h_admin');
        $this->load->view('navbar_admin');
        $this->load->view('sidebar_admin');
        $this->load->view('admin/calendar');
    }
    public function delete($ar_id)
    {
        $this->member->deletedata($ar_id);
        redirect('admin_table', 'refresh');
    }
    public function deleteSubject($s_id)
    {
        $this->member->deleteSubject($s_id);
        redirect('subject/maincheck', 'refresh');
    }
    public function admin_edit($ar_id)
    {
        $data['rsedit'] = $this->member->read($ar_id);
        if (!$data['rsedit']) {
            show_404();
        }



        $this->load->view('navbar_admin');
        //$this->load->view('sidebar_admin');
        $this->load->view('admin/admin_from_edit', $data);
        $this->load->view('footer');
    }

    public function count()
    {

        $this->load->database();

        $student_count = $this->db->count_all('m_std');

        $data['student_count'] = $student_count;

        $this->load->view('h_admin');
        $this->load->view('navbar_admin');
        $this->load->view('sidebar_admin');
        $this->load->view('admin/main_content', $data);
        $this->load->view('footer');
    }

    public function addSubjectForm()
    {

        $this->load->view('admin/admin_from_add_subject');
        $this->load->view('footer');
    }
   
    public function addingSubject()
    {
        $this->member->addSubject();
        redirect('subject/maincheck', 'refresh');
    }



    public function admin_person($id)
    {
    $this->load->model('Person_model');  // โหลดโมเดล
    $data['person'] = $this->Person_model->get_person_by_id($id);  // ดึงข้อมูลจากโมเดล
    $this->load->view('admin/admin_person_view', $data);  // ส่งข้อมูลไปยัง View
    }
}




