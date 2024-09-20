  <form action="<?= base_url('admin/update/').$administrator['id']; ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>NIK</label>
    <input type="text" name="nik" id="nik" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="NIK" value="<?= $administrator['nik'] ?>" required>
  </div>
  <div class="form-group">
    <label>Full Name</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" value="<?= $administrator['name'] ?>" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="Example@gmail.com" value="<?= $administrator['email'] ?>" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" name="password" id="password" class="form-control" placeholder="Password" value="<?= $administrator['password'] ?>" required>
  </div>
  <div class="form-group">
    <div class="row">
      <label for="image">Photo</label>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <img src="<?=base_url('assets/images/foto_profile/').$administrator['photo'] ?>" class="img-thumbnail">
      </div>
      <div class="col-sm-9">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="photo" name="photo">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal-footer">
  <input type="submit" name="submit" value="Save" class="btn btn-primary insert"/>
</form>

<!-- agar saat pilih file upload masuk ke dalam tag input file browse bootstrap -->
<script type="text/javascript">
  $('.custom-file-input').on('change', function(){
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });
</script>