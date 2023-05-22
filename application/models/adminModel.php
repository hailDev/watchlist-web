<?php 
    class adminModel extends CI_Model{


        public function get_user() {
         $query = $this->db->get('user');
         if ($query->num_rows() > 0) {
            $detail  = $query->result_array();          
            return $detail;
         }
        }

        public function deleteuser($email){
            $this->db->where('email', $email);
            $this->db->delete('user');
        }

        function updateuser($email, $data){
         $this->db->where('email', $email);
         $this->db->update('user', $data);
        }

        function getUserDetail($email){
        $query= $this->db->get_where('user',array('email' => $email));
        if ($query->num_rows() > 0) {
         $detail  = $query->result_array();          
         return $detail[0];
         }
         return false;
        }

        public function addMoviesManage($data){
            $this->db->insert('set_movies', $data);
        }

        public function deleteMovie($movie_kode){
            $this->db->where('movie_kode', $movie_kode);
            $this->db->delete('set_movies');
        }
        
        
    }
?>