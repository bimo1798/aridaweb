<!DOCTYPE html>
<html lang="en">
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

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-warning navbar-light elevation-3" style="height: 70px">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
         <div class="image"> 
          <img style="width: 70px" src="<?=base_url() ?>assets/logo/adira.png" alt="User Avatar">
        </div>
      </li>
      <li class="nav-item">
       <div class="image"> 
        <img style="width: 70px" src="<?=base_url() ?>assets/logo/mii.png" alt="User Avatar">
      </div>
    </li>
  </ul>
</nav>
  <!-- /.navbar -->