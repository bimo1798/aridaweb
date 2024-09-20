<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {
public function __construct() //construct itu buat klo jalani controller admin itu yg di cek itu contructnya dulu
{
	parent:: __construct();
		is_logged_in();//helper ini buat sendiri di folder helper namanya bebas dan harus di tambahkan juga di autoload dan tambahkan di library helper, cek aja!
		$this->load->model('LoginModel');
	}
	public function index()
	{
		$data['title'] =  'Job Data';
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));
		
		$data['job'] = $this->db->get('job')->result_array();//ambil semua data di tabel
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('admin/job',$data);
		$this->load->view('template/footer');
	}

	public function save()
	{

		$this->form_validation->set_rules('job','Job','required|trim');

		//ini untuk membuat kondisi form validasi
		if($this->form_validation->run() == false){

			redirect('job');
		}
		else{
			$data = [
			// ini dari database(kiri)             ini dari name tiap textfield (kanan)
				'job' => htmlspecialchars($this->input->post('job', true))
			];

			$this->db->insert('job', $data); //untuk simpan ke database
			$this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
			$this->session->set_flashdata('flash' , 'Save'); // unutk munculkan alert
			
			redirect('job'); //untuk ngelink kemana jika kondisi sukses di simpan
		}

	}
	public function update($id)
	{
		$data = [
			// ini dari database(kiri)             ini dari name tiap textfield (kanan)
				// 'user' => htmlspecialchars($this->input->post('user', true)),
			'job' => htmlspecialchars($this->input->post('job', true))
		];

			$this->LoginModel->update($id,'job', $data); //untuk simpan ke database
			$this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
			$this->session->set_flashdata('flash' , 'Update'); // unutk munculkan alert
			
			redirect('job'); //untuk ngelink kemana jika kondisi sukses di simpan
		}

		public function delete($id) 
		{
			
					$this->LoginModel->delete($id,'job');
            $this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
            $this->session->set_flashdata('flash' , 'Delete');
            redirect('job');
    }

}