<?php 

  session_start();

  define('base_url', 'http://localhost/data_penduduk/');

  if(!isset($_SESSION['user'])){
    header('Location: ../index.php');
  }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Penduduk</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url; ?>assets/vendor/bootstrap/dist/css/bootstrap.min.css">

</head>
<body>
	<div class="container-fluid">
		<div class="row mt-2">
			<div class="col-md-2">
				<img src="<?php echo base_url; ?>assets/img/logo.jpeg" width="150" height="150">
			</div>
			<div class="col-md-8 text-center">
				<h2>Sistem Informasi Pengelolaan Data Penduduk</h2><br>
				<h3>Desa Dayeuhkolot Kabupaten Bandung</h3>
			</div>
		</div>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav mr-auto">
		      <?php if($_SESSION['user']['level'] == 'admin') : ?>
		      <a class="nav-item nav-link" href="<?= base_url; ?>home">Home</a>
		      <a class="nav-item nav-link" href="<?= base_url; ?>penduduk">Penduduk</a>
		      <a class="nav-item nav-link" href="<?= base_url; ?>kelahiran">Kelahiran</a>
		      <a class="nav-item nav-link" href="<?= base_url; ?>kematian">Kematian</a>
		      <a class="nav-item nav-link" href="<?= base_url; ?>pindahan">Pindahan</a>
		      <a class="nav-item nav-link" href="<?= base_url; ?>pendatang">Pendatang</a>
		      <?php endif; ?>
		      <a class="nav-item nav-link" href="<?= base_url; ?>laporan">Laporan</a>
		      <a class="nav-item nav-link" href="<?= base_url; ?>logout.php">Logout</a>
		    </div>
		    <span class="navbar-text">
		      <?php echo $_SESSION['user']['level']; ?>
		    </span>
		  </div>
		</nav>
	</div>
	