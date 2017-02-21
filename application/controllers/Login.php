<?php
	
	class Login extends CI_Controller{
		public function index(){
			$data['title'] = 'Login';
			//ha már be van logolva a user, akkor ért.szerűen ne tudjon újra
			if($_SESSION['logged_in'] !== 1){

			$this->load->view('templates/header');
            $this->load->view('login/index', $data);
            $this->load->view('templates/footer');
            }
			else{
				//js-es felugró ablak kell
				$this->load->view('templates/login_header');
				echo "<script> alert('Már be vagy jelentkezve!'); </script>";
				$this->load->view('templates/footer');
			}

		}
		public function login_user(){
			$this->load->helper('cookie');
			$user_login =  array(
				'password' => $this->input->post('password'),
				'username' => $this->input->post('username')
				);
			
			$this->load->model('user_model');
			
			$remember = $this->input->post('remember');
			
			$user_db = $this->user_model->get_userdata($user_login['username']);
			
			
			if (password_verify($user_login['password'], $user_db['password'])
				&& $user_login['username'] === $user_db['username']) {
				    $_SESSION['logged_in'] = 1;

					
					redirect(base_url());
				 
				}
				else{
					$this->load->view('templates/header');
			        $this->load->view('login/index');
			        $this->load->view('templates/footer');
			       
				} 
	}
}