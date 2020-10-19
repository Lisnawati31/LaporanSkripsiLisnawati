<?php 

  require '../function/koneksi.php';
  require '../header.php';
  require '../level.php';
  
  $query_penduduk = mysqli_query($koneksi, "SELECT * FROM penduduk");
  $jumlah_penduduk = mysqli_num_rows($query_penduduk);

  $query_kelahiran = mysqli_query($koneksi, "SELECT * FROM kelahiran");
  $jumlah_kelahiran = mysqli_num_rows($query_kelahiran);

  $query_kematian = mysqli_query($koneksi, "SELECT * FROM kematian");
  $jumlah_kematian = mysqli_num_rows($query_kematian);

  $query_pindahan = mysqli_query($koneksi, "SELECT * FROM pindahan");
  $jumlah_pindahan = mysqli_num_rows($query_pindahan);

  $query_pendatang = mysqli_query($koneksi, "SELECT * FROM pendatang");
  $jumlah_pendatang = mysqli_num_rows($query_pendatang);
 ?>
<div class="container-fluid mt-3">
	<div class="row">	
		<div class="col-md-2">
			<div class="card">
				<div class="card-header">Jumlah Data Penduduk</div>
				<div class="card-body"><?php echo $jumlah_penduduk; ?></div>
			</div>
		</div>

		<div class="col-md-2">
			<div class="card">
				<div class="card-header">Jumlah Data Kelahiran</div>
				<div class="card-body"><?php echo $jumlah_kelahiran; ?></div>
			</div>
		</div>

		<div class="col-md-2">
			<div class="card">
				<div class="card-header">Jumlah Data Kematian</div>
				<div class="card-body"><?php echo $jumlah_kematian; ?></div>
			</div>
		</div>

		<div class="col-md-2">
			<div class="card">
				<div class="card-header">Jumlah Data Pindahan</div>
				<div class="card-body"><?php echo $jumlah_pindahan; ?></div>
			</div>
		</div>

		<div class="col-md-2">
			<div class="card">
				<div class="card-header">Jumlah Data Pendatang</div>
				<div class="card-body"><?php echo $jumlah_pendatang; ?></div>
			</div>
		</div>
	 </div>
</div>

 <?php require '../footer.php'; ?>