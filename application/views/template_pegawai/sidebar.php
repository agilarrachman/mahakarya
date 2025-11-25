<body id="page-top" class="gradient-surface">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion gradient-header" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('pegawai/dashboard'); ?>">
        <?php 
        $logo_path = base_url('assets/img/logo.png');
        if (!file_exists('./assets/img/logo.png')) {
          $logo_path = base_url('assets/img/logo.jpg');
        }
        ?>
        <img src="<?php echo $logo_path; ?>" alt="Logo" class="sidebar-brand-icon" style="height: 40px; width: auto; margin-right: 8px;">
        <div class="sidebar-brand-text mx-2 text-white text-center" style="font-size: 0.9rem;">PT MAHAKARYA KELOMPOK 1</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('pegawai/dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('pegawai/data_gaji') ?>">
          <i class="fas fa-fw fa-money-check-alt"></i>
          <span>Data Gaji</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('penggajian') ?>">
          <i class="fas fa-fw fa-wallet"></i>
          <span>Penggajian+</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('team') ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Team Owner</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('feedback') ?>">
          <i class="fas fa-fw fa-comment-alt"></i>
          <span>Kritik & Saran</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('pegawai/ganti_password') ?>">
          <i class="fas fa-fw fa-lock"></i>
          <span>Ubah Password</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('login/logout')?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand gradient-header topbar mb-4 static-top shadow text-white">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <?php 
          $logo_path = base_url('assets/img/logo.png');
          if (!file_exists('./assets/img/logo.png')) {
            $logo_path = base_url('assets/img/logo.jpg');
          }
          ?>
          <img src="<?php echo $logo_path; ?>" alt="Logo" style="height: 35px; width: auto; margin-right: 12px;">
          <h4 class="font-weight-bold text-white m-0">PT Mahakarya Kelompok 1</h4>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item d-flex align-items-center mr-3">
              <button class="theme-toggle border-0" data-theme-toggle type="button">
                <i class="fa fa-adjust text-white"></i>
                <span class="text-white">Dark</span>
              </button>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white small">Selamat Datang <?php echo $this->session->userdata('nama_pegawai')?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url('photo/').$this->session->userdata('photo') ?>">
              </a>
              
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->