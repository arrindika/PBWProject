<?php
class pages extends CI_Controller {

        public function view($page = 'home')
        {
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }

                $data['title'] = ucfirst($page);
                $this->load->model('news_model');
                $data['latestNews'] = $this->news_model->select_news_two_nearest();
                $this->load->model('event_model');
                $data['upcomingEvent'] = $this->event_model->select_events_four_nearest();
                $this->load->helper('url');
                $this->load->view('pages/'.$page, $data);
        }
        public function view($page = 'elearning')
        {
            if ( ! file_exists(APPPATH.'views/elearning/'.$page.'.php'))
                {
                    show_404();
                }

                $data['title'] = ucfirst($page);
                $this->load->model('news_model');
                $data['latestNews'] = $this->news_model->select_news_two_nearest();
                $this->load->model('event_model');
                $data['upcomingEvent'] = $this->event_model->select_events_four_nearest();
                $this->load->helper('url');
                $this->load->view('pages/'.$page, $data);
        }
        public function gallery($page = 'gallery'){
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }

                $data['title'] = ucfirst($page);
                $this->load->model('news_model');
                $data['latestNews'] = $this->news_model->select_news_two_nearest();
                $this->load->model('event_model');
                $data['upcomingEvent'] = $this->event_model->select_events_four_nearest();
                $this->load->helper('url');
                $this->load->view('pages/'.$page, $data);
        }
        public function events($page = 'events'){
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }
                $data['title'] = ucfirst($page);
                $this->load->model('news_model');
                $data['latestNews'] = $this->news_model->select_news_two_nearest();
                $this->load->model('event_model');
                $data['events'] = $this->event_model->select_events();
                $this->load->helper('url');
                $this->load->view('pages/'.$page, $data);
        }
        public function sejarahsekolah($page = 'sejarahsekolah'){
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }
                $data['title'] = ucfirst($page);
                $this->load->model('news_model');
                $data['latestNews'] = $this->news_model->select_news_two_nearest();
                $this->load->model('event_model');
                $data['upcomingEvent'] = $this->event_model->select_events_four_nearest();
                $this->load->helper('url');
                $this->load->view('pages/'.$page, $data);
        }
        public function teachers($page = 'teachers'){
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }
                $data['title'] = ucfirst($page);
                $this->load->model('news_model');
                $data['latestNews'] = $this->news_model->select_news_two_nearest();
                $this->load->model('teacher_model');
                $data['teachersdata'] = $this->teacher_model->select_dataguru();
                $this->load->model('event_model');
                $data['upcomingEvent'] = $this->event_model->select_events_four_nearest();
                $this->load->helper('url');
                $this->load->view('pages/'.$page, $data);
        }
        public function news($page = 'news'){
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }
                $data['title'] = ucfirst($page);
                $this->load->model('news_model');
                $data['newss'] = $this->news_model->select_news();
                $data['latestNews'] = $this->news_model->select_news_two_nearest();
                $this->load->model('event_model');
                $data['upcomingEvent'] = $this->event_model->select_events_four_nearest();
                $this->load->helper('url');
                $this->load->view('pages/'.$page, $data);
        }
        public function contact($page = 'contact'){
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }
                $data['title'] = ucfirst($page);
                $this->load->model('news_model');
                $data['latestNews'] = $this->news_model->select_news_two_nearest();
                $this->load->model('event_model');
                $data['upcomingEvent'] = $this->event_model->select_events_four_nearest();
                $this->load->helper('url');
                $this->load->view('pages/'.$page, $data);
        }
        public function sendEmail()
        {
            $email = $this->input->post('email');
            $name = $this->input->post('name');
            $subject = $this->input->post('subject');
            $message    = $this->input->post('message');

            $from_email = $email;

             $to_email = 'smpkatolik_sttheresia@yahoo.co.id';

             //Load email library
             $this->load->library('email');

             $this->email->from($from_email, $name);
             $this->email->to($to_email);
             $this->email->subject($subject);
             $this->email->message($message);

             //Send mail
             if($this->email->send()){
                $this->session->set_flashdata("email_sent","Email sent successfully.");
                echo "<script>alert('Email Berhasil Di kirim');</script>";
            }
             else{
                $this->session->set_flashdata("email_sent","Error in sending Email.");
                echo "<script>alert('Gagal Mengirim !');</script>";
            }
             $this->load->view('contact');
        }
}
?>
