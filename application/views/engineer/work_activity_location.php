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
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 50px">No</th>
                    <th>Location</th>
                    <th>Job</th>
                    <th style="width: 150px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i =1; ?> <!--ini buat angka -->
                  <?php foreach ($location as $r) : ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?=$r['location']; ?></td>
                      <td><?=$r['job']; ?></td>
                      <td>
                       <a href="<?=base_url('userengineer/work_activity/').$user['id'].'/'. $r['locationId'] ?>"  class="badge badge-warning">Choose</a> <!--class ini dpt getboostrap cari aja pils & pilih yg links-->
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