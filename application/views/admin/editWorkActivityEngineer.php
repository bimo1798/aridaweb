<form action="<?=base_url('workactivity/updateWorkActivityEngineer/').$detail_shift['id'].'/'. $shift ?>" method="post" class="form-horizontal">
 	<div class="form-group">
 		<label>Activity</label>
 		<input class="form-control" type="text" name="activity" id="activity" value="<?=$detail_shift['activity_shift'] ?>" readonly>
 	</div>
 	<!-- <div class="form-group">
 		<label>Priority</label>
 		<select class="form-control" name="priority" id="priority">
 			<option value="<?=$detail_shift['priority'] ?>"><?= $detail_shift['priority'] ?></option>
 			<option value="">----------------------------------------------</option>
 			<option value="H">H</option>
 			<option value="M">M</option>
 			<option value="S">L</option>
 		</select>
 	</div> -->
 	<div class="form-group">
 		<label>Information</label>
 		<input class="form-control" type="text" name="information" id="information" 
 		value="<?=$detail_shift['information'] ?>" placeholder="Information">
 	</div>
 </div>
 <div class="modal-footer">
 	<input type="submit" name="submit" value="Save" class="btn btn-primary"/>
 </form>