<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Student_model');

		if ($this->session->userdata('role') !== 'user') {
			redirect('auth');
		}
	}
	public function index()
	{

		$this->load->view('user/home');
	}

	public function prefer()
	{
		$this->load->view('navbar');
		$this->load->view('user/prefer');
	}
	public function deferment()
	{
		$this->load->view('navbar');
		$this->load->view('user/deferment');
	}
	public function gallery()
	{
		$this->load->view('user/gallery');
	}
	public function userprofile()
	{
		//$this->load->view('h_admin');
		$this->load->view('navbar');
		$this->load->view('user/userprofile');
	}
	public function from_sign()
	{
		// $this->load->view('h_admin');
		$this->load->view('navbar');
		$this->load->view('user/from_sign');
	}
	public function event_form()
	{
		// $this->load->view('h_admin');
		$this->load->view('navbar');
		$this->load->view('user/event_form');
	}


	public function adding_person()
	{



		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size'] = 5120;
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('person_picture')) {

			echo $this->upload->display_errors();
			$picturePath = NULL;
		} else {

			$uploadData = $this->upload->data();
			$picturePath = 'uploads/' . $uploadData['file_name'];
		}


		$data = array(
			'person_name' => $this->input->post('person_name'),
			'person_card' => $this->input->post('person_card'),
			'person_blood' => $this->input->post('person_blood'),
			'person_gender' => $this->input->post('person_gender'),
			'person_level' => $this->input->post('person_level'),
			'person_department' => $this->input->post('person_department'),
			'person_email' => $this->input->post('person_email'),
			'person_phone' => $this->input->post('person_phone'),
			'person_date' => $this->input->post('person_date'),
			'person_picture_path' => $picturePath
		);

		if ($this->Student_model->addmember_person($data)) {
			redirect('profile');
		} else {
			echo "Error adding person!";
		}
	}




	public function profile()
	{
		$data['query'] = $this->Student_model->showdata_person();


		if (empty($data['query'])) {
			echo "ไม่มีข้อมูล";
		} else {
			$this->load->view('user/userprofile_view', $data);
		}
	}
}
