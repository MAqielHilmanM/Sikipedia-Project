<?php

class Wikipedia extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Wikipedia_model');
	}

	public function index()
	{
		$this->load->view('v_landing');
	}

	public function register()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('c_password','Confirm password','required|matches[password]');


		if ($this->form_validation->run() === TRUE) {
			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));
			$data['email'] = $this->input->post('email');

			$id = $this->Wikipedia_model->registerAkun($data);
			if ($id){
				$this->session->set_flashdata('pesan','Registrasi Berhasil!');
				redirect('/');
			}
			else
				$this->session->set_flashdata('pesan','Registrasi Gagal!');
		}

		$this->load->view('v_register');
	}

	public function login()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run() === TRUE){
			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));

			$cek = $this->Wikipedia_model->cek_login("t_user",$data)->num_rows();

			if($cek > 0){
				$this->session->set_userdata($data);
				redirect('/');
			}
		}

		$this->load->view('v_login');
	}

}
