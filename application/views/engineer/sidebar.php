<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('userEngineer') ?>" class="brand-link">
      <img src="<?=base_url() ?>assets/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MII-Engineer</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url('assets/images/foto_profile/').$user['photo'] ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= base_url('UserEngineer') ?>" class="d-block"><?= $user['name'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-close">
            <a href="<?=base_url('userengineer/work_activity_location') ?>" class="nav-link">
                <i class="fas fa-business-time nav-icon"></i>
              <p>
                Job
              </p>
            </a>
          </li>
          <!-- <li class="nav-item has-treeview menu-close">
            <a href="<?=base_url('userengineer/report') ?>" class="nav-link elevation-1">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Report
              </p>
            </a>
          </li> -->
           <li class="nav-item has-treeview menu-close">
            <a href="<?=base_url('Login/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>