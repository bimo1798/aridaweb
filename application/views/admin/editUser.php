   <form action="<?=base_url('user/update/').$user['id'] ?>" method="post" class="form-horizontal">
    <div class="form-group">
      <label>User</label>
      <input class="form-control" type="text" name="name" id="name" value="<?= $userSelect['name'] ?>" readonly>
    </div>
    <div class="form-group">
      <label>Role</label>
      <select class="form-control" name="role" id="role">
        <option value="1">Admin</option>
        <option value="2">MII_Engineer</option>
      </select>
    </div>
  </div>
  <div class="modal-footer">
    <input type="submit" name="submit" value="Save" class="btn btn-primary "/>
  </form>