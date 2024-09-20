  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y') ?> Adira.</strong>
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<!-- Bootstrap -->
<script src="<?=base_url() ?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?=base_url() ?>assets/AdminLTE/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?=base_url() ?>assets/AdminLTE/plugins/chart.js/Chart.min.js"></script>
<script src="<?=base_url() ?>assets/AdminLTE/dist/js/demo.js"></script>
<script src="<?=base_url() ?>assets/AdminLTE/dist/js/pages/dashboard3.js"></script>

<!-- Bootstrap 4 -->
<script src="<?=base_url() ?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url() ?>assets/AdminLTE/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?=base_url() ?>assets/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<!-- SweetAlert2 -->
<script>
  $('.tombol-hapus').on('click', function () {
    event.preventDefault();
    const href = $(this).attr("href");
    swal({
      title: 'Are you sure?',
      text: "Delete Data",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes'
    }).then((result) => {
      if (result.value) {
        window.location.href = href;
      }
    });
  });
</script>
<!-- EDIT -->
<script type="text/javascript">
  $(document).ready(function () {
    $("body").on('click', '.view_data', function () {
      var url = $(this).attr("href");
      var id = $(this).attr("id");
      $.ajax({
        url: url+id,
        type: "POST",
        data: {id: id},
        success: function (data) {
          $("#data").html(data);
          $("#editModal").modal('show', {backdrop: 'true'});
        }
      });
    });
  });
</script>
<!-- untuk input hanya angka -->
<script>
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))

      return false;
    return true;
  }
</script>
<!-- agar saat pilih file upload masuk ke dalam tag input file browse bootstrap -->
<script type="text/javascript">
  $('.custom-file-input').on('change', function(){
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });
</script>
</body>
</html>