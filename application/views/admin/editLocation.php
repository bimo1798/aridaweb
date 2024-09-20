  <form action="<?= base_url('location/update/').$location['id'] ?>" method="post" class="form-horizontal">
    <div class="form-group">
      <label>Location</label>
      <input class="form-control" type="text" name="location" id="location" value="<?= $location['location']; ?>" placeholder="Location Name">
    </div>
  </div>
  <div class="modal-footer">
    <input type="submit" name="submit" value="Save" class="btn btn-primary "/>
  </form>