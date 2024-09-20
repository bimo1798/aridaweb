<body class="animsition">
  <div class="page-wrapper">
    <div class="page-content--bge5">
      <div class="container">
        <div class="login-wrap">
          <div class="login-content">
            <div class="login-logo" style="background-color: orange;">
              <a href="#">
                <img style="width: 200px" src="<?=base_url() ?>assets/logo/adira.png">
                <img style="width: 200px" src="<?=base_url() ?>assets/logo/mii.png">
              </a>
            </div>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"> 
              <div class="message-data" data-message="<?= $this->session->flashdata('message'); ?>"> 
                <script>
                  const flashdata = $('.flash-data').data('flashdata');
                  const message = $('.message-data').data('message');
                  if (flashdata === "Registered") {
                    swal({
                      title: 'Success ' + flashdata,
                      text: 'Cek your email to activation your account',
                      type: 'success'
                    });
                  } else if (flashdata === "Logout") {
                    swal({
                      title: 'Success ' + flashdata,
                      text: message,
                      type: 'success'
                    });
                  }  
                  else if (flashdata === "Failed") {
                    if (message == "status") {
                      swal({
                        title: 'Information',
                        text: 'Your Account is not active',
                        text: 'Cek your email to activation your account',
                        type: 'warning'
                      });
                    } else if (message == "password") {
                      swal({
                        title: 'Information',
                        text: 'Your Password is not correect',
                        type: 'warning'
                      });
                    } else if (message == "not_found") {
                      swal({
                        title: 'Information',
                        text: 'User is not found',
                        type: 'warning'
                      });
                    }
                  }
                </script>
              </div>
              <div class="login-form">
                <form action="<?=base_url('login') ?>" method="post">
                  <div class="form-group">
                    <input class="au-input au-input--full" type="text" id="nik" name="nik"  placeholder="NIK" required>
                  </div>
                  <div class="form-group">
                    <input class="au-input au-input--full" type="password" name="pass" id="pass" placeholder="Password" required>
                  </div>
                  <button class="au-btn au-btn--block au-btn--green m-b-10" type="submit">sign in</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>