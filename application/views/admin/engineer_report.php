<!--Content Wrapper. Contains page content -->
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
          <!-- <div class="card-header">
           <button data-toggle="modal" data-target="#additem" class="btn btn-primary float-right">
            <i class="fas fa-plus"></i>Add</button> -->
            <!-- <button type="submit" class="btn btn-primary float-right">Add</button>
          </div> -->
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th style="width: 50px">NIK</th>
                  <th>Name</th>
                  <!-- <th>Email</th>
                  <th>Password</th>
                  <th>Role</th> -->
                  <th style="width: 15px">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i =1; ?> <!--ini buat angka -->
                <?php foreach ($engineer as $r) : ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?=$r['nik']; ?></td>
                    <td><?=$r['name']; ?></td>
                   <!--  <td><?=$r['email']; ?></td>
                    <td><?= $r['password']; ?></td>
                    <?php
                    $role = "MII-Enginer";
                    if ($r['role']==1) {
                      $role = "Admin";
                    } ?>
                    <td><?=$role; ?></td> -->
                    <td>
                      <a href="<?= base_url('WorkActivity/work_activity_location/'). $r['id']; ?>" class="badge badge-warning">Choose</a>
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
<!-- /.content-wrapper