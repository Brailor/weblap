<?php
	class Logout extends CI_Controller{
		public function logout_user(){
			session_destroy();
			redirect(base_url());
		}
	}
