<?php
	class admin extends CI_Controller
    {

        function __construct()
		{
			parent::__construct();
            $this->load->model('adminModel');
            $this->load->model('watchlistModel');
			$this->load->library('form_validation');
            $this->load->helper('url', 'form');
            
		}
        

        public function index(){
            $judul['title'] = "Admin landing page";
            if(isset($this->session->userdata['email'])){
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                $this->load->view('adminPage', array_merge($judul));
                $this->load->view('adminpageContent');
            } else {
                redirect('viewLogin');
            }
        }

        public function viewmanageUser(){
            $judul['title'] = "Manage User";
            if(isset($this->session->userdata['email'])){
                $usersData['users'] = $this->adminModel->get_user();
            $this->load->view('adminPage', array_merge($judul));
            $this->load->view('manageUser', $usersData);
            } else {
                redirect('viewLogin');
            }
        }

        public function deleteuserData(){
            $email = $this->input->post('email');
            $delete= $this->adminModel->deleteuser($email);
            redirect('viewmanageUser');
        }

        public function updateuserData(){
            $judul['title'] = "Manage User";
            $email = $this->input->post('email');
            
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('age',  'Age', 'required');
            $this->form_validation->set_rules('role', 'Role', 'required|in_list[1,2]', [
				'in_list' => "input 1 or 2"
			]);

            if ($this->form_validation->run() == false) {
                $usersData['users'] = $this->adminModel->get_user();
                $this->load->view('adminPage', array_merge($judul));
                $this->load->view('manageUser', $usersData);
            
			}else{

            $data = [
					'name'  => $this->input->post('name', true),
					'age'   => $this->input->post('age', true),
                    'role'  => $this->input->post('role', true)
				];

            $update= $this->adminModel->updateuser($email, $data);
            redirect('viewmanageUser');
            }
        }

        public function edituserData(){
            $judul['title'] = "Manage User";
            $email = $this->input->post('email');

            if(isset($this->session->userdata['email'])){
                $usersData['users'] = $this->adminModel->get_user();
                $data["detail"]=$this->adminModel->getUserDetail($email);
            $this->load->view('adminPage', array_merge($judul));
            $this->load->view('manageUser', array_merge($usersData, $data));
            } else {
                redirect('viewLogin');
            }
        }

        public function adminMovies(){
            $judul['title'] = "Manage Movies";
            if(isset($this->session->userdata['email'])){
                
                $data['dataMovies'] = $this->watchlistModel->get_movies();
                $this->load->view('adminPage', array_merge($judul));
                $this->load->view('adminMovies', array_merge($data));
            } else {
                redirect('viewLogin');
            }
        }

        public function addMoviesManage(){

                $config['upload_path']          = './assets/img-datamovies/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;
                $this->load->library('upload', $config);



                if ( ! $this->upload->do_upload('movie_image'))
                {
                        echo "gagal tambah";
                }
                else
                {
                       
                        $image = $this->upload->data();
                        $image = $image['file_name'];

                        $data = [
                            'movie_image'   => $image,
                            'movie_name'    => $this->input->post('movie_name', true),
                            'movie_genre'   => $this->input->post('movie_genre', true),
                            'movie_kode'    => $this->input->post('movie_kode', true),
                            'description'   => $this->input->post('description', true)
                        ];
                        $addmovies = $this->adminModel->addMoviesManage($data);
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The movie has been added to database!</div>');
                        redirect('adminMovies');

                }




            $addmovies = $this->adminModel->addMoviesManage($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The movie has been added to database!</div>');
            redirect('adminMovies');
        }

        public function deleteMoviesManage(){
            $movie_kode = $this->input->post('movie_kode');
            $delete= $this->adminModel->deleteMovie($movie_kode);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The movie has been deleted!</div>');
            redirect('adminMovies');
        }

        
    

        
    }

    
?>