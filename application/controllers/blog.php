<?php
	class Blog extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Mahasiswa');
			$this->load->model('Product_model');
		}
		function index(){
			$data['title'] = 'This is Title';
			$data['content'] = 'This is Content';
			$this->load->view('1221216_layout', $data);
		}

		public function layout (){
        $data['mhsArr'] = $this->Mahasiswa->mahasiswa_get();
        $this->load->view('mhs_view',$data);
    	}

		/* public function add_matakuliah(){
			$this->load->view('add_matakuliah', $data)
		} */

	}
?>