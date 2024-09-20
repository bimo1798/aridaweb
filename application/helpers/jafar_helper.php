<?php 

function is_logged_in()
{
	$ci = get_instance(); //ini untuk memanggil library CI di dalam fungsi is_logged_in
	if(!$ci->session->userdata('nik')) //dikasih tanda seru agar jika session yg login !(bukan)/ belum login ga bisa akses controler menu akses levelnya maka di tendang contoler index login(yaitu login)
	{
		redirect('login');
	}
	else
	{
		$role_id = $ci->session->userdata('role'); //untuk cek session role_id yg berhasil login 
		$menu = $ci->uri->segment(1); //ini buat ambil urutan di url nya cek aja di web CI cari segmen cari segmen uri

		// $queryMenu = $ci->db->get_where('user_menu',['menu' => $menu])->row_array(); //ini untuk ambil nama menu yg ada di tabel user_menu

		// $menu_id = $queryMenu['id']; //ini untuk mengambil id di tabel user_menu sesuai dengan akses level yg login

		$userAccess = $ci->db->get_where('user_login',
			[
				'role' => $role_id
		// 'menu_id' => $menu_id
		]); //ini buat menentukan apakah role_id dan menu_id user yg login nya cocok dengan data yang ada di tabel user_access_menu dan sesuai dengan tabel user_menu untuk bisa masuk

		if($userAccess->num_rows() < 1) //jika user access nya nol maka di block
		{
			redirect('login/blocked');
		}
	}
}