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
  <!-- SWEET-ALERT2 -->
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"> 
    <div class="message-data" data-message="<?= $this->session->flashdata('message'); ?>"> 
      <script>
        const flashdata = $('.flash-data').data('flashdata');
        const message = $('.message-data').data('message');
        if (flashdata) {
          swal({
            title: message,
            text: 'Success ' + flashdata,
            type: 'success'
          });
        }  
      </script>
    </div>
  </div>
  <!-- END SWEET-ALEERT2 -->
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a href="<?=base_url('userengineer/pdf/').$user['id'].'/'.$wa['work_date'].'/'.$wa['detail_shift'] ?>" >
           <button class="btn btn-default float-right mr-2">
            <i class="fas fa-file-pdf" style="color: red"></i> Pdf</button>
            </a>
            <a href="<?=base_url('userengineer/excel/').$user['id'].'/'.$wa['work_date'].'/'.$wa['detail_shift'] ?>" >
           <button class="btn btn-default float-right mr-2">
            <i class="fas fa-file-excel" style="color: green"></i> Excel</button>
            </a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 3px">No</th>
                  <th>Start Time</th>
                  <th>Response Time</th>
                  <th>Name</th>
                  <th>Activity Shift</th>
                  <th>Priority</th>
                  <th>Information</th>
                  <th style="width: 6px">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i =1; ?> <!--ini buat angka -->
                <?php foreach ($work_activity as $r) : ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?=$r['time_start']; ?></td>
                    <td><?=$r['respon_time']; ?></td>
                    <td><?=$r['name']; ?></td>
                    <td><?= $r['activity_shift']; ?></td>
                    <td><?= $r['priority']; ?></td>
                    <td><?= $r['information']; ?></td>
                    <td>
                      <a href="<?=base_url('workactivity/editworkActivity/') ?>" id="<?= $r['id'].'/'. $shift ?>"  data-toggle="modal" data-target="#editModal" class="badge badge-success view_data">Edit</a>
                    </td>
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


<!-- memulai modal nya. pada id="$myModal" harus sama dengan data-target="#myModal" pada tombol di atas -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Edit Engineer Work Activity</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- memulai untuk konten dinamis -->
      <!-- lihat id="data_siswa", ini yang di pangging pada ajax di bawah -->
      <div class="modal-body" id="data">

      </div>
    </div>
  </div>
</div>

