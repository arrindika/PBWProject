<?php
class pages extends CI_Controller {

        public function view($page = 'home')
        {
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }

                $data['title'] = ucfirst($page);
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
                $this->load->helper('url');
                $this->load->view('pages/'.$page, $data);
        }
        public function events($page = 'events'){
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }

                $data['title'] = ucfirst($page);
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
                $this->load->model('teacher_model');
                $data['teachersdata'] = $this->teacher_model->select_dataguru();
                $this->load->helper('url');
                $this->load->view('pages/'.$page, $data);
        }
        public function news($page = 'news'){
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }

                $data['title'] = ucfirst($page);
                $this->load->helper('url');
                $this->load->view('pages/'.$page, $data);
        }
        public function contact($page = 'contact'){
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }

                $data['title'] = ucfirst($page);
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

             $to_email = 'dikandapamerang@gmail.com';

             //Load email library
             $this->load->library('email');

             $this->email->from($from_email, $name);
             $this->email->to($to_email);
             $this->email->subject($subject);
             $this->email->message($message);

             //Send mail
             if($this->email->send())
                echo "sussces";
                //$this->session->set_flashdata("email_sent","Email sent successfully.");
             else
                echo "error";
                //$this->session->set_flashdata("email_sent","Error in sending Email.");

             $this->load->view('contact');
        }
}
?>
