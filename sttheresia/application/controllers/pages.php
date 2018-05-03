<?php
class pages extends CI_Controller {

        public function view($page = 'home')
        {
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }

                $data['title'] = ucfirst($page);
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
        public function news($page = 'news'){
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }

                $data['title'] = ucfirst($page);
                $this->load->helper('url');
                $this->load->view('pages/'.$page, $data);
        }
        public function sejarahsekolah($page = 'sejarahsekolah'){
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }

                $data['title'] = ucfirst($page);
                $this->load->helper('url');
                $this->load->view('pages/'.$page, $data);
        }
        public function teachers($page = 'news'){
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                    show_404();
                }

                $data['title'] = ucfirst($page);
                $this->load->helper('url');
                $this->load->view('pages/'.$page, $data);
        }
        public function programsekolah($page = 'programsekolah'){
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
}
?>
