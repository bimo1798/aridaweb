	<form action="<?= base_url('detail_shift/update/').$detail_shift['id'].'/'.$shift['id'] ?>" method="post" class="form-horizontal">
    <div class="form-group">
     <label>Time Start</label>
     <?php $time = date('H:i', strtotime($detail_shift['time_start'])); ?>
     <input class="form-control" type="time" name="time_start" id="time_start" value="<?= $time ?>" placeholder="Time Start">
   </div>
   <div class="form-group">
     <label>Activity Shift</label>
     <input class="form-control" type="text" name="activity" id="activity" value="<?= $detail_shift['activity_shift'] ?>" placeholder="Activity ex : Service DB">
   </div>
 </div>
 <div class="modal-footer">
  <input type="submit" name="submit" value="Save" class="btn btn-primary "/>
</form>