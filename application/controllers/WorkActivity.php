<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WorkActivity extends CI_Controller {
public function __construct() //construct itu buat klo jalani controller admin itu yg di cek itu contructnya dulu
{
	parent:: __construct();
		is_logged_in();//helper ini buat sendiri di folder helper namanya bebas dan harus di tambahkan juga di autoload dan tambahkan di library helper, cek aja!
		$this->load->model('LoginModel');
	}

	public function list($work)
	{

		$data['title'] =  'Job & Location ';
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));

		$data['dls'] = $this->LoginModel->getDLS($work)->result_array();

		$data['w'] = $this->LoginModel->getDLS_info($work)->row_array();

		$data['shift'] = $this->LoginModel->getDLS_Shift($work)->result_array();
		
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('admin/dls',$data);
		$this->load->view('template/footer');
	}

	public function engineer_report_list()
	{
		$data['title'] =  'Choose Engineer Report';
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));
		
		$data['engineer'] = $this->db->get('engineer')->result_array();

		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('admin/engineer_report');
		$this->load->view('template/footer');
	}

	public function work_activity_location($engineer)
	{
		$data['title'] =  'Choose Location';
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));
		$data['location'] = $this->LoginModel->getLocationtByEngineer($engineer);
		
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('admin/work_activity_location',$data);
		$this->load->view('template/footer');
	}

	public function work_activity($engineer,$location)
	{
		$data['title'] =  'Choose Report';
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));
		$data['location'] = $location;
		$data['engineer'] = $engineer;

		// $workId = $this->LoginModel->getWorkByLocEngineer($engineer,$location);
		
		//tampilkan shift engineer by location
		$getWorkId = $this->LoginModel->getWorkByLocEng($location,$engineer);
		$data['shift'] = $this->LoginModel->getShiftLocation($getWorkId['id']);
		
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('admin/choose_report',$data);
		$this->load->view('template/footer');
	}

	// public function report()
	// {

	// 	$data['title'] =  'Report';
	// 	$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));
		
	// 	$this->load->view('template/header');
	// 	$this->load->view('template/sidebar',$data);
	// 	$this->load->view('admin/choose_report');
	// 	$this->load->view('template/footer');
	// }

	public function report_choose($engineer,$location)
		{
			$date_ = $this->input->post('date');
			$date = date('Y-m-d', strtotime($date_));
			$shift = $this->input->post('shift');

			$data['title'] =  'Report';
			$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));
			$data['engineer'] = $engineer;
			$data['work_activity']= $this->LoginModel->getWorkActivityEngineer($engineer,$date,$shift,$location)->result_array();
			$data['wa']= $this->LoginModel->getWorkActivityEngineer($engineer,$date,$shift,$location)->row_array();

			$this->load->view('template/header');
			$this->load->view('template/sidebar',$data);
			$this->load->view('admin/report_choose',$data);
			$this->load->view('template/footer');
		}

	public function location($location,$engineer)
	{

		$data['title'] =  'Choose Shift And Date ';
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));
		$data['work'] = $this->LoginModel->getLocationByEngineer($engineer);
		
		$data['w'] = $this->LoginModel->getWorkByLocationEngineer($location,$engineer)->row_array();
		$data['works'] = $this->LoginModel->getWorkByLocationEngineer($location,$engineer)->result_array();

		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('admin/work_activity_header',$data);
		$this->load->view('admin/choose_shift',$data);
		$this->load->view('template/footer');
	}

	public function shift_choose()
	{
		$engineer = $this->input->post('engineer');
		$date = $this->input->post('date');
		$shift = $this->input->post('shift');

		$data['shift'] = $shift;

		$data['title'] =  'Work Activity';
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));

		$data['work_activity']= $this->LoginModel->getWorkActivity($engineer,$date,$shift)->result_array();
		$data['wa']= $this->LoginModel->getWorkActivity($engineer,$date,$shift)->row_array();

		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('admin/shift_choose',$data);
		$this->load->view('template/footer');
	}
	//tampilkan data yang di pilih ke modal
	public function editworkActivity($id,$shift)
	{
		//dapat data user yang dipilih
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));
		$data['detail_shift'] = $this->LoginModel->getWorkActivityById($id,'detail_shift')->row_array();
		$data['shift'] = $shift;

		$this->load->view('admin/editWorkActivityEngineer',$data);
	}

	public function updateWorkActivityEngineer($id,$shift)
	{
		$wa = $this->LoginModel->getById($id,'work_activity');
		$shift = $shift;
		$data = [
			// 'priority' => htmlspecialchars($this->input->post('priority', true)),
			'information' => htmlspecialchars($this->input->post('information', true))		];
			$this->db->update('work_activity', $data); //untuk simpan ke database
			$this->session->set_flashdata('flash' , 'Save');
			$this->session->set_flashdata('message' , 'Congratulation!');
			redirect(base_url()."WorkActivity/afterEdit/".$wa['engineer'].'/'.$wa['work_date'].'/'.$shift); //redirect with parameter
		}

		public function afterEdit($engineer,$date,$shift)
		{
			$data['shift'] = $shift;

			$data['title'] =  'Work Activity';
			$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));

			$data['work_activity']= $this->LoginModel->getWorkActivity($engineer,$date,$shift)->result_array();
			$data['wa']= $this->LoginModel->getWorkActivity($engineer,$date,$shift)->row_array();

			$this->load->view('template/header');
			$this->load->view('template/sidebar',$data);
			$this->load->view('admin/shift_choose',$data);
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