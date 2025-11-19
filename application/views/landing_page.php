<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>PT Mahakarya Kelompok 1</title>
      <!-- StyleSheets -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/bootstrap/bootstrap.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/fontawesome/css/all.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/style.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/gradient-theme.css" />
   </head>
   <body class="gradient-surface">
      <!-- Pre Loader -->
      <div class="Loader" id="Loader">
         <div class="LoaderWrapper">
            <div class="circleBall"></div>
            <div class="circleBall"></div>
            <div class="circleBall"></div>
         </div>
      </div>
      <!-- Go to top Button -->
      <a href="#Home">
         <div class="Gototop">
               <i class="fa fa-angle-double-up text-white" aria-hidden="true"></i>
         </div>
      </a>
      <!-- Header Section -->
      <div class="Header gradient-header" id="Home">
         <nav class="navbar fixed-top gradient-header">
            <div class="container">
               <a class="navbar-brand text-white font-weight-bold" href="#">PT MAHAKARYA KELOMPOK 1</a>
               <div class="collapse_menu deactive">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                  <i class="fa fa-times" aria-hidden="true"></i>
                  <ul class="nav">
                     <li class="nav-item">
                        <a class="nav-link" href="#Home">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#Tentang">Informasi</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('team');?>">Team Owner</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('feedback');?>">Kritik & Saran</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('penggajian');?>">Penggajian</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('login');?>">Login</a>
                     </li>
                  </ul>
                  <button class="theme-toggle ml-3" data-theme-toggle>
                     <i class="fa fa-adjust"></i>
                     <span>Dark</span>
                  </button>
               </div>
            </div>
         </nav>
         <div class="banner">
            <div class="layer">
               <div class="row Section">
                  <div class="col">
                     <div class="box">
                        <div>
                           <h2 class="hero-title"><b><i>Platform Penggajian Mahakarya</i></b></h2>
                        </div>
                        <p class="hero-text">Selamat datang di sistem informasi PT Mahakarya Kelompok 1 – solusi payroll, absensi, dan laporan finansial dengan pengalaman enterprise.</p>
                     </div>
                  </div>
                  <div class="col headerImg" style="background-image: url('<?php echo base_url()?>assets/img/uangg.svg');"></div>
                  <div class="col-12 Dicover_Parent">
                     <a href="#AboutMe">
                        <div class="Discover">
                           <i class="fa fa-angle-double-down text-white" aria-hidden="true"></i>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Service Section -->
      <div class="Service fade-in" id="Tentang">
         <div class="Section">
            <div class="text-center">
               <h2><b>Informasi</b></h2>
               <p></p>
               <p></p>
               <div class="subHeading">
                  Platform MAHAKARYA menghadirkan informasi lengkap seputar payroll, absensi, dan laporan finansial PT Mahakarya Kelompok 1.</div>
            </div>

            <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
            <script> 
             $(document).ready(function(){
               $("#flip1").click(function(){
                 $("#panel1").slideToggle("slow");
               });
             });
             </script>
             <style> 
             #panel1, #flip1 {
               padding: 5px;
               text-align: center;
              background-color: #0575e6;
               border: solid 1px #c3c3c3;
               border-radius: 10px 10px 10px 10px;
             }

             #panel1 {
               padding: 10px;
               display: none;
             }
             </style>
            <div class="content">
               <div class="row">
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/tentang.svg"></div>
                        <div class="body">
                           <div class="title"><font size="4"><b><i>Tentang Website</font></b></i></div>
                           <div id="flip1"><font color="white">Baca Selengkapnya</font></div>
                           <div id="panel1">aplikasi ini dibuat untuk membantu perusahaan dalam proses penggajian karyawan</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                   $(document).ready(function(){
                     $("#flip2").click(function(){
                       $("#panel2").slideToggle("slow");
                     });
                   });
                   </script>
                   <style> 
                   #panel2, #flip2 {
                     padding: 5px;
                     text-align: center;
                     background-color: #0575e6;
                     border: solid 1px #c3c3c3;
                     border-radius: 10px 10px 10px 10px;
                   }

                   #panel2 {
                     padding: 10px;
                     display: none;
                   }
                   </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/administrator.svg"></div>
                        <div class="body">
                           <div class="title"><font size="4"><b><i>Halaman Admin</font></b></i></div>
                           <div id="flip2"><font color="white">Baca Selengkapnya</font></div>
                           <div id="panel2">Administrator dapat menggunakan website untuk mengelola data pada website, halaman administrator terdapat dashboard / informasi singkat mengenai data data, terdapat data karyawan untuk pengelolaan karyawan, terdapat data jabatan untuk pengelolaan jabatan, terdapat data transaksi yang memiliki sub menu data absensi, setting potongan gaji, data gaji, terdapat data laporan yang memiliki sub menu laporan absensi, laporan gaji, cetak slip gaji.</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                   $(document).ready(function(){
                     $("#flip3").click(function(){
                       $("#panel3").slideToggle("slow");
                     });
                   });
                   </script>
                   <style> 
                   #panel3, #flip3 {
                     padding: 5px;
                     text-align: center;
                     background-color: #0575e6;
                     border: solid 1px #c3c3c3;
                     border-radius: 10px 10px 10px 10px;
                   }

                   #panel3 {
                     padding: 10px;
                     display: none;
                   }
                   </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/karyawan.svg"></div>
                        <div class="body">
                           <div class="title"><font size="4"><b><i>Halaman Karyawan</font></b></i></div>
                           <div id="flip3"><font color="white">Baca Selengkapnya</font></div>
                           <div id="panel3">Halaman karyawan terdapat informasi tentangb karyawan dan cetak slip gaji.</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                  $(document).ready(function(){
                     $("#flip4").click(function(){
                       $("#panel4").slideToggle("slow");
                     });
                  });
                  </script>
                  <style> 
                   #panel4, #flip4 {
                     padding: 5px;
                     text-align: center;
                     background-color: #0575e6;
                     border: solid 1px #c3c3c3;
                     border-radius: 10px 10px 10px 10px;
                  }

                   #panel4 {
                     padding: 10px;
                     display: none;
                  }
                  </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/others-fitur.svg"></div>
                        <div class="body">
                           <div class="title"><font size="4"><b><i>Fitur Lainnya</font></b></i></div>
                           <div id="flip4"><font color="white">Baca Selengkapnya</font></div>
                           <div id="panel4">Cetak slip gaji, lupa password, login karyawan</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Team Section -->
      <div class="Team fade-in" id="AboutMe">
         <div class="Section">
            <div class="text-center">
               <h2><b>About Me</b></h2>
               <br>
            </div>
            <div class="content">
               <div class="team row">
                  <div class="team-memeber col-md-6 col-lg-4 col-xl-3">
                     <div class="card">
                        <div class="TopImg" style="display: flex; align-items: center; justify-content: center; padding: 20px; background: transparent;">
                           <img src="<?php echo base_url(); ?>assets/img/logo.jpg" 
                                class="rounded-square d-block" 
                                style="max-width: 100%; height: auto; object-fit: contain; max-height: 300px;">
                        </div>
                        <div class="TeamInfo text-center">
                           <div class="Name">PT MAHAKARYA KELOMPOK 1</div>
                           <div class="Job">Payroll & Workforce Solution</div>
                           <div class="social_links">
                              <div class="social">
                                 <a class="" href="www.github.com"><i class="fab fa-github" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                                 <a class="" href="www.instagram.com"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                                 <a class="" href="www.youtube.com"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer Section -->
      <div class="Footer gradient-footer" id="Footer">
         <div class="container">
            <div class="row">
               <div class="col-12 text-center my-3">
                  Copyright &copy; Mahakarya Kelompok 1 | Penggajian 2025 - All Rights Reserved
               </div>
            </div>
         </div>
      </div>
      <!-- Javascripts -->
      <script src="<?php echo base_url(); ?>assets/landing/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>assets/landing/js/bootstrap.js"></script>
      <script src="<?php echo base_url(); ?>assets/landing/js/script.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
   </body>
</html>