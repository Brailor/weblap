<?php
	
	class Profile extends CI_Controller{

        public function index(){
            if(!isset($_SESSION['username']) || !isset($_SESSION['password']) || !isset($_SESSION['logged_in'])){
                
                show_error('Nincs hozzáférésed ehhez az oldalhoz!', 500, 'Oldal megtagadva.');
            }
            else{
                $data['title'] = "Üdv, " . $_SESSION['username'] . "!";
                if($_SESSION['admin'] == 0){
                    $this->load->view('templates/login_header');
                }
                else{
                    $this->load->view('templates/admin');
                }
                $this->load->view('pages/profile', $data);
                $this->load->view('templates/footer');
            }
        }
        public function upload_usr_img(){
            $data['title'] = "Üdv, " . $_SESSION['username'] . "!";
			$config['upload_path'] = base_url() . 'myproject/assets/img/user_img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '10';
			$config['max_width'] = '1000';
			$config['max_height'] = '1000';  print_r($config);

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
				$userimg = 'placeholder.png';
                print_r($errors); 
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				$userimg = $_FILES['userfile'];
			}
			$this->load->model('user_model');
			$result = $this->user_model->insert_user_img($userimg, $_SESSION['username']);
			//megnézzük, hogy sikeres volt-e a feltöltés
			if($result){
				redirect('/profile');
			}
			else{
				$this->load->view('templates/login_header');
                $this->load->view('pages/profile', $data);
                $this->load->view('templates/footer');
				echo "<script>alert('Nem sikerült a feltöltés, kérlek próbáld újra!')</script>";
			}
		}
    }



