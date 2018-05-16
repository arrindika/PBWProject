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
    public function view($page = 'elearning')
        {
            if ( ! file_exists(APPPATH.'views/elearning/'.$page.'.php'))
                {
                    show_404();
                }

                $data['title'] = ucfirst($page);
                $this->load->model('elearning');
                $data['latestNews'] = $this->news_model->select_news_two_nearest();
                
                $this->load->helper('url');
                $this->load->view('elearning/'.$page, $data);
        }
	public function index()
	{
		$this->load->view('elearning/login');
	}
}
