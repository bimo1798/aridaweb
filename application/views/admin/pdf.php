<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Adira</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url() ?>assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url() ?>assets/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url() ?>assets/AdminLTE/dist/css/adminlte.min.css">
  <!-- sweetalert css step1-->
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  <!-- jQuery taro di header agar JS yang di dalam body bisa running step2-->
  <script src="<?=base_url() ?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- sweetalert js step3-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
</head>
<body>



  <table style="width: 100%;">
    <tr>
      <td colspan="2">
        <img src="<?=base_url() ?>assets/logo/adira1.png?>" style="width: 140px; height: auto;">
        <img src="<?=base_url() ?>assets/logo/mii.png?>" style="width: 140px; height: auto;">
      </td>
      <td>
        <h3 style="line-height: 1.9; font-weight: bold;">
         Adira Finance
       </h3>
     </td>
   </tr>
 </table>

 <hr class= "line-title">



 <table style="width: 50%;">
  <tr>
    <td><span style="font-size: 10pt;"><strong>Name</strong></span></td>
    <td><span style="font-size: 10pt;"><strong> : <?= $wa['name']; ?></strong></span></td>
  </tr>
  <tr>
    <td><span style="font-size: 10pt;"><strong>Date</strong></span></td>
    <?php $date = date('l, d-m-Y', strtotime($wa['work_date'])); ?>
    <td><span style="font-size: 10pt;"><strong> : <?= $date; ?></strong></span></td>
  </tr>
  <tr>
    <td><span style="font-size: 10pt;"><strong>Shift / Location </strong></span></td>
    <td><span style="font-size: 10pt;"><strong> : <?= $wa['shift'].' / '.$wa['location_name']; ?></strong></span></td>
  </tr>
</table>
<br>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <td align="center" width="5px" style="font-size: 10pt;"><strong>No</strong></td>  
     <td align="center" width="40px" style="font-size: 10pt;"><strong>Start Time</strong></td>      
     <td align="center" width="40px" style="font-size: 10pt;"><strong>Response Time</strong></td>
     <td align="center" width="160px" style="font-size: 10pt;"><strong>Activity Shift</strong></td>  
    <!--  <td align="center" width="10px" style="font-size: 10pt;"><strong>Priority</strong></td> -->
     <td align="center" width="100px" style="font-size: 10pt;"><strong>Information</strong></td>             
   </tr>  
 </thead>

 
 <thead>
  <?php $no =1; ?>
  <?php foreach ($work_activity as $r) : ?>
    <tr>
      <td align="center" style="font-size: 10pt;"><?= $no ?></td>
      <td style="font-size: 10pt;"><?=$r['time_start']; ?></td>
      <td style="font-size: 10pt;"><?=$r['respon_time']; ?></td>
      <td style="font-size: 10pt;"><?=$r['activity_shift']; ?></td>
      <!-- <td style="font-size: 10pt;"><?=$r['priority']; ?></td> -->
      <td style="font-size: 10pt;"><?=$r['information']; ?></td>
    </tr>
    <?php $no++; ?>
  <?php endforeach; ?>

</thead>

</table>
</body>
</html>