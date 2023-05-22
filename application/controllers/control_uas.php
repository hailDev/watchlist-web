<?php
	class control_uas extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
		}
		function viewInput(){
			$this->load->view('view_input');
		}
		function viewProfile(){
			$this->load->view('view_profile');
		}

		function viewLogin(){

			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', []);
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if($this->form_validation->run()==false){
				$data['title'] = "Login page";
				$this->load->view('login-ui', $data);
			}else{
				$this->_login();
			}
		}

		private function _login(){
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->db->get_where('user', ['email' => $email])->row_array();

			//user ada
			if($user){
				if($user['is_active']==1){
					if ($user['role']==1) {
						if(password_verify($password, $user['password'])){
						$data = [
						'email' => $user['email']
						];

						$this->db->set('status', 1);
						$this->db->where('email', $email);
						$this->db->update('user');

						$this->session->set_userdata($data);
						redirect('admin');

					}else{
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
						redirect('viewLogin');
					}
					}elseif ($user['role']==2) {
						if(password_verify($password, $user['password'])){
						$data = [
						'email' => $user['email']
						];

						$this->db->set('status', 1);
						$this->db->where('email', $email);
						$this->db->update('user');

						$this->session->set_userdata($data);
						redirect('user');

					}else{
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
						redirect('viewLogin');
					}
					}else{
						redirect('viewLogin');
					}
				}
				else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Activate your account first!</div>');
					redirect('control_uas/viewLogin');
				}
			}else{
				//user tidak ada
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
				redirect('control_uas/viewLogin');
			}
		}

		public function viewRegistration(){

			$this->form_validation->set_rules('name', 'Name', 'required|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
				'is_unique' => "This email is already registered!"
			]);
			$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
				'matches' => "password doesnt match",
				'min_length' => "Password is too short"
			]);
			$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[5]|matches[password1]');

			if ($this->form_validation->run() == false) {
				$this->load->view('view_registration');
			}else{
				$email = $this->input->post('email', true);
				$data = [
					'name' => $this->input->post('name', true),
					'email' => $email,
					'age' => $this->input->post('age', true),
					'image' => 'default.jpg',
					'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
					'role' => 2,
					'is_active' => 0,
					'date_created' => time()
				];

				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' =>  $email,
					'token' => $token,
					'date_created' => time()
				];

				$this->db->insert('user', $data);
				$this->db->insert('user_token', $user_token);

				$this->_sendEmail($token, 'verify');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Account has been created, please activate</div>');
				redirect('viewLogin');
			}
		}

		private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'croziputra@gmail.com',
            'smtp_pass' => 'ggliahgzgjkkdaxn',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];
		$this->load->library('email',$config); 
        $this->email->initialize($config);


        $this->email->from('croziputra@gmail.com', 'Haildev');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('Click this link to verify you account: <a href="' . base_url() . 'control_uas/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your password: <a href="' . base_url() . 'control_uas/reset?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');

        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }


	public function verify()
{
    $email = $this->input->get('email');
    $token = $this->input->get('token');


    $user = $this->db->get_where('user', ['email' => $email])->row_array();
	
    if ($user) {
        
		$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
		
        if ($user_token) {

            $this->db->set('is_active', 1);
			$this->db->set('role', 2);
            $this->db->where('email', $email);
            $this->db->update('user');

            if ($this->db->affected_rows() > 0) {
                $this->db->delete('user_token', ['token' => $token]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been activated! Please login.</div>');
                redirect('viewLogin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Please try again.</div>');
                redirect('viewRegistration');
            }
        } else {
			
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Invalid token.</div>');
            redirect('viewLogin');
        }
    }
}



		public function logout(){
			$this->session->unset_userdata('email');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">log out successed!</div>');
			redirect('viewLogin');
		}

		public function forgotPassword(){
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

			if ($this->form_validation->run() == false) {
				$data['title'] = "Forgot password";
				$this->load->view('forgotPasswordView', $data);
			}else{
				$email = $this->input->post('email');
				$user  = $this->db->get_where('user', ['email'=>$email, 'is_active' => 1])->row_array();

				if($user){
					$token = base64_encode(random_bytes(32));
					$user_token = [
						'email' 		=> $email,
						'token' 		=> $token,
						'date_created' 	=> time()
					];

					$this->db->insert('user_token', $user_token);
					$this->_sendEmail($token, 'forgot');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Check your email to reset your password!</div>');
					redirect('forgotPassword');

				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered or activated!</div>');
					redirect('forgotPassword');
				}
			}
		}

		public function reset(){
			$email = $this->input->get('email');
			$token = $this->input->get('token');

			$user = $this->db->get_where('user',['email' => $email])->row_array();

			if ($user) {
				$user_token = $this->db->get_where('user_token',['token' => $token])->row_array();

				if($user_token){
					$this->session->set_userdata('reset_email', $email);
					$this->changePassword();
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong token</div>');
					redirect('viewLogin');
				}
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong email</div>');
				redirect('viewLogin');
			}
		}

		public function changePassword(){


			if(!$this->session->userdata('reset_email')){
				redirect('viewLogin');
			}
			$this->form_validation->set_rules('password1', 'Password1', 'trim|required|min_length[5]|matches[password2]');
			$this->form_validation->set_rules('password2', 'Password2', 'trim|required|min_length[5]|matches[password1]');
			if ($this->form_validation->run() == false) {
				$data['title'] = "Change password";
				$this->load->view('changePasswordView', $data);
				
			}else{
				$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
				$email 	  = $this->session->userdata('reset_email');

				$this->db->set('password', $password);
				$this->db->where('email', $email);
				$this->db->update('user');

				$this->session->unset_userdata('reset_email');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has been changed</div>');
				redirect('viewLogin');
			}

		}


	}
?>