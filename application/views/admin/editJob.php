 <form action="<?=base_url('job/update/').$job['id'] ?>" method="post" class="form-horizontal">
 	<div class="form-group">
 		<label>Job Name</label>
 		<input class="form-control" type="text" name="job" id="job" value="<?=$job['job'] ?>" placeholder="Job Name">
 	</div>
 </div>
 <div class="modal-footer">
 	<input type="submit" name="submit" value="Save" class="btn btn-primary "/>
 </form>