<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Shift extends CI_Controller {
public function __construct() //construct itu buat klo jalani controller admin itu yg di cek itu contructnya dulu
{
	parent:: __construct();
		is_logged_in();//helper ini buat sendiri di folder helper namanya bebas dan harus di tambahkan juga di autoload dan tambahkan di library helper, cek aja!
		$this->load->model('LoginModel');
	}

	public function list($id)
	{

		$data['title'] =  'Detail ';
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));

		$data['shift'] = $this->LoginModel->getById($id,'shift');
		$data['detail_shift'] = $this->LoginModel->getDetailShift($id);

		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('admin/detail_shift',$data);
		$this->load->view('template/footer');
	}

	public function save($id)
	{
		$shift = $this->LoginModel->getById($id,'shift');
		$this->form_validation->set_rules('activity','Activity','required|trim');

		//ini untuk membuat kondisi form validasi
		if($this->form_validation->run() == false){

			redirect(base_url()."detail_shift/list/".$id); //redirect with parameter
		}
		else{
			$this->load->helper('date');
			$time= $this->input->post('time_start',true);
			$start_date = date('H:i:s', strtotime($time));
			$data = [
			// ini dari database(kiri)             ini dari name tiap textfield (kanan)
				'time_start' => $start_date,
				'shift' => $id,
				'activity_shift' => htmlspecialchars($this->input->post('activity', true))
			];

			$this->db->insert('detail_shift', $data); //untuk simpan ke database
			$this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
			$this->session->set_flashdata('flash' , 'Save'); // unutk munculkan alert
			
			redirect(base_url()."detail_shift/list/".$id); //redirect with parameter
		}

	}
	public function update($id,$shift)
	{

		$this->form_validation->set_rules('time_start','Time Start','required|trim');
		$this->form_validation->set_rules('activity','Activity','required|trim');

		//ini untuk membuat kondisi form validasi
		if($this->form_validation->run() == false){

			redirect(base_url()."detail_shift/list/".$shift); //redirect with parameter
		}
		else{
			$this->load->helper('date');
			$time= $this->input->post('time_start',true);
			$start_date = date('H:i:s', strtotime($time));
			$data = [
			// ini dari database(kiri)             ini dari name tiap textfield (kanan)
				'time_start' => $start_date,
				'activity_shift' => htmlspecialchars($this->input->post('activity', true))
			];
			
			$this->LoginModel->update($id,'detail_shift', $data);
			$this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
			$this->session->set_flashdata('flash' , 'Save'); // unutk munculkan alert
			
			redirect(base_url()."detail_shift/list/".$shift); //redirect with parameter
		}

	}
	public function delete($id,$shift) 
	{

		$this->LoginModel->delete($id,'detail_shift');
            $this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
            $this->session->set_flashdata('flash' , 'Delete');
            redirect(base_url()."detail_shift/list/".$shift); //redirect with parameter
        }

    }