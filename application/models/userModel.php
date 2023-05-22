<?php 
    class userModel extends CI_Model{


        public function update_user($data) {
         $email = $data['email'];
         $profile_picture = $data['image'];
         $this->db->where('email', $email);
         $this->db->update('user', array('image' => $profile_picture));
        }
        
        public function get_watchlist($email){
        $this->db->select('sm.movie_name, sm.movie_genre, md.movie_code, md.email, md.id');
        $this->db->from('movies_data md');
        $this->db->join('set_movies sm', 'md.movie_code = sm.movie_kode');
        $this->db->where('md.email', $email);
        $query = $this->db->get();
        return $query->result();
        }

        public function addWatchlistUser($email, $data){
        $movie_code = $data['movie_code'];
        $query=$this->db->get_where('movies_data', array('email' => $email, 'movie_code' => $movie_code));
        if($query->num_rows()>0){
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">The movie is already in watchlist! </div>');
            redirect('userMovies');
        }else{
        $query = $this->db->insert('movies_data', $data);
        return $query;
        }
        }

        public function deletewatchlist($email, $id){
            $this->db->delete('movies_data', array('id' => $id, 'email' => $email));
        }

        public function addRating($data){
            // Periksa apakah rating sudah ada
    $this->db->where('movie_kode', $data['movie_kode']);
    $this->db->where('email', $data['email']);
    $query = $this->db->get('user_rating');

    if ($query->num_rows() > 0) {
        // Rating sudah ada, lakukan pembaruan
       $this->db->where('movie_kode', $data['movie_kode']);
        $this->db->where('email', $data['email']);
        $this->db->update('user_rating', array('rating' => $data['rating']));
    } else {
        // Rating belum ada, lakukan penyisipan
        $this->db->insert('user_rating', $data);
    }

    // Mengambil rata-rata rating berdasarkan 'movie_kode'
    $this->db->select_avg('rating');
    $this->db->where('movie_kode', $data['movie_kode']);
    $query = $this->db->get('user_rating');
    $averageRating = $query->row()->rating;

    // Update rata-rata rating ke dalam tabel lain (misalnya, tabel `movies`)
    $this->db->where('movie_kode', $data['movie_kode']);
    $this->db->update('set_movies', array('movie_rating' => $averageRating));

        }

        

    }
?>