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
          <!-- /.card-header -->
          <div class="row no-gutters">
            <div class="col-md-4">
              <img class="card-img-top" src="<?=base_url('assets/images/foto_profile/').$user['photo'] ?>" alt="Card image cap">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h4 >NIK : <?= $user['nik']; ?></h4>
                <h4 >Name : <?= $user['name']; ?></h4>
                <h4 >Email  : <?= $user['email']; ?></h4>
                <br> 
                <a href="<?=base_url('Admin/editEngineer_/') ?>" id="<?= $user['id'] ?>"  data-toggle="modal" data-target="#editModal" class="btn btn-primary float-left view_data">Edit</a>
                </div>

              </div>
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
          <h5 class="modal-title" id="myModalLabel">Edit Profile</h5>
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