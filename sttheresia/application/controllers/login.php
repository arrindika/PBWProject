<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('login_model');

	}

	function index(){
		$this->load->view('admin/login');
	}

	function aksi_login($msg = NULL){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => sha1($password)
			);
		$cek = $this->login_model->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin/home"));

		}elseif($username == null && $password != null){
			echo "<script>alert('Field Username harus terisi');</script>";
			$this->load->view('admin/login');

		}elseif($username != null && $password == null) {
			echo "<script>alert('Field Password harus terisi');</script>";
			$this->load->view('admin/login');

		}else{
			echo "<script>alert('Username / Password tidak valid, harap cek kembali');</script>";
			$this->load->view('admin/login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
