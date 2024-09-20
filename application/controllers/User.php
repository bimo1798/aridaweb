<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
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

	public function save()
	{

		$this->form_validation->set_rules('user','User','required|trim');
		$this->form_validation->set_rules('role','Role','required|trim');

		//ini untuk membuat kondisi form validasi
		if($this->form_validation->run() == false){

			redirect('admin/listUser');
		}
		else{
			$data = [
			// ini dari database(kiri)             ini dari name tiap textfield (kanan)
				'user' => htmlspecialchars($this->input->post('user', true)),
				'role' => htmlspecialchars($this->input->post('role', true))
			];

			$this->db->insert('user_login', $data); //untuk simpan ke database
			$this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
			$this->session->set_flashdata('flash' , 'Save'); // unutk munculkan alert
			
			redirect('admin/listUser'); //untuk ngelink kemana jika kondisi sukses di simpan
		}

	}
	public function update($id)
	{
			$data = [
			// ini dari database(kiri)             ini dari name tiap textfield (kanan)
				// 'user' => htmlspecialchars($this->input->post('user', true)),
				'role' => htmlspecialchars($this->input->post('role', true))
			];

			$this->LoginModel->update($id,'user_login', $data); //untuk simpan ke database
			$this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
			$this->session->set_flashdata('flash' , 'Update'); // unutk munculkan alert
			
			redirect('admin/listUser'); //untuk ngelink kemana jika kondisi sukses di simpan
	}

	public function delete($id) 
	{
		$row = $this->LoginModel->countUserAdmin();
		$user = $this->LoginModel->getById($id,'user_login');
		//cek apakah user role admin/bukan
		if ($user['role'] == '1') {
			//cek jumlah row
			if ($row > 1) {
				$this->LoginModel->delete($id,'user_login');
            $this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
            $this->session->set_flashdata('flash' , 'Delete');
            redirect('admin/listUser');
        }else{
            redirect('admin/listUser'); //untuk ngelink kemana jika kondisi sukses di simpan
        }

    }else if ($user['role'] == '2') {
    	$this->LoginModel->delete($id,'user_login');
            $this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
            $this->session->set_flashdata('flash' , 'Delete');
            redirect('admin/listUser'); //untuk ngelink kemana jika kondisi sukses di simpan
        }  
    }
}