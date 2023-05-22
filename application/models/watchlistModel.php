<?php 
    class watchlistModel extends CI_Model{


        function get_watchlist(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $query= $this->db->get_where('movies_data',array('email' => $data['user']['email']));
        if ($query->num_rows() > 0) {
         $detail  = $query->result_array();          
         return $detail;
         }
         return false;
        }

        public function get_movies() {
         $query = $this->db->get('set_movies');
         if ($query->num_rows() > 0) {
            $detail  = $query->result_array();          
            return $detail;
         }
        }

        

        

        
    }
?>