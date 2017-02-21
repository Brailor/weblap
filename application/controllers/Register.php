<?php
	
	
	class Register extends CI_Controller
	{
		public function upload_usr_img(){
			$config['upload_path'] = './assets/img/user_img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '0.1';
			$config['max_width'] = '150';
			$config['max_height'] = '150'; 

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
				$userimg = 'placeholder.png'; 
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				$userimg = $_FILES['userfile']['name'];
			}
			$this->load->model('user_model');
			$result = $this->user_model->insert_user_img($userimg);
			//megnézzük, hogy sikeres volt-e a feltöltés
			if(result){
				redirect('/profile');
			}
			else{
				$this->load->view('templates/login_header');
                $this->load->view('pages/profile');
                $this->load->view('templates/footer');
				echo "<script>alert('Nem sikerült a feltöltés, kérlek próbáld újra!')</script>";
			}
		}
		public function index(){
			$data['title'] = 'Registration';

		if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === 0) {
                        
                $_SESSION['logged_in'] = 0;
                $this->load->view('templates/header');
                $this->load->view('register/view_register', $data);
                $this->load->view('templates/footer');
                }
		else if($_SESSION['admin'] == 1){
                $this->load->view('templates/admin');
                $this->load->view('register/view_register', $data);
                $this->load->view('templates/footer');
              }
        else{
                $this->load->view('templates/login_header');
                $this->load->view('register/view_register', $data);
                $this->load->view('templates/footer');

                } 

		}
		public function register_user(){
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[20]|is_unique[users.username]');
			$this->form_validation->set_rules('email', 'E-mail Address', 'trim|required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[50]|matches[passconf]');
			$this->form_validation->set_rules('passconf', 'Password Conformation','trim|required|min_length[4]|max_length[50]');

			 if($this->form_validation->run() === FALSE){
                	if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === 0) {
                        
			                $_SESSION['logged_in'] = 0;
			                $this->load->view('templates/header');
			                $this->load->view('register/view_register');
			                $this->load->view('templates/footer');
			                }
					else if($_SESSION['admin'] == 1){
						$this->load->view('templates/admin');
						$this->load->view('register/view_register');
						$this->load->view('templates/footer');
						}
					else{
							$this->load->view('templates/login_header');
							$this->load->view('register/view_register');
							$this->load->view('templates/footer');

                				} 

		}
                else{
                       $this->load->model('user_model');
                       $result = $this->user_model->insert_user();
                       
                       if($result){
                       $this->user_model->set_session($this->input->post('username'), $this->input->post('email'));
		       
                       redirect(base_url());
                       }
                        
                }

		}
	}