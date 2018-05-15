<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index($msg = NULL){
        $data['msg'] = $msg;
		$this->load->view('login_admin',$data);
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->login_model->cek_login("admin",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin/home"));

		}else{
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
