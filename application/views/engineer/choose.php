 <form action="<?=base_url('userengineer/save/').$shift['shiftId'].'/'.$user['id'].'/'.$detail_shift['id'].'/'.$shift['work'] ?>" method="post" class="form-horizontal">
 	<div class="form-group">
 		<label>Activity</label>
 		<input class="form-control" type="text" name="activity" id="activity" value="<?=$detail_shift['activity_shift'] ?>" readonly>

 		<input class="form-control" type="hidden" name="time_start" id="time_start" value="<?=$detail_shift['time_start'] ?>" readonly>
 		<?php  date_default_timezone_set('Asia/Jakarta'); 
 		$time = date('H:i:s');
 		$date = date('Y-m-d');
 		?>
 		<input class="form-control" type="hidden" name="response_time" id="response_time" value="<?= $time  ?>" readonly>
 		<input class="form-control" type="hidden" name="work_date" id="work_date" value="<?= $date  ?>" readonly>
 	</div>
 	<!-- <div class="form-group">
 		<label>Priority</label>
 		<select class="form-control" name="priority" id="priority">
 			<option value="">-- Choose --</option>
 			<option value="H">H</option>
 			<option value="M">M</option>
 			<option value="S">L</option>
 		</select>
 	</div> -->
 	<div class="form-group">
 		<label>Information</label>
 		<input class="form-control" type="text" name="information" id="information" placeholder="Information">
 	</div>
 </div>
 <div class="modal-footer">
 	<input type="submit" name="submit" value="Save" class="btn btn-primary insert"/>
 </form>

 <!-- untuk validasi tanggal when insert -->
 <script>
 	$(document).ready(function () {
 		$(".insert").on('click', function () {
 			var time_start = document.getElementById("time_start").value;
 			var response_time = document.getElementById("response_time").value;
 			if (response_time < time_start) {
 				event.preventDefault();
 				swal({
 					title: 'Failed',
 					text: "You Can Save this Activity at " + time_start + " O'clock",
 					type: 'warning'
 				})
 			}
 		});
 	});
 </script>