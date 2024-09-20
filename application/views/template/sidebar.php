<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('admin') ?>" class="brand-link">
      <img src="<?=base_url() ?>assets/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Administrator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url('assets/images/foto_profile/').$user['photo'] ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $user['name'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <!-- <i class="nav-icon far fa-folder-alt"></i> -->
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-subitem ml-3">
                <a href="<?=base_url() ?>admin/listUser" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>User Account Login</p>
                </a>
              </li>
              <li class="nav-subitem ml-3">
                <a href="<?=base_url() ?>Engineer" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Engineer</p>
                </a>
              </li>
              <li class="nav-subitem ml-3">
                <a href="<?=base_url() ?>Admin/administrator" class="nav-link">
                  <i class="fas fa-user-shield nav-icon"></i>
                  <p>Administrator</p>
                </a>
              </li>
              <li class="nav-subitem ml-3">
                <a href="<?=base_url() ?>Location" class="nav-link">
                  <i class="fas fa-map-marker-alt nav-icon"></i>
                  <p>Location</p>
                </a>
              </li>
               <li class="nav-subitem ml-3">
                <a href="<?=base_url() ?>shift" class="nav-link">
                 <i class="fas fa-clock nav-icon"></i>
                  <p>Shift</p>
                </a>
              </li>
               <li class="nav-subitem ml-3">
                <a href="<?=base_url() ?>job" class="nav-link">
                 <i class="fas fa-business-time nav-icon"></i>
                  <p>Job</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Management Job
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-subitem ml-3">
                <a href="<?=base_url() ?>work" class="nav-link">
                  <i class="fas fa-clock nav-icon"></i>
                  <p>Job Engineer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="<?=base_url() ?>workactivity/engineer_report_list" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Report
              </p>
            </a>
          </li>
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