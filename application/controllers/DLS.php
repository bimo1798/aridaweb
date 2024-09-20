<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DLS extends CI_Controller {
public function __construct() //construct itu buat klo jalani controller admin itu yg di cek itu contructnya dulu
{
	parent:: __construct();
		is_logged_in();//helper ini buat sendiri di folder helper namanya bebas dan harus di tambahkan juga di autoload dan tambahkan di library helper, cek aja!
		$this->load->model('LoginModel');
	}
	public function index()
	{
		$data['title'] =  'Job Engineer Data';
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));
		
		$data['work'] = $this->LoginModel->getWork();

		$data['engineer'] = $this->db->get('engineer')->result_array();
		
		$data['job'] = $this->db->get('job')->result_array();//ambil semua data di tabel
		$data['location'] = $this->db->get('location')->result_array();//ambil semua data di tabel
		$data['shift'] = $this->db->get('shift')->result_array();//ambil semua data di tabel

		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('admin/work',$data);
		$this->load->view('template/footer');
	}

	public function save($work)
	{

		$this->form_validation->set_rules('shift','Shift','required|trim');

		//ini untuk membuat kondisi form validasi
		if($this->form_validation->run() == false){

			redirect(base_url()."workactivity/list/".$work);
		}
		else{
			$data = [
			// ini dari database(kiri)             ini dari name tiap textfield (kanan)
				'work' => $work,
				'shift' => htmlspecialchars($this->input->post('shift', true))
			];

			$this->db->insert('detail_location_shift', $data); //untuk simpan ke database
			$this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
			$this->session->set_flashdata('flash' , 'Save'); // unutk munculkan alert
			
			redirect(base_url()."workactivity/list/".$work); //untuk ngelink kemana jika kondisi sukses di simpan
		}

	}
	public function update($id)
	{
		$data = [
			'location' => htmlspecialchars($this->input->post('location', true)),
			'job' => htmlspecialchars($this->input->post('job', true))
		];

			$this->LoginModel->update($id,'work', $data); //untuk simpan ke database
			$this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
			$this->session->set_flashdata('flash' , 'Update'); // unutk munculkan alert
			
			redirect('work'); //untuk ngelink kemana jika kondisi sukses di simpan
	}

	public function delete($id,$work) 
	{
			
			$this->LoginModel->delete($id,'detail_location_shift');
            $this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
            $this->session->set_flashdata('flash' , 'Delete');
           redirect(base_url()."workactivity/list/".$work);
    }

    }