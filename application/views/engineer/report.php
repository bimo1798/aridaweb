 <!-- /.card-header -->
 <div class="card-body">
  <br>
  <h3>Report</h3>
  <hr>
  <br>
  <form action="<?= base_url('userengineer/report_choose/').$location ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label>Date</label>
      <input type="hidden" name="engineer" id="engineer" value="<?=$user['id'] ?>">
      <input type="date" name="date" id="date" class="form-control"   required>
    </div>
    <div class="form-group">
      <label>Shift</label>
      <select name="shift" id="shift" class="form-control">
        <?php foreach ($shift as $r) : ?>
          <option value="<?= $r['shiftId'] ?>"> <?= $r['shift'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>
  <div class="modal-footer">
    <input type="submit" name="submit" value="Search" class="btn btn-primary"/>
  </form>

</div>
<!-- /.card -->



</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->

<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->