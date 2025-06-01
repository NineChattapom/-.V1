<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        $user = $this->Auth_model->get_user($username);

        // ตรวจสอบว่าผู้ใช้มีอยู่ในระบบหรือไม่ และตรวจสอบรหัสผ่าน
        if ($user && $password === $user['password']) {

            $this->session->set_userdata([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role']
            ]);


            if ($user['role'] === 'admin') {
                redirect('admin');
            } else {
                redirect('user');
            }
        } else {

            $this->session->set_flashdata('error', 'Invalid username or password');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
