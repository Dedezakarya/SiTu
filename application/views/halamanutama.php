<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Utama</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url()?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url()?>assets/css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">WebTU</a>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search NIS" aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>



           <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <br/>
        <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url()?>assets/img/sman 1 bojonegoro.png" alt="">
        <h1 class="text-uppercase mb-0">SMAN 1 BOJONEGORO</h1><br/><br/>
        <img src="<?php echo base_url()?>assets/img/siswa.jpg" alt="" class="img-thumbnail">
        <hr class="font-weight-light mb-0">Visi</hr>
        <h2 class="font-weight-light mb-0">Meningkatkan Kualitas Belajar
      </div><br/>
    </header>

          <!-- Icon Cards-->
          <br/>
       <section class="portfolio" id="portfolio">
        <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Pilihan Menu</h2><br/>
          <div class="row">
          <div class="col-md-6 col-lg-4">
          <hr class="font-weight-light mb-0">Home</hr>
            <a class="portfolio-item d-block mx-auto" href="//localhost/situweb/index.php/halamanutama/home">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()?>assets/img/home.jpg" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
          <hr class="font-weight-light mb-0">Data Siswa</hr>
            <a class="portfolio-item d-block mx-auto" href="//localhost/situweb/index.php/halamanutama/datasiswa">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()?>assets/img/user.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
          <hr class="font-weight-light mb-0">Transaksi</hr>
            <a class="portfolio-item d-block mx-auto" href="//localhost/situweb/index.php/halamanutama/transaksi">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()?>assets/img/transaksi.jpg" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
          <hr class="font-weight-light mb-0">Laporan</hr>
            <a class="portfolio-item d-block mx-auto" href="//localhost/situweb/index.php/halamanutama/laporan">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()?>assets/img/notepaper.jpg" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
          <hr class="font-weight-light mb-0">Reminder</hr>
            <a class="portfolio-item d-block mx-auto" href="//localhost/situweb/index.php/halamanutama/reminder">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()?>assets/img/alarm.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
          <hr class="font-weight-light mb-0">Form Pengisian</hr>
            <a class="portfolio-item d-block mx-auto" href="//localhost/situweb/index.php/halamanutama/forminput">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url()?>assets/img/form.jpg" alt="">
            </a>
          </div>
          </div>
          </section>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <br><br><br><br><br><br>
     <footer class="full-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>
        <br>


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>assets/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url()?>assets/js/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url()?>assets/js/demo/chart-area-demo.js"></script>

  </body>

</html>
