<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
// Konstrutor 
	function __construct() {
		parent::__construct();
		$this->load->model('LoginModel');
	}

	public function index()
	{
		if($this->session->userdata('nik')){  //agar yg login ga bisa balik langsung ke halaman login tanpa logout
			redirect('login/blocked');
		}

		$this->form_validation->set_rules('nik','NIK', 'trim|required');
		$this->form_validation->set_rules('pass','Password', 'trim|required');

		if ($this->form_validation->run() == false) 
		{
			$data['title'] =  'Login Page';
			$this->load->view('templates/header');
			$this->load->view('login',$data);
			$this->load->view('templates/footer');
		}
		else{
			//validasi success
			$this->_login();
		}
	}

	private function _login()
	{
		$nik = $this->input->post('nik');
		$password = $this->input->post('pass');

		// ambil id User
		$getUser = $this->LoginModel->getUser($nik);

		$user = $this->db->get_where('user_login', ['user' => $getUser['id']])->row_array();
		
		//jika user nya ada
		if ($getUser) {
				//cek password 
			if (md5($password) == $getUser['password']) {
				$data =
				[
						'nik' => $getUser['nik'], //isi $data
						'role' => $user['role'] //isi $data
					];
					$this->session->set_userdata($data); //masukin $data ke session
					if ($user['role'] == 1) {
						redirect('admin');
					}
					else{
						redirect('UserEngineer');
					}
				}
				// wrong password
				else{
					$this->session->set_flashdata('message' , 'password');
					$this->session->set_flashdata('flash' , 'Failed');
					redirect('login'); 
				}
			}
			//user not found
			else{
				$this->session->set_flashdata('message' , 'not_found');
				$this->session->set_flashdata('flash' , 'Failed');
				redirect('login'); 
			}
		}

		public function logout()
		{
		$this->session->unset_userdata('nik'); //hapus email di session
		$this->session->unset_userdata('role'); //hapus role_id di session

		$this->session->set_flashdata('message' , 'You have been logged out');
		$this->session->set_flashdata('flash' , 'Logout');
		redirect('login');
	}

	public function blocked()
	{
		$this->load->view('404');
	}
}
