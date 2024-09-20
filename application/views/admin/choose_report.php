 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $title ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form action="<?= base_url('WorkActivity/report_choose/').$engineer.'/'.$location ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Date</label>
              <input type="hidden" name="engineer" id="engineer" value="<?=$engineer ?>">
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