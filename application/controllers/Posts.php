<?php

	class Posts extends CI_Controller{
	    public function index(){

                $data['title'] = 'Legfrissebb posztok';

                $data['posts'] = $this->post_model->get_posts();

               

              if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === 0) {
                        
                $_SESSION['logged_in'] = 0;
                $this->load->view('templates/header');
                $this->load->view('posts/index', $data);
                $this->load->view('templates/footer');
                }
              else if($_SESSION['admin'] == 1){
                $this->load->view('templates/admin');
                $this->load->view('posts/index', $data);
                $this->load->view('templates/footer');
              }
              else{
                $this->load->view('templates/login_header');
                $this->load->view('posts/index', $data);
                $this->load->view('templates/footer');

                } 
        }

        public function view($slug = NULL){
                $data['post'] = $this->post_model->get_posts($slug);
                
                if(empty($data['post'])){
                        show_404();
                }
                $data['title'] = $data['post']['title'];

                if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === 0) {
                        
                $_SESSION['logged_in'] = 0;
                $this->load->view('templates/header');
                $this->load->view('posts/u_view', $data);
                $this->load->view('templates/footer');
                }
                else if($_SESSION['admin'] == 1)
                {
                $this->load->view('templates/admin');
                $this->load->view('posts/view', $data);
                $this->load->view('templates/footer');
              }
        else{
                $this->load->view('templates/login_header');
                $this->load->view('posts/u_view', $data);
                $this->load->view('templates/footer');

                } 
        }
        public function create(){

                if(!isset($_SESSION['admin']) || $_SESSION['admin'] == 0){
                
                show_error('Nincs hozzáférésed ehhez az oldalhoz!', 500, 'Oldal megtagadva.');
                }
                else{
                        $data['title'] = 'Create Post';
                        $data['categories'] = $this->post_model->get_categories();
                        $this->form_validation->set_rules('title', 'Title', 'required');
                        $this->form_validation->set_rules('body', 'Body', 'required');

                 if($this->form_validation->run() ===FALSE){
                        if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === 0) {
                                
                        $_SESSION['logged_in'] = 0;
                        $this->load->view('templates/header');
                        $this->load->view('posts/create', $data);
                        $this->load->view('templates/footer');
                        }
                        else if($_SESSION['admin'] == 1){
                        $this->load->view('templates/admin');
                        $this->load->view('posts/create', $data);
                        $this->load->view('templates/footer');
                }
                        else{
                        $this->load->view('templates/login_header');
                        $this->load->view('posts/create', $data);
                        $this->load->view('templates/footer');
                        } 
                }
                else{
                                $this->post_model->create_post();
                                redirect('/posts');
                        }
                }
        }
        public function delete($id){
                
                $this->post_model->delete_post($id);
                redirect('/posts');
        }
        public function edit($slug){
            if(!isset($_SESSION['admin']) || $_SESSION['admin'] === 0){
                
                show_error('Nincs hozzáférésed ehhez az oldalhoz!', 500, 'Oldal megtagadva.');
                }
                else{    
                        $data['post'] = $this->post_model->get_posts($slug);
                        $data['categories'] = $this->post_model->get_categories();
                                if(empty($data['post'])){
                                        show_404();
                                }
                                $data['title'] = 'Edit Posts';

                        if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] === 0) {
                                        
                                $_SESSION['logged_in'] = 0;
                                $this->load->view('templates/header');
                                $this->load->view('posts/edit', $data);
                                $this->load->view('templates/footer');
                                }
                                else if($_SESSION['admin'] == 1){
                                $this->load->view('templates/admin');
                                $this->load->view('posts/edit', $data);
                                $this->load->view('templates/footer');
                        }
                                else{
                                $this->load->view('templates/login_header');
                                $this->load->view('posts/edit', $data);
                                $this->load->view('templates/footer');

                                } 
                } 

        }
        public function update(){
                $this->post_model->update_post();
                redirect('/posts');

        }               
}
	 