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
		$this->load->view('main_page');
	}

	public function register()
	{
		if ($this->input->post()) {

			$data['name'] = $this->input->post('name');
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			$data['email'] = $this->input->post('email');

			$id = $this->Wikipedia_model->registerAkun($data);

			if ($id){
				echo "Registrasi Berhasil";
				redirect('/');
			}
			else
				echo "Registrasi Gagal";
		}

		$this->load->view('register');
	}

	public function login()
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');

		$cek = $this->Wikipedia_model->cek_login("t_user",$data)->num_rows();

		if($cek > 0){
			$this->session->set_userdata($data);
		} else {
			echo "Username dan password salah !";
		}

		$this->load->view('login');
	}

	public function wiki($key=''){
		// data Dummy
		$data['title'] = "Lorem Ipsum";

		$this->load->view('v_wiki');
	}	
	
	public function wikiEdit($key=''){
		// data Dummy
		$data['title'] = "Lorem Ipsum";

		$this->load->view('v_edit');
	}
}
