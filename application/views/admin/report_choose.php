<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $title .' '. $wa['name']  ?></h1>
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
          <div class="card-header">
            <a href="<?=base_url('userengineer/pdf/').$wa['engineerId'].'/'.$wa['work_date'].'/'.$wa['shiftId'].'/'.$wa['location'] ?>" >
           <button class="btn btn-default float-right mr-2">
            <i class="fas fa-file-pdf" style="color: red"></i> Pdf</button>
            </a>
            <a href="<?=base_url('userengineer/excel/').$wa['engineerId'].'/'.$wa['work_date'].'/'.$wa['shiftId'].'/'.$wa['location'] ?>" >
           <button class="btn btn-default float-right mr-2">
            <i class="fas fa-file-excel" style="color: green"></i> Excel</button>
            </a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Start Time</th>
                  <th>Response Time</th>
                  <!-- <th>Name</th> -->
                  <th>Activity Shift</th>
                  <th>Information</th>
                </tr>
              </thead>
              <tbody>
                <?php $i =1; ?> <!--ini buat angka -->
                <?php foreach ($work_activity as $r) : ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?=$r['time_start']; ?></td>
                    <td><?=$r['respon_time']; ?></td>
                    <!-- <td><?=$r['name']; ?></td> -->
                    <td><?= $r['activity_shift']; ?></td>
                    <td><?= $r['information']; ?></td>
                  </tr>
                  <?php $i++; ?> <!-- ini buat penambahan angka-->
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
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



