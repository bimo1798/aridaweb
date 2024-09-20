  <form action="<?=base_url('shift/update/').$shift['id'] ?>" method="post" class="form-horizontal">
  	<div class="form-group">
  		<label>Shift</label>
  		<input class="form-control" type="text" name="shift" id="shift" value="<?=$shift['shift']  ?>" placeholder="Shift">
  	</div>
  	<div class="form-group">
  		<label>Start Time</label>
  		<input class="form-control" type="time" name="start_time" id="start_time" value="<?=$shift['start_time']  ?>" placeholder="Start Time">
  	</div>
  	<div class="form-group">
  		<label>End Time</label>
  		<input class="form-control" type="time" name="end_time" id="end_time" value="<?=$shift['end_time']  ?>" placeholder="End Time">
  	</div>
  </div>
  <div class="modal-footer">
  	<input type="submit" name="submit" value="Save" class="btn btn-primary "/>
  </form>