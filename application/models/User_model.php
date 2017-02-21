<?php
	class User_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function insert_user_img($usr_img, $username){

			$data = array(
				'image' => $usr_img
			);
			$this->db->where('username', $username);
			return $this->db->update('users', $data);

		}
		public function insert_user(){
			
			$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password'=> password_hash($this->input->post('password'), PASSWORD_DEFAULT)
			);

			$this->db->insert('users', $data);

			if($this->db->affected_rows() === 1){
				return 1;
			}
		}
		public function set_session($username, $email){
			$sql = "SELECT id, admin,created_ad FROM users WHERE email=" .$this->db->escape($email);
			$result = $this->db->query($sql);
			$row = $result->row();
			$user_data = array(
                'user_id' => $row->id,
              	'username' => $username,
              	'email' => $email,
              	'admin' => $row->admin,
				'created_at' => $row->created_ad,  
              	'logged_in' => 1
              			);
             $this->session->set_userdata($user_data); 			                     	
		}
		public function get_userdata($username){

			$sql = "SELECT * FROM users WHERE username=" .$this->db->escape($username);
			$result = $this->db->query($sql);
			$row = $result->row();
			if($this->db->affected_rows() === 1){
			$user_data = array(
				'user_id' => $row->id,
              	'username' => $row->username,
              	'password' => $row->password,
				'created_at' => $row->created_ad,
				'email' => $row->email,
              	'admin' => $row->admin
              			);
			 $this->session->set_userdata($user_data);
			
			
			return $user_data;
			}		
		}
	}