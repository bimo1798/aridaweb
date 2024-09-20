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
              <?php  date_default_timezone_set('Asia/Jakarta'); 
              $time = date('H:i:s');
              $date = date('Y-m-d');
              ?>
              <input type="hidden" id="response_time" value="<?=$time ?>">
              <!-- <label class="timestamp"></label> -->
              <?php foreach ($work as $r) : ?>
                  <a href="<?=base_url('workactivity/location/').$r['locationId'].'/'.$r['engineer'] ?>">
                    <button data-toggle="modal" class="btn btn-primary float-right mr-1">
                      <?= $r['location'] ?></button>
                    </a>
                <?php endforeach; ?>
              </div>