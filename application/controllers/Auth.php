<?php
	/**
	* 
	*/
	class Auth extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();
			$this->load->model('M_login');
			
		}

		public function index()
		{
			$this->load->view("login");
		}

		public function AksiLogin()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$passwordx = md5($password);
			$login = $this->M_login->data_login($username, $passwordx);
			$tes = count($login);
			if ($tes > 0) {
				//ambil detail data
				$row = $this->M_login->data_login($username, $passwordx);
				$level = $row->level;
				//daftarkan session
				$data_session = array('level' => $level);
				$this->session->set_userdata($data_session);
				//direct page
				if ($level == 'Asisten Manajer') {
					redirect('superadmin');
				}
				elseif ($level == 'Pegawai') {
					redirect('admin');
				}
			}
			else {
				$this->load->view('fail');
			}
		}

		public function logout()
		{
			$this->session->unset_userdata("login");
			$this->session->unset_userdata("username");
			redirect ('auth');
		}
	}
?>