<!DOCTYPE html>
<html>
<head>
  <title>Login | Aplikasi Penggajian</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/gradient-theme.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/fontawesome/css/all.min.css">
  <script src="<?php echo base_url(); ?>assets/js/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="gradient-surface login-page">
  <div class="login-shell fade-in">
    <div class="login-card">
      <div class="login-illustration">
        <img src="<?php echo base_url(); ?>assets/img/login.svg" alt="Mahakarya Illustration">
        <div class="floating-badge">Mahakarya Payroll Suite</div>
      </div>
      <div class="login-form-wrapper">
        <form class="user glassy-panel" method="POST" action="<?php echo base_url('login') ?>">
          <img class="login-avatar" src="<?php echo base_url(); ?>assets/img/avatar.svg" alt="Avatar">
          <h2 class="title">PT Mahakarya Kelompok 1</h2>
          <p class="login-subtitle">Masuk untuk mengelola payroll, absensi, dan laporan finansial.</p>
          <?php echo $this->session->flashdata('pesan')?>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <h5>Username <?php echo form_error('username', '<div class="text-small text-danger"> </div>')?></h5>
              <input type="text" class="input" name="username">
            </div>
          </div>
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Password <?php echo form_error('password', '<div class="text-small text-danger"> </div>')?></h5>
              <input type="password" class="input" name="password">
            </div>
          </div>
          <input type="submit" class="btn btn-gradient" value="Login">
        </form>
      </div>
    </div>
  </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
</body>
</html>
