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

    <title>Transaksi</title>

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
     <!-- Sidebar -->
     <div id="wrapper">
     <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">
            <span>Transaksi Buku LKS</span>
          </a>
        </li>
        <li class="nav-item">
          <a class= "nav-link" href="transaksipaket.php">            
            <span>Transaksi Buku Paket</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaksispp.php">
            <span>Transaksi SPP</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaksiuanggedung.php">
            <span>Transaksi Uang Gedung</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaksirekreasi.php">
            <span>Transaksi Rekreasi</span></a>
        </li>
      </ul>

            <!-- data siswa -->
            <div id="content-wrapper">

            <div class="container-fluid">
            <ol class="breadcrumb" style="float="left"">
            <li class="breadcrumb-item">
            <form method="get" action="">
          	NIS: <input type="text" name="NIS" />
          	<input type="submit" name="cari" value="Cari Siswa" />
            </form>

            <?php
            if(isset($_GET['NIS']) && $_GET['NIS']!=''){
	          $sqlSiswa = mysqli_query($koneksi, "SELECT * FROM tbl_datasiswa WHERE NIS='$_GET[NIS]'");
            $ds=mysqli_fetch_array($sqlSiswa);
            $nis = $ds['NIS'];        
            ?>
            <?php
            $kelas = mysqli_query($koneksi," SELECT * FROM tbl_kelas");
            $kls = mysqli_fetch_array($kelas)
            ?>
            <h3>Biodata Siswa</h3>
            <table>
	          <tr>
	        	<td>NIS</td>
	        	<td>:</td>
	        	<td><?php echo $ds['NIS']; ?></td>
	          </tr>
	          <tr>
		        <td>Nama Siswa</td>
		        <td>:</td>
		        <td><?php echo $ds['nama_siswa']; ?></td>
          	</tr>
	          <tr>
		        <td>Kelas</td>
		        <td>:</td>
		        <td><?php echo $kls['nama_kelas']; ?></td>
	          </tr>
	          <tr>
            </table>

            <?php
            $sqlbulan = mysqli_query($koneksi, "SELECT bulan FROM tbl_spp");
            $b=mysqli_fetch_array($sqlbulan)
            ?>
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM tbl_transaksi");
            $d=mysqli_fetch_array($sql)
            ?>
             <div class="card mb-3">
             <div class="card-header">
               <i class="fas fa-table"></i>
               Transaksi LKS</div>
             <div class="card-body">
             <form action="config/backupform.php" method="post">
                 <label>Transaksi</label>
                 <br>
                 <input type="text" name="dbname">
                 <br><br>
                 Bulan :
                 <br>
                <select>
                <option nama="bulan" value="$b">Januari</option>
                </select>
                <br>
                 <label>Nominal</label>
                 <br>
                 <input type="text" name="Nominal">
                 <br>
                 <label>Terbilang</label>
                 <br>
                 <input type="text" name="Terbilang">
                 <br>
                 <label>Tanggal Transaksi</label>
                 <br>
                 <input type="date" name="Tanggal_Transaksi">
                 <input type="time" name="Waktu_Transaksi">
                 <br>
                 <label>Nama Admin</label>
                 <br>
                 <input type="text" name="Nama_admin">
             </form>
             
               </div>
	        	</tr>";
             <button type="submit" name="backup">Selesai</button>
             </div>
             </div>
             </div>
             </div>
             </div>
	      		

            <?php
            }
            ?>

            <p>Pembayaran SPP dilakukan dengan cara mencari tagihan siswa dengan NIS melalui form di atas, kemudian proses pembayaran</p>

            </div>
            </div>
            <!--/.transaksi -->
    
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


</html>