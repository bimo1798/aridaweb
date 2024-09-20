<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Engineer extends CI_Controller {
public function __construct() //construct itu buat klo jalani controller admin itu yg di cek itu contructnya dulu
{
	parent:: __construct();
		is_logged_in();//helper ini buat sendiri di folder helper namanya bebas dan harus di tambahkan juga di autoload dan tambahkan di library helper, cek aja!
		$this->load->model('LoginModel');
	}
	public function index()
	{
		$data['title'] =  'Engineer Data';
		$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));
		
		$data['engineer'] = $this->db->get('engineer')->result_array();//ambil semua data di tabel
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('admin/engineer',$data);
		$this->load->view('template/footer');
	}

	public function save()
	{

		$this->form_validation->set_rules('nik','NIK','required|trim');
		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('phone','Phone','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');

		//ini untuk membuat kondisi form validasi
		if($this->form_validation->run() == false){
			$data['title'] =  'Engineer Data';
			$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));

			$data['engineer'] = $this->db->get('engineer')->result_array();//ambil semua data di tabel user_role
			$this->load->view('template/header');
			$this->load->view('template/sidebar',$data);
			$this->load->view('admin/engineer',$data);
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
					


				}else{
					$new_photo = ' ';
				}
			}
			$data = [
						// ini dari database(kiri)             ini dari name tiap textfield (kanan)
						'nik' => htmlspecialchars($this->input->post('nik', true)),
						'name' => htmlspecialchars($this->input->post('name', true)),
						'number_phone' => htmlspecialchars($this->input->post('phone', true)),
						'start_date_site' => htmlspecialchars($this->input->post('start_date', true)),
						'end_date_site' => htmlspecialchars($this->input->post('end_date', true)),
						'email' => htmlspecialchars($this->input->post('email', true)),
						'photo' => $new_photo,
						'password' => htmlspecialchars(md5($this->input->post('password', true)))
					];

			$this->db->insert('engineer', $data); //untuk simpan ke database
			$this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
			$this->session->set_flashdata('flash' , 'Save'); // unutk munculkan alert
			
			redirect('engineer'); //untuk ngelink kemana jika kondisi sukses di simpan
		}

	}
	//UNTUK BACKEND / ADMIN
	public function update($id)
	{
		$this->form_validation->set_rules('nik','NIK','required|trim');
		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('phone','Phone','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');

	//ini untuk membuat kondisi form validasi
		if($this->form_validation->run() == false){
			$data['title'] =  'Engineer Data';
			$data['user'] = $this->LoginModel->getUser($this->session->userdata('nik'));

			$data['engineer'] = $this->db->get('engineer')->result_array();//ambil semua data di tabel user_role
			$this->load->view('template/header');
			$this->load->view('template/sidebar',$data);
			$this->load->view('admin/engineer',$data);
			$this->load->view('template/footer');
		}
		else{
			// $id = $this->input->post('id');
			$data['engineer'] = $this->LoginModel->getById($id,'engineer');

			$upload_photo = $_FILES['photo']['name'];

			if ($upload_photo){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2048'; //ini size 2mb
				$config['upload_path'] = './assets/images/foto_profile/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('photo')){

					// hapus foto lama di folder
					$old_photo = $data['engineer']['photo'];
					if ($old_photo != 'default.jpg' || $old_photo == "") {
						//pakai FCPATH karna ini pake form_open_multipart di vew nya
						unlink(FCPATH . '/assets/images/foto_profile/'. $old_photo);
					}
					//ambil nama file yag baru di upload
					$new_photo = $this->upload->data('file_name');
					$data = [
						'photo' => $new_photo
					];
					$this->LoginModel->update($id,'engineer', $data);
				}else{

					echo $this->upload->display_errors();
				}
			}

			$data = [
						// ini dari database(kiri)             ini dari name tiap textfield (kanan)
				'nik' => htmlspecialchars($this->input->post('nik', true)),
				'name' => htmlspecialchars($this->input->post('name', true)),
				'number_phone' => htmlspecialchars($this->input->post('phone', true)),
				'start_date_site' => htmlspecialchars($this->input->post('start_date', true)),
				'end_date_site' => htmlspecialchars($this->input->post('end_date', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => htmlspecialchars(md5($this->input->post('password', true)))
			];
			$this->LoginModel->update($id,'engineer', $data); //untuk simpan ke database
			$this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
			$this->session->set_flashdata('flash' , 'Save'); // unutk munculkan alert

		    redirect('engineer'); //untuk ngelink kemana jika kondisi sukses di simpan

		}
	}


	//UPDATE PROFILE UNTUK FRONTEND ENGINEER
	public function update_($id)
	{
		
			$data['engineer'] = $this->LoginModel->getById($id,'engineer');

			$upload_photo = $_FILES['photo']['name'];

			if ($upload_photo){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2048'; //ini size 2mb
				$config['upload_path'] = './assets/images/foto_profile/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('photo')){

					// hapus foto lama di folder
					$old_photo = $data['engineer']['photo'];
					if ($old_photo != 'default.jpg' || $old_photo == "") {
						//pakai FCPATH karna ini pake form_open_multipart di vew nya
						unlink(FCPATH . '/assets/images/foto_profile/'. $old_photo);
					}
					//ambil nama file yag baru di upload
					$new_photo = $this->upload->data('file_name');
					$data = [
						'photo' => $new_photo
					];
					$this->LoginModel->update($id,'engineer', $data);
				}else{

					echo $this->upload->display_errors();
				}
			}

			$data = [
						// ini dari database(kiri)             ini dari name tiap textfield (kanan)
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => htmlspecialchars(md5($this->input->post('password', true)))
			];
			$this->LoginModel->update($id,'engineer', $data); //untuk simpan ke database
			$this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
			$this->session->set_flashdata('flash' , 'Save'); // unutk munculkan alert

		    redirect('UserEngineer'); //untuk ngelink kemana jika kondisi sukses di simpan

		}

	public function delete($id) 
	{
		$this->LoginModel->delete($id,'engineer');
            $this->session->set_flashdata('message' , 'Congratulation!'); // unutk munculkan alert
            $this->session->set_flashdata('flash' , 'Delete');
            redirect('engineer');

        }
    }