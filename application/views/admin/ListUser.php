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
           <button data-toggle="modal" data-target="#additem" class="btn btn-primary float-right">
            <i class="fas fa-plus"></i>Add</button>
            <!-- <button type="submit" class="btn btn-primary float-right">Add</button> -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIK</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i =1; ?> <!--ini buat angka -->
                <?php foreach ($userAll as $r) : ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?=$r['nik']; ?></td>
                    <td><?=$r['name']; ?></td>
                    <td><?=$r['email']; ?></td>
                    <td><?= $r['password']; ?></td>
                    <?php
                    $role = "MII-Enginer";
                    if ($r['role']==1) {
                      $role = "Admin";
                    } ?>
                    <td><?=$role; ?></td>
                    <td>
                      <a href="<?= base_url('admin/roleaccess/'). $r['id']; ?>" class="badge badge-warning">Access</a><!--ini pindah ke contoler roleaccess sambil kirimkan id dari role nya -->
                      <a href="<?=base_url('admin/editUser/') ?>" id="<?= $r['id'] ?>"  data-toggle="modal" data-target="#editModal" class="badge badge-success view_data">Edit</a> <!--class ini dpt getboostrap cari aja pils & pilih yg links-->
                      <a href="<?=base_url('user/delete/'.$r['id']) ?>" class="badge badge-danger tombol-hapus">Delete</a> <!--class ini dpt getboostrap cari aja pils-->
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

<!-- modal country large -->
<div class="modal fade" id="additem" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="largeModalLabel">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('user/save') ?>" method="post" class="form-horizontal">
          <div class="form-group">
            <label>User</label>
            <select class="form-control" name="user" id="user">
             <?php foreach ($notUserAll as $n) : ?>
              <option value="<?=$n['id']; ?>"><?=$n['name']; ?></option>
            <?php endforeach; ?>
          </select>
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
    </div>
  </div>
</div>
</div>
<!-- end modal large -->


<!-- memulai modal nya. pada id="$myModal" harus sama dengan data-target="#myModal" pada tombol di atas -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Edit User Access</h5>
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

