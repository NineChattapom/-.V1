<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_controller extends CI_Controller {

    public function home() {
        $this->load->view('admin/homepage_email');
    }

    public function send() {
        $this->load->library('email');

        // ตั้งค่า SMTP
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 587,
            'smtp_user' => 'tigernine919@gmail.com',
            'smtp_pass' => 'lnex nduh ocjp sgwq',
            'smtp_crypto' => 'tls', // ⭐ สำคัญมาก
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        );
        
        $this->email->initialize($config);

        // รับข้อมูลจากฟอร์ม
        $to = $this->input->post('to');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        // ตั้งค่าอีเมล
        $this->email->from('your_email@gmail.com', 'ระบบจัดการนักศึกษา');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        // สร้างโฟลเดอร์ uploads ถ้ายังไม่มี
        if (!is_dir('./uploads')) {
            mkdir('./uploads', 0777, true);
        }

        // แนบไฟล์ถ้ามี
        if (!empty($_FILES['attachment']['name'])) {
            $config_upload['upload_path']   = './uploads/';
            $config_upload['allowed_types'] = 'pdf|jpg|png|jpeg';

            $this->load->library('upload');
            $this->upload->initialize($config_upload);

            if ($this->upload->do_upload('attachment')) {
                $data = $this->upload->data();
                $this->email->attach($data['full_path']);
            } else {
                // แสดงข้อผิดพลาดการอัปโหลด
                echo "❌ อัปโหลดไฟล์ล้มเหลว: <pre>" . $this->upload->display_errors() . "</pre>";
                return;
            }
        }

        // ส่งอีเมล
        if ($this->email->send()) {
            echo "✅ ส่งอีเมลสำเร็จ";
        } else {
            echo "❌ ส่งไม่สำเร็จ: <pre>" . $this->email->print_debugger() . "</pre>";
        }
    }
}
