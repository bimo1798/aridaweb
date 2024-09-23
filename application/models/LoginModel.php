<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_model
{
	//get user 2 tabel by nik
	public function getUser($nik)
	{
		$query = "SELECT `a`.id, `a`.nik, `a`.photo, `a`.email, `a`.name ,`a`.password
		FROM (select id, nik, photo, email, name , password from engineer 
		union all 
		select id, nik , photo, email, name, password from user_admin) a
		where `a`.nik = '$nik' ";
		return $this->db->query($query)->row_array();
	}
	//get user 2 tabel by id
	public function getUserById($id)
	{
		$query = "SELECT `a`.id, `a`.nik , `a`.name ,`a`.password /*ini mau tampilin menu yang ada di  tabel user_menu dan tampilin nya yang ada di tabel user_sub_menu*/
		FROM (select id, nik, name , password from engineer 
		union all 
		select id, nik ,name, password from user_admin) a
		where `a`.id = '$id' ";
		return $this->db->query($query)->row_array();
	}
/*
	Ini untuk semua user yang sudah terdaftar di table user_login
*/
	public function getAllUser()
	{
		$query = "SELECT `b`.id , `a`.nik , `a`.name ,`a`.email ,`a`.password , `b`.role 
		FROM (select id, nik, name ,email, password from engineer 
		union all 
		select id, nik ,name,email, password from user_admin) a
		join user_login b
		ON `a`.id = `b`.user";
		return $this->db->query($query)->result_array();
	}
	/*
		ini untuk semua yang belum terdaftar sbg user di table user_login
	*/
		public function getAllNotUser()
		{
			$query = "SELECT `a`.id , `a`.name  
			FROM (select id, name from engineer 
			union all 
			select id, name from user_admin) a 
			where `a`.id not in(select user from user_login) ";
			return $this->db->query($query)->result_array();
		}
		public function countUserAdmin()
		{
			$query = "SELECT * from user_login where role = '1' ";
			return $this->db->query($query)->num_rows();
		}

		public function count_($tabel)
		{
			$query = "SELECT * from $tabel ";
			return $this->db->query($query)->num_rows();
		}
		 
	//get detail_shift by id and not in tabel activity_work filter by date and engineer
		public function getDetailShiftByShift($shift, $engineer)
		{

			$date_ = date('Y-m-d') ; 

			$query = "SELECT *
			FROM detail_shift ds
			where `ds`.shift = '$shift' AND `ds`.id not in(select `wa`.detail_shift from work_activity wa where `wa`.work_date = '$date_' AND `wa`.engineer = '$engineer' ) ";
			return $this->db->query($query)->result_array();
		}

		//get detail_shift by id and not in tabel activity_work filter by date and engineer
		public function getDetailShift($shift)
		{
			$query = "SELECT *
			FROM shift s
			JOIN detail_shift ds
			ON `s`.id = `ds`.shift
			where `s`.id = '$shift'";
			return $this->db->query($query)->result_array();
		}


		public function getDLS($work)
		{
			$query = "SELECT `dls`.id , `w`.engineer ,`w`.id as workId ,`j`.job , `l`.location , `l`.id as locationId, `e`.name, `s`.shift
			FROM detail_location_shift dls
			JOIN work w 
			ON `dls`.work = `w`.id
			JOIN shift s ON `dls`.shift = `s`.id
			JOIN engineer e ON `w`.engineer = `e`.id
			JOIN job j ON `w`.job = `j`.id
			JOIN location l ON `w`.location = `l`.id
			where `dls`.work = '$work' ";
			return $this->db->query($query);
		}
		public function getDLS_info($work)
		{
			$query = "SELECT `w`.engineer ,`w`.id ,`j`.job , `l`.location , `l`.id as locationId, `e`.name
			FROM work w 
			JOIN engineer e ON `w`.engineer = `e`.id
			JOIN job j ON `w`.job = `j`.id
			JOIN location l ON `w`.location = `l`.id
			where `w`.id = '$work' ";
			return $this->db->query($query);
		}

		public function getDLS_Shift($work)
		{
			$query = "SELECT `s`.id,`s`.shift
			FROM detail_location_shift dls
			RIGHT JOIN shift s ON `dls`.shift = `s`.id
			where `s`.id not in (select shift from detail_location_shift where work ='$work' )";
			return $this->db->query($query);
		}

		public function getShiftByEngineer($engineer)
		{
			$query = "SELECT `w`.id , `w`.engineer , `s`.shift , `s`.id as shiftId, `s`.start_time , `s`.end_time
			FROM work w 
			JOIN shift s 
			ON `w`.shift = `s`.id
			where `w`.engineer = '$engineer'
			group by `s`.shift";
			return $this->db->query($query)->result_array();
		}

		public function getWorkByLocEngineer($engineer,$location)
		{
			$query = "SELECT *
			FROM work 
			where engineer = '$engineer'
			AND  location='$location' ";
			return $this->db->query($query)->row_array();
		}
		public function getDetailShiftEngineerWork($work)
		{
			$query = "SELECT `ds`.id ,`ds`.work , `ds`.shift as shiftDS , `s`.shift , `s`.id as shiftId, `s`.start_time , `s`.end_time
			FROM detail_location_shift ds
			JOIN shift s 
			ON `ds`.shift = `s`.id
			where `ds`.work = '$work' 
			order by `s`.shift ASC";

			return $this->db->query($query);
		}
		public function getDetailShiftEngineerWork_($shift,$work)
		{
			$query = "SELECT `ds`.id ,`ds`.work , `ds`.shift as shiftDS , `s`.shift , `s`.id as shiftId, `s`.start_time , `s`.end_time
			FROM detail_location_shift ds
			JOIN shift s 
			ON `ds`.shift = `s`.id
			where `ds`.work = '$work'
		    AND `ds`.shift = '$shift' ";

			return $this->db->query($query);
		}
		
		public function getLocationtByEngineer($engineer)
		{
			$query = "SELECT `w`.id , `w`.engineer, `j`.job , `l`.location , `l`.id as locationId
			FROM work w 
			JOIN location l	ON `w`.location = `l`.id
			JOIN job j	ON `w`.job = `j`.id
			where `w`.engineer = '$engineer'";
			return $this->db->query($query)->result_array();
		}

	/*
	Ini untuk semua work
*/
	public function getWork()
	{
		$query = "SELECT `w`.id , `w`.engineer , `e`.name , `l`.location ,`j`.job 
		FROM work w JOIN location l ON `w`.location = `l`.id
		JOIN job j ON `w`.job = `j`.id
		JOIN engineer e ON `w`.engineer = `e`.id";
		return $this->db->query($query)->result_array();
	}
	
	public function getEngineerNotInWork()
	{
		$query = "SELECT * 
		FROM engineer
		where id not in (select engineer from work)";
		return $this->db->query($query)->result_array();
	}
	public function getEngineerLocationNotInWork($engineer)
	{
		$query = "SELECT * 
		FROM location
		where id not in (select location from work where engineer = '$engineer')";
		return $this->db->query($query)->result_array();
	}
	/*
	Ini untuk semua work filter by location AND engineer
*/
	public function getWorkByLocationEngineer($location,$engineer)
	{
		$query = "SELECT `w`.id , `w`.engineer , `w`.shift as shiftId, `e`.name , `s`.shift ,`s`.id as shiftId , `l`.location ,`l`.id as locationId ,`j`.job 
		FROM work w JOIN shift s ON `w`.shift = `s`.id
		JOIN location l ON `w`.location = `l`.id
		JOIN job j ON `w`.job = `j`.id
		JOIN engineer e ON `w`.engineer = `e`.id
		where `w`.location ='$location' AND `w`.engineer ='$engineer'" ;
		return $this->db->query($query);
	}
	/*
	Ini untuk semua work filter by work id
*/
	public function getWorkById($id)
	{
		$query = "SELECT `w`.id ,`w`.engineer as engineerId , `w`.job as jobId , `w`.location as locationId , `e`.name , `l`.location ,`j`.job 
		FROM work w
		JOIN location l ON `w`.location = `l`.id
		JOIN job j ON `w`.job = `j`.id
		JOIN engineer e ON `w`.engineer = `e`.id
		where `w`.id='$id'";
		return $this->db->query($query)->row_array();
	}

	//get work_activity by engineer && date
	public function getWorkActivity($engineer,$date,$shift)
	{
		$query = "SELECT `ds`.time_start, `w`.detail_shift ,`ds`.activity_shift , `w`.work_date , `w`.respon_time ,`w`.id ,`w`.information, `e`.name, `s`.shift  
		FROM work_activity w 
		JOIN detail_shift ds 
		ON `w`.detail_shift = `ds`.id
		JOIN engineer e 
		ON `w`.engineer = `e`.id
		JOIN shift s 
		ON `ds`.shift = `s`.id
		where `w`.engineer ='$engineer' 
		AND `w`.work_date = '$date' 
		AND `s`.id = '$shift' ";
		return $this->db->query($query);
	}


	//get id work by location and engineer
	public function getWorkByLocEng($location, $engineer)
	{
		$query = "SELECT `w`.id from work w where `w`.location = '$location' AND `w`.engineer = '$engineer'";
		return $this->db->query($query)->row_array();
	}
		//get shift by location work
	public function getShiftLocation($work)
	{
		$query = "SELECT `s`.id as shiftId , `s`.shift ,`s`.start_time ,`s`.end_time , `dls`.work
		 from detail_location_shift dls JOIN shift s ON `dls`.shift = `s`.id where `dls`.work like '%$work%' 
		 order by `s`.shift ASC";
		return $this->db->query($query)->result_array();
	}

	//get work_activity by engineer && date & shift & location
	public function getWorkActivityEngineer($engineer,$date,$shift,$location)
	{
		$query = "SELECT `ds`.time_start, `wa`.respon_time ,`ds`.activity_shift , `wa`.information , `dls`.work , `wa`.work_date , `e`.name , `wa`.detail_shift , `w`.location , `dls`.shift as shiftId , `s`.shift , `l`.location as location_name , `e`.id as engineerId
		FROM 
		work_activity wa join detail_shift ds ON `wa`.detail_shift = `ds`.id
		JOIN detail_location_shift dls ON `ds`.shift = `dls`.shift
		JOIN work w ON `w`.id = `dls`.work
		JOIN shift s ON `s`.id = `dls`.shift
		JOIN engineer e ON `w`.engineer = `e`.id
		JOIN location l ON `w`.location = `l`.id
		where 
		`wa`.work_date = '$date' AND `w`.location='$location' AND `wa`.engineer = '$engineer' AND `dls`.shift = '$shift'
		AND `e`.id = '$engineer'";
		return $this->db->query($query);
	}
	//get work_activity by date
	public function getWorkActivityByDate($date)
	{
		$query = "SELECT `ds`.time_start, `w`.detail_shift ,`ds`.activity_shift , `w`.work_date , `w`.respon_time ,`w`.id , `w`.information, `e`.name, `s`.shift  
		FROM work_activity w 
		JOIN detail_shift ds 
		ON `w`.detail_shift = `ds`.id
		JOIN engineer e 
		ON `w`.engineer = `e`.id
		JOIN shift s 
		ON `ds`.shift = `s`.id
		where `w`.work_date ='$date' 
		order by `e`.name AND `s`.shift";
		return $this->db->query($query);
	}
	//get work_activity by id
	public function getWorkActivityById($id)
	{
		$query = "SELECT `ds`.time_start, `w`.detail_shift ,`ds`.activity_shift , `w`.work_date , `w`.respon_time ,`w`.id , `w`.information, `e`.name, `s`.shift  
		FROM work_activity w 
		JOIN detail_shift ds 
		ON `w`.detail_shift = `ds`.id
		JOIN engineer e 
		ON `w`.engineer = `e`.id
		JOIN shift s 
		ON `ds`.shift = `s`.id
		where `w`.id ='$id' ";
		return $this->db->query($query);
	}

	function delete($id,$table)
	{
		$this->db->where('id', $id);
		$this->db->delete($table);
	}

	function getById($id,$table)
	{
		$this->db->where('id', $id);
		return $this->db->get($table)->row_array();
	}
	function getByIdWork($id)
	{
		$this->db->where('work', $id);
		return $this->db->get('detail_location_shift')->row_array();
	}

    // Merubah data kedalam database
	function update($id,$table, $data)
	{
		$this->db->where('id', $id);
		$this->db->update($table, $data);
	}


}