<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class elearning extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct() {
        parent::__construct();
        $this->load->model('Elearning_view');
        $this->load->model('Elearning_pelajaran');
    }
	public function index()
	{
        if (isset($_POST['submit'])){
            $idpengguna = $this->input->post('noinduk');
            $passpengguna = $this->input->post('password');
            $hasil = $this->Elearning_view->login($idpengguna,$passpengguna);
            if($hasil==1){
                $this->session->set_userdata(array('statis_login'=>'oke'));
                redirect('elearning/home');
            }
            else{
                redirect('elearning');
            }
        }
        else{
		    $this->load->view('elearning/login'); 
        }
	}
    function logout(){
        $this->session->sess_destroy();
        redirect('elearning');
    }
    function home() {
        $data['materi'] = $this->Elearning_pelajaran->materi();
        $this->load->view('elearning/home', $data); 
    }
    public function materi($id_matpel) {
        $mat['mat'] = $this->Elearning_pelajaran->dapet("where b.id_matpel = '$id_matpel'");
        //$data = array(
            //"nama_materi" => $mat[1]['nama_materi'],
            //"nama_guru" => $mat[1]['nama_guru'],
        //);
    
    $this->load->view('elearning/materi', $mat); 
    }
}
