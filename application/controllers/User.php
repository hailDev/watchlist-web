<?php
	class User extends CI_Controller
    {

        function __construct()
		{
			parent::__construct();
            $this->load->model('userModel');
            $this->load->model('watchlistModel');
			$this->load->library('form_validation');
            $this->load->helper('url', 'form');
            
		}
        

        public function index(){
            $judul['title'] = "My profile";
$email = $this->session->userdata('email');
if ($email) {
    $data['user'] = $this->db->get_where('user', ['email' => $email])->row_array();
    $group = [
        'nama' => $data['user']['name'],
        'umur' => $data['user']['age'],
        'email' => $data['user']['email'],
        'foto' => $data['user']['image']
    ];
    $movies = $this->userModel->get_watchlist($email);
    $data_movie['movies'] = $movies;

    $this->load->view('userProfile', $judul);
    $this->load->view('userProfileContent', array_merge($judul, $group, $data, $data_movie));
} else {
    redirect('viewLogin');
}

        }

        public function add_fotoprofile(){
                $config['upload_path']          = './assets/img-profile/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        echo "gagal tambah";
                }
                else
                {
                       
                        $image = $this->upload->data();
                        $image = $image['file_name'];

                        $data = array(
                            'email' => $this->session->userdata('email'),
                            'image' => $image
                        );
                        $addimage=$this->userModel->update_user($data);
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Upload image succesed!</div>');
                        redirect('user');

                }
        }

        public function userMovies(){
             $judul['title'] = "Movies";
            if(isset($this->session->userdata['email'])){
                
                $data['dataMovies'] = $this->watchlistModel->get_movies();
                $this->load->view('userProfile', array_merge($judul));
                $this->load->view('userMovies', array_merge($data));
            } else {
                redirect('viewLogin');
            }
        }

        public function addWatchlistUser(){
            $email = $_SESSION['email'];

            $data = [
                'email'         => $email,
                'movie_name'    => $this->input->post('movie_kode', true),
                'genre'         => $this->input->post('movie_kode', true),
                'movie_code'    => $this->input->post('movie_kode', true)
            ];

            $addwatchlist = $this->userModel->addWatchlistUser($email, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The movie has been added to watch list!</div>');
            redirect('userMovies');
        }

        public function deleteUserWatchlist(){
            $email = $_SESSION['email'];
            $id    = $this->input->post('id');
            $delete= $this->userModel->deletewatchlist($email, $id);
            redirect('User');
        }

        public function userRating(){
            $email = $_SESSION['email'];
            $data  = [
                'email'      => $email,
                'rating'     => $this->input->post('rating', true),
                'movie_kode' => $this->input->post('movie_kode', true)
            ];
            $addrating = $this->userModel->addRating($data);
            redirect('userMovies');
        }
    }

    
?>