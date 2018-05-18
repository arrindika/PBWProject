<?php

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->helper(array('form', 'url'));
	}
	//
	// function index(){
	// 	$this->load->view('pages/home');
	// }
	// public function index(){
	// 	$this->load->model('event_model');
	// 	$this->load->model('news_model');
	// 	$this->load->model('teacher_model');
	// 	$this->load->view('admin/index');
	// 	// if(logged_in())
	// 	// 	{
	// 	// 		$this->load->model('event_model');
	// 	// 		$this->load->model('news_model');
	// 	// 		$this->load->model('teacher_model');
	// 	// 		$this->load->view('admin/index');
	// 	// 	}
	// 	// else
	// 	// 	{
	// 	// 		$this->load->view('login_admin');
	// 	// 	}
	// }
	function index(){
		$this->session->sess_destroy();
		redirect(base_url("login"));
	}
	//page events
	public function event(){
		$this->load->model('event_model');
		$editID = $this->event_model->input->post('edit-id');
		if($editID!==NULL){
			$data['eventEdit'] = $this->event_model->select_events_where_id($editID)[0];
		}

		$data['events'] = $this->event_model->select_events();
		$this->load->view('admin/event', $data);
	}
	public function delete(){
		$this->load->model('event_model');
		$deleteID = $this->event_model->input->post('edit-id');
		if($deleteID!==NULL){
			$this->event_model->delete_event_where_id($deleteID);
		}
		$data['events'] = $this->event_model->select_events();
		
		$this->load->view('admin/event', $data);
	}
	public function submitevent(){
		$this->load->model('event_model');
		$eventTitle = $this->event_model->input->post('eventTitle');
		$eventBody = $this->event_model->input->post('eventBody');
		$eventDate = $this->event_model->input->post('eventDate');
		$eventTime = $this->event_model->input->post('eventTime');
		$eventLocation = $this->event_model->input->post('eventLocation');
		$this->event_model->insert_event($eventTitle,$eventBody,$eventDate,$eventTime,$eventLocation);
		
		redirect(base_url().'admin/event');
	}
	public function editevent()
	{
		$this->load->model('event_model');
		$id = $this->event_model->input->post('id');
		$eventTitle = $this->event_model->input->post('eventTitle');
		$eventBody = $this->event_model->input->post('eventBody');
		$eventDate = $this->event_model->input->post('eventDate');
		$eventTime = $this->event_model->input->post('eventTime');
		$eventLocation = $this->event_model->input->post('eventLocation');
		$this->event_model->update_event_where_id($id,$eventTitle,$eventBody,$eventDate,$eventTime,$eventLocation);
		
		redirect(base_url().'admin/event');
	}


	public function home(){
		$this->load->view('admin/index');
	}

	//page News
	public function news(){
		$this->load->model('news_model');
		$editID = $this->news_model->input->post('edit-id');
		if($editID!==NULL){
			$data['newsEdit'] = $this->news_model->select_news_where_id($editID)[0];
		}
		$data['newsdata'] = $this->news_model->select_news();
		$this->load->view('admin/news', $data);
	}
	public function deleteNews(){
		$this->load->model('news_model');
		$deleteID = $this->news_model->input->post('edit-id');
		if($deleteID!==NULL){
			$this->news_model->delete_news_where_id($deleteID);
		}
		$data['newsdata'] = $this->news_model->select_news();
		
		$this->load->view('admin/news', $data);
	}
	public function submitnews(){
		$this->load->model('news_model');
		$newsTitle = $this->news_model->input->post('newsTitle');
		$newsBody = $this->news_model->input->post('newsBody');
		$newsDate = $this->news_model->input->post('newsDate');
		$newsAuthor = $this->news_model->input->post('newsAuthor');
		$this->news_model->insert_news($newsTitle,$newsBody,$newsDate,$newsAuthor);
		
		redirect(base_url().'admin/news');
	}
	public function editnews()
	{
		$this->load->model('news_model');
		$id = $this->news_model->input->post('id');
		$newsTitle = $this->news_model->input->post('newsTitle');
		$newsBody = $this->news_model->input->post('newsBody');
		$newsDate = $this->news_model->input->post('newsDate');
		$newsAuthor = $this->news_model->input->post('newsAuthor');
		$this->news_model->update_news_where_id($id,$newsTitle,$newsBody,$newsDate,$newsAuthor);
		
		redirect(base_url().'admin/news');
	}




	//page Teachers
	public function teachers(){
		$this->load->model('teacher_model');
		$editID = $this->teacher_model->input->post('edit-id');
		if($editID!==NULL){
			$data['dataguruEdit'] = $this->teacher_model->select_dataguru_where_id($editID)[0];
		}
		$data['teachersdata'] = $this->teacher_model->select_dataguru();
		$this->load->view('admin/teachers', $data);
	}
	public function deleteDataGuru(){
		$this->load->model('teacher_model');
		$deleteID = $this->teacher_model->input->post('edit-id');
		if($deleteID!==NULL){
			$this->teacher_model->delete_dataguru_where_id($deleteID);
		}
		$data['teachersdata'] = $this->teacher_model->select_dataguru();
		
		$this->load->view('admin/teachers', $data);
	}
	public function submitDataGuru(){
		$this->load->model('teacher_model');

		$nama = $this->teacher_model->input->post('nama');
		$nip = $this->teacher_model->input->post('nip');
		$tanggal_lahir = $this->teacher_model->input->post('tanggal_lahir');
		$jenis_kelamin = $this->teacher_model->input->post('jenis_kelamin');
		$pendidikan_ijazah = $this->teacher_model->input->post('pendidikan_ijazah');
		$pendidikan_tahun = $this->teacher_model->input->post('pendidikan_tahun');
		$pendidikan_tingkat = $this->teacher_model->input->post('pendidikan_tingkat');
		$pendidikan_jurusan = $this->teacher_model->input->post('pendidikan_jurusan');
		$mulai_kerja = $this->teacher_model->input->post('mulai_kerja');
		$this->teacher_model->insert_dataguru($nama,$nip,$tanggal_lahir,$jenis_kelamin,$pendidikan_ijazah,$pendidikan_tahun,$pendidikan_tingkat,$pendidikan_jurusan,$mulai_kerja);
		redirect(base_url().'admin/teachers');
	}
	public function editDataGuru()
	{
		$this->load->model('teacher_model');
		$id = $this->teacher_model->input->post('id');
		$nama = $this->teacher_model->input->post('nama');
		$nip = $this->teacher_model->input->post('nip');
		$tanggal_lahir = $this->teacher_model->input->post('tanggal_lahir');
		$jenis_kelamin = $this->teacher_model->input->post('jenis_kelamin');
		$pendidikan_ijazah = $this->teacher_model->input->post('pendidikan_ijazah');
		$pendidikan_tahun = $this->teacher_model->input->post('pendidikan_tahun');
		$pendidikan_tingkat = $this->teacher_model->input->post('pendidikan_tingkat');
		$pendidikan_jurusan = $this->teacher_model->input->post('pendidikan_jurusan');
		$mulai_kerja = $this->teacher_model->input->post('mulai_kerja');
		$this->teacher_model->update_dataguru_where_id($id,$nama,$nip,$tanggal_lahir,$jenis_kelamin,$pendidikan_ijazah,$pendidikan_tahun,$pendidikan_tingkat,$pendidikan_jurusan,$mulai_kerja);
		
		redirect(base_url().'admin/teachers');
	}


	//page Gallery
	public function gallery()
	{
		$data["error"] = "";
		$this->load->view('admin/gallery', $data);;
	}

	public function uploadPicture(){
		// $this->load->helper(array('form', 'url'));
		// $config['upload_path']          = './assets/images/galeri/';
		// $config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 1000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		//
		// $this->load->library('upload', $config);
		// $this->upload->initialize($config);
		// if ( ! $this->upload->do_upload('berkas')){
		// 	$data['error'] = $this->upload->display_errors();
		// 	$this->load->view('admin/gallery', $data);
		// }else{
		// 	$data['upload_data'] = $this->upload->data();
		// 	$data["error"] = "";
		// 	$this->load->view('admin/gallery', $data);
		// }
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] = 'Upload New Picture';
		$this->form_validation->set_rules('namaFoto', 'NamaFoto', 'required');
		if ($this->form_validation->run() === FALSE){
		    $this->load->view('admin/gallery');
		}else{
		    // Upload the files then pass data to your model
			$config['upload_path']          = './assets/images/galeri/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			$config['max_size']             = 1000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;
	        $this->load->library('upload', $config);

			$this->upload->initialize($config);
		    if (! $this->upload->do_upload('picture')){
		        // If the upload fails
		        echo $this->upload->display_errors('<p>', '</p>');
		    }else{
		        // Pass the full path and post data to the set_newstudent model
				$this->load->model('gallery_model');
		        $this->gallery_model->store_pic_data($this->upload->data('file_name'),$this->upload->data('full_path'),$this->input->post());
		        $this->load->view('admin/gallery');
		    }
		}
	}
}
?>
