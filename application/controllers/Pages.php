<?php

	class Pages extends CI_Controller{
		public function view($page = 'home')
{
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = 'Infó';
       

        if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === 0) {
                        
                $_SESSION['logged_in'] = 0;
                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer', $data);
                }
                else if($_SESSION['admin'] == 1){
                $this->load->view('templates/admin');
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer');
              }
        else{
                $this->load->view('templates/login_header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer', $data);

                } 
        

        
        }
}
