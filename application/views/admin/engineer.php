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
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>No.Handphone</th>
                    <th>Email</th>
                    <th>Date Site</th>
                    <th>End Site</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i =1; ?> <!--ini buat angka -->
                  <?php foreach ($engineer as $r) : ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?=$r['nik']; ?></td>
                      <td><?=$r['name']; ?></td>
                      <td><?=$r['number_phone']; ?></td>
                      <td><?=$r['email']; ?></td>
                      <td><?=$r['start_date_site']; ?></td>
                      <td><?=$r['end_date_site']; ?></td>
                      <td>
                        <a href="<?=base_url('admin/editEngineer/') ?>" id="<?= $r['id'] ?>"  data-toggle="modal" data-target="#editModal" class="badge badge-success view_data">Edit</a> <!--class ini dpt getboostrap cari aja pils & pilih yg links-->
                        <a href="<?=base_url('engineer/delete/'.$r['id']) ?>" class="badge badge-danger tombol-hapus">Delete</a> 
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
          <h5 class="modal-title" id="largeModalLabel">Add New MII-Engineer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- pakai class dari ci untuk form yang ada upload file nya -->
          <?= form_open_multipart('engineer/save');?>
            <div class="form-group">
              <label>NIK</label>
              <input type="text" name="nik" id="nik" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="NIK" required>
            </div>
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required>
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="text"  name="phone" id="phone"  maxlength="13" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Example@gmail.com" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="text" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <label>Start Site</label>
              <input type="date" name="start_date" id="start_date" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="dob">End Site</label>
              <input type="date" name="end_date" id="end_date" class="form-control" required>
            </div>
            <div class="form-group">
              <div class="row">
                <label for="image">Photo</label>
              </div>
              <div class="row">
               <!--  <div class="col-sm-3">
                  <img src="" class="img-thumbnail">
                </div> -->
                <div class="col-sm-12">
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
          <h5 class="modal-title" id="myModalLabel">Edit MII-Engineer</h5>
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

  <!-- untuk validasi tanggal when insert -->
  <script>
   $(document).ready(function () {
    $(".insert").on('click', function () {
      var start_date = document.getElementById("start_date").value;
      var end_date = document.getElementById("end_date").value;
      if (start_date > end_date) {
        event.preventDefault();
        swal({
          title: 'Failed',
          text: "End Date Site Can't be Below from Start Date Site",
          type: 'warning'
        })
      }
    });
  });
</script>
