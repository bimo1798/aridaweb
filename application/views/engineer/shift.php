 <!-- /.card-header -->
 <div class="card-body">
  <!-- <form> -->
   <table id="example2" class="table table-bordered table-striped">
    <thead>
     <tr>
      <th style="width: 50px">No</th>
      <th style="width: 150px">Time Start</th>
      <th>Activity</th>
      <th style="width: 10px">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php $i =1; ?> <!--ini buat angka -->
   <?php foreach ($detail_shift as $r) : ?>
    <tr>
     <td><?= $i ?></td>
     <td><?=$r['time_start']; ?></td>
     <td><?=$r['activity_shift']; ?></td>
     <td >
       <a href="<?=base_url('userengineer/choose/').$s['shiftDS'].'/'.$s['work'].'/' ?>" time="<?= $r['time_start'] ?>" id="<?= $r['id'] ?>"  data-toggle="modal" data-target="#editModal" class="badge badge-warning view_data">Choose</a> 
    </td>
  </tr>
  <?php $i++; ?> <!-- ini buat penambahan angka-->
<?php endforeach; ?>
</tbody>
</table>
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
          <h5 class="modal-title" id="myModalLabel"></h5>
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