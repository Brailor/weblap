<?php
	class Contact extends CI_Controller{

		public function view(){
			$data['title'] = 'Contact Me';
			if($_SESSION['logged_in'] !== 1){

				$this->load->view('templates/header');
	            $this->load->view('pages/contact', $data);
	            $this->load->view('templates/footer');
            }
			else if($_SESSION['admin'] == 1){
                $this->load->view('templates/admin');
                $this->load->view('pages/contact', $data);
                $this->load->view('templates/footer');
              }
            else{
            	$this->load->view('templates/login_header');
            	$this->load->view('pages/contact', $data);
            	$this->load->view('templates/footer');

            }
		}
		public function contact_me(){
			
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
			$this->form_validation->set_rules('message', 'Message', 'required');

			if($this->form_validation->run() === FALSE){
				if($_SESSION['logged_in'] !== 1){

					$this->load->view('templates/header');
		            $this->load->view('pages/contact', $data);
		            $this->load->view('templates/footer');
	            	}
				else if($_SESSION['admin'] == 1){
					$this->load->view('templates/admin');
					$this->load->view('pages/contact', $data);
					$this->load->view('templates/footer');
				}
	            else{
	            	$this->load->view('templates/login_header');
	            	$this->load->view('pages/contact', $data);
	            	$this->load->view('templates/footer');

	            	}
                	
                }
            else{

            	$config = array();
			    $config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;

                $this->load->library('email');
                $this->email->initialize($config);

            	$this->email->from($this->input->post('email'), $this->input->post('name'));
            	$this->email->to('viktor.ohad@gmail.com');
            	$this->email->subject('Email Test');
            	$this->email->message($this->input->post('message'));
            	if($this->email->send()){
					redirect(base_url());
				}
				else{
            	echo $this->email->print_debugger();
				}

				
            }    

		}
	}