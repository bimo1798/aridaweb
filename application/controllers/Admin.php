<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
public function __construct() //construct itu buat klo jalani controller admin itu yg di cek itu contructnya dulu
{
	parent:: __construct();
		is_logged_in();//helper ini buat sendiri di folder helper namanya bebas dan harus di tambahkan juga di autoload dan tambahkan di library helper, cek aja!
		$this->load->model('LoginModel');
	}
	public function index()
	{
		$data['title'] =  'Adira Finance';
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));

		$data['count_engineer'] = $this->LoginModel->count_('engineer');
		$data['count_job'] = $this->LoginModel->count_('job');
		$data['count_user_login'] = $this->LoginModel->count_('user_login');
		$data['count_location'] = $this->LoginModel->count_('location');

		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('admin/information',$data);
		$this->load->view('template/footer');
	}
	public function listUser()
	{
		$data['title'] =  'User Data';
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));
		
		$data['userAll'] = $this->LoginModel->getAllUser();

		//untuk comboBox insert
		$data['notUserAll'] = $this->LoginModel->getAllNotUser();

		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('admin/ListUser',$data);
		$this->load->view('template/footer');
	}

	//tampilkan data yang di pilih ke modal
	public function editUser($id)
	{
		$data['user'] = $this->LoginModel->getById($id,'user_login');
		$nik = $this->LoginModel->getById($id,'user_login');
		//dapat data user yang dipilih
		$data['userSelect'] = $this->LoginModel->getUserById($nik['user']);

		$this->load->view('admin/editUser',$data);
	}

	//tampilkan data yang di pilih ke modal admin
	public function editEngineer($id)
	{
		$data['engineer'] = $this->LoginModel->getById($id,'engineer');
		$this->load->view('admin/editEngineer',$data);
	}
	//tampilkan data yang di pilih ke modal engineer
	public function editEngineer_($id)
	{
		$data['engineer'] = $this->LoginModel->getById($id,'engineer');
		$this->load->view('engineer/editProfile',$data);
	}
	//tampilkan data yang di pilih ke modal
	public function editLocation($id)
	{
		$data['location'] = $this->LoginModel->getById($id,'location');
		$this->load->view('admin/editLocation',$data);
	}
	//tampilkan data yang di pilih ke modal
	public function editShift($id)
	{
		$data['shift'] = $this->LoginModel->getById($id,'shift');
		$this->load->view('admin/editShift',$data);
	}
	//tampilkan data yang di pilih ke modal
	public function edit_detail_shift($id,$shift)
	{
		$data['detail_shift'] = $this->LoginModel->getById($id,'detail_shift');
		$data['shift'] = $this->LoginModel->getById($shift,'shift');
		$this->load->view('admin/editDetailShift',$data);
	}
	//tampilkan data yang di pilih ke modal
	public function editJob($id)
	{
		$data['job'] = $this->LoginModel->getById($id,'job');
		$this->load->view('admin/editJob',$data);
	}
	//tampilkan data yang di pilih ke modal
	public function editWork($id)
	{
		$data['work'] = $this->LoginModel->getWorkById($id);

		$data['engineer'] = $this->db->get('engineer')->result_array();
		$data['job'] = $this->db->get('job')->result_array();
		$data['location'] = $this->db->get('location')->result_array();
		$data['shift'] = $this->db->get('shift')->result_array();

		$this->load->view('admin/editWork',$data);
	}
	//ke halaman detail_shift
	public function show_detail_shift($id)
	{
		$data['shift'] = $this->LoginModel->getById($id,'shift');
		$data['detail_shift'] = $this->LoginModel->getDetailShiftByShift($id);

		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('admin/detail_shift',$data);
		$this->load->view('template/footer');
	}

	public function administrator()
	{
		$data['title'] =  'Adira Finance';
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));
		$data['administrator'] = $this->db->get('user_admin')->result_array();//ambil semua data di tabel
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('admin/administrator',$data);
		$this->load->view('template/footer');
	}

	public function save()
	{

		$this->form_validation->set_rules('nik','NIK','required|trim');
		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');

		//ini untuk membuat kondisi form validasi
		if($this->form_validation->run() == false){
			$data['title'] =  'Administrator Data';
			$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));

			$data['administrator'] = $this->db->get('user_admin')->result_array();//ambil semua data di tabel user_role
			$this->load->view('template/header');
			$this->load->view('template/sidebar',$data);
			$this->load->view('admin/administrator',$data);
			$this->load->view('template/footer');
		}
		else{
			$upload_photo = $_FILES['photo']['name'];

			if ($upload_photo){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2048'; //ini size 2mb
				$config['upload_path'] = './assets/images/foto_profile/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('photo')){
					$new_photo = $this->upload->data('file_name');
					$data = [
						// ini dari database(kiri)             ini dari name tiap textfield (kanan)
						'nik' => htmlspecialchars($this->input->post('nik', true)),
						'name' => htmlspecialchars($this->input->post('name', true)),
						'email' => htmlspecialchars($this->input->post('email', true)),
						'password' => htmlspecialchars(md5($this->input->post('password', true))),
						'photo' => $new_photo,
					];

			$this->db->insert('user_admin', $data); //untuk simpan ke database
			$this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
			$this->session->set_flashdata('flash' , 'Save'); // unutk munculkan alert
			
			redirect('admin/administrator'); //untuk ngelink kemana jika kondisi sukses di simpan
		}else{

			echo $this->upload->display_errors();
		}
	}
}
}
	//tampilkan data yang di pilih ke modal
public function editAdministrator($id)
{
	$data['administrator'] = $this->LoginModel->getById($id,'user_admin');
	$this->load->view('admin/editAdministrator',$data);
}

public function update($id)
{
	$this->form_validation->set_rules('nik','NIK','required|trim');
	$this->form_validation->set_rules('name','Name','required|trim');
	$this->form_validation->set_rules('email','Email','required|trim');
	$this->form_validation->set_rules('password','Password','required|trim');

	//ini untuk membuat kondisi form validasi
	if($this->form_validation->run() == false){
		$data['title'] =  'Administrator Data';
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));

			$data['administrator'] = $this->db->get('user_admin')->result_array();//ambil semua data di tabel 
			$this->load->view('template/header');
			$this->load->view('template/sidebar',$data);
			$this->load->view('admin/administrator',$data);
			$this->load->view('template/footer');
		}
		else{
			// $id = $this->input->post('id');
			$data['administrator'] = $this->LoginModel->getById($id,'user_admin');

			$upload_photo = $_FILES['photo']['name'];

			if ($upload_photo){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2048'; //ini size 2mb
				$config['upload_path'] = './assets/images/foto_profile/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('photo')){

					// hapus foto lama di folder
					$old_photo = $data['user_admin']['photo'];
					if ($old_photo != 'default.jpg' || $old_photo == "") {
						//pakai FCPATH karna ini pake form_open_multipart di vew nya
						unlink(FCPATH . '/assets/images/foto_profile/'. $old_photo);
					}
					//ambil nama file yag baru di upload
					$new_photo = $this->upload->data('file_name');
					$data = [
						'photo' => $new_photo
					];
					$this->LoginModel->update($id,'user_admin', $data);
				}else{

					echo $this->upload->display_errors();
				}
			}

			$data = [
						// ini dari database(kiri)             ini dari name tiap textfield (kanan)
				'nik' => htmlspecialchars($this->input->post('nik', true)),
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => htmlspecialchars(md5($this->input->post('password', true)))
			];
			$this->LoginModel->update($id,'user_admin', $data); //untuk simpan ke database
			$this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
			$this->session->set_flashdata('flash' , 'Save'); // unutk munculkan alert

		    redirect('admin/administrator'); //untuk ngelink kemana jika kondisi sukses di simpan

		}
	}


	public function delete($id) 
	{
		$this->LoginModel->delete($id,'user_admin');
            $this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
            $this->session->set_flashdata('flash' , 'Delete');
            redirect('admin/administrator');

        }

        public function pdf($date)
        {
        	$this->load->library('mypdf');


        	$data['title'] =  'Report';
        	$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));
        	$data['wa']= $this->LoginModel->getWorkActivityByDate($date)->row_array();
        	$data['work_activity']= $this->LoginModel->getWorkActivityByDate($date)->result_array();

        	$filename = 'Laporan '. $data['wa']['name'].' '.$data['wa']['shift'].' '.$data['wa']['work_date'];
        	$this->mypdf->generate('admin/pdf',$data, $filename);
        }

        public function excel($date)
        {

        	$data['title'] =  'Report';
        	$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));
        	$data['wa']= $this->LoginModel->getWorkActivityByDate($date)->row_array();
        	$data['work_activity']= $this->LoginModel->getWorkActivityByDate($date)->result_array();

        	$filename = 'Laporan '. $data['wa']['name'].' '.$data['wa']['shift'].' '.$data['wa']['work_date'];

			//load library Excel
        	require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel.php');
        	require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
			//buat obj baru
        	$objPHPExcel = new PHPExcel();
			//ini untuk atur propeties saat file sudah di  convert
        	$objPHPExcel->getProperties()->setCreator($filename);
        	$objPHPExcel->getProperties()->setLastModifiedBy($filename);
        	$objPHPExcel->getProperties()->setTitle($filename);
        	$objPHPExcel->getProperties()->setSubject("");
        	$objPHPExcel->getProperties()->setDescription("");
			//set index yang active
        	$objPHPExcel->setActiveSheetIndex(0);
			//set Column value sheet active
        	$objPHPExcel->getActiveSheet()->SetCellValue('A1','No');
        	$objPHPExcel->getActiveSheet()->SetCellValue('B1','Start Time');
        	$objPHPExcel->getActiveSheet()->SetCellValue('C1','Response Time');
        	$objPHPExcel->getActiveSheet()->SetCellValue('D1','Activity');
        	$objPHPExcel->getActiveSheet()->SetCellValue('E1','Priority');
        	$objPHPExcel->getActiveSheet()->SetCellValue('F1','Information');
			//set Column DIMENSION sheet active
        	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(4);
        	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(13);
        	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(17);
        	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
        	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
        	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(42);

			//set align value cell sheet active
        	$style=array('alignment' =>array('horizontal'=>PHPExcel_Style_Alignment::HORIZONTAL_CENTER,));
        	$objPHPExcel->getActiveSheet()->getDefaultStyle()->applyFromArray($style);

			//set border color
        	$objPHPExcel->getActiveSheet()->getStyle('A2:F2')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

			// $objPHPExcel->getActiveSheet(1)->getStyle('A2:F2')->getBorders()->getAllBorders()->getColor()->setRGB('CC0000');

			//set cell background color
        	$objPHPExcel->getActiveSheet()->getStyle('A1:F1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        	$objPHPExcel->getActiveSheet()->getStyle('A1:F1')->getFill()->getStartColor()->setRGB('C7D5E2');

			//set Value sheet Active
        	$baris = 2;
        	$no=1;

        	foreach ($data['work_activity'] as $w) {

        		$objPHPExcel->getActiveSheet()->SetCellValue('A'.$baris, $no);
        		$objPHPExcel->getActiveSheet()->SetCellValue('B'.$baris, $w['time_start']);
        		$objPHPExcel->getActiveSheet()->SetCellValue('C'.$baris, $w['respon_time']);
        		$objPHPExcel->getActiveSheet()->SetCellValue('D'.$baris, $w['activity_shift']);
        		$objPHPExcel->getActiveSheet()->SetCellValue('E'.$baris, $w['priority']);
        		$objPHPExcel->getActiveSheet()->SetCellValue('F'.$baris, $w['information']);

        		$no++;
        		$baris++;
        	}

			//buat nama file excel
        	$filenameExcel = $filename.'.xlsx';

        	$objPHPExcel->getActiveSheet()->setTitle($filename);

			//ini bagian penting dalam convert excel on php
        	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        	header('Content-Disposition: attachment;filename="'.$filenameExcel.'"');
        	header('Cache-Control: max-age=0');

        	$Writer=PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        	$Writer->save('php://output');

        	exit;

        }



    }