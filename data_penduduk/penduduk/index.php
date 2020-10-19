<?php 

  require '../function/koneksi.php';
  require '../header.php';
  require '../level.php';

  if(isset($_GET['cari'])){
  	$cari = $_GET['cari'];
  	$query = mysqli_query($koneksi, "SELECT * FROM penduduk WHERE no_kk LIKE '$cari' OR nik LIKE '$cari' OR nama LIKE '$cari'");
  }else{
  	$query = mysqli_query($koneksi, "SELECT * FROM penduduk");
  }
  
 ?>
<div class="container-fluid mt-3">
	<div class="row">	
		<div class="col-md-12">	
			 <?php if(isset($_SESSION['berhasil'])) : ?>
				 <div class="alert alert-success">
				 	<?= $_SESSION['berhasil']; ?>
				 </div>
				 <?php unset($_SESSION['berhasil']); ?>
			 <?php endif; ?>
			 <div class="row">
			 	<div class="col-md-8">
			 		<a href="tambah.php" class="btn btn-primary btn-sm mb-5">Tambah Penduduk</a>
			 	</div>
			 	<div class="col-md-4">
				 	<form action="" method="get">
			            <div class="input-group input-group-sm mb-3" align="right">
						  <input type="text" class="form-control" name="cari" placeholder="Cari Penduduk">
						  <div class="input-group-append">
						    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
						  </div>
						</div>
	    			</form>
			 	</div>
			 </div>
			 
			 <h3 class="font-weight-light">Daftar Penduduk</h3>
			 <table class="table table-sm table-bordered table-striped">
			 	<tr>
			 		<th>NO</th>
			 		<th>NO KK</th>
			 		<th>NIK</th>
			 		<th>NAMA</th>
			 		<th>ALAMAT</th>
			 		<th>JK</th>
			 		<th>AGAMA</th>
			 		<th>HUB KELUARGA</th>
			 		<th>PENDIDIKAN</th>
			 		<th>PEKERJAAN</th>
			 		<th>RT</th>
			 		<th>RW</th>
			 		<th>TGL ENTRY</th>
			 		<th>AKSI</th>
			 	</tr>

			 	<?php if(mysqli_num_rows($query) == 0) : ?>
			 		<td colspan="8" class="text-center">Tidak ada data</td>
			 	<?php endif; ?>

			 	<?php 
				 	$no = 1;
				 	while($row = mysqli_fetch_assoc($query)) : ?>
				 	<tr>
				 		<td><?php echo $no; ?></td>
				 		<td><?php echo $row['no_kk']; ?></td>
				 		<td><?php echo $row['nik']; ?></td>
				 		<td><?php echo $row['nama']; ?></td>
				 		<td><?php echo $row['alamat']; ?></td>
				 		<td><?php echo $row['jenis_kelamin']; ?></td>
				 		<td><?php echo $row['agama']; ?></td>
				 		<td><?php echo $row['hub_keluarga']; ?></td>
				 		<td><?php echo $row['pendidikan']; ?></td>
				 		<td><?php echo $row['pekerjaan']; ?></td>
				 		<td><?php echo $row['rt']; ?></td>
				 		<td><?php echo $row['rw']; ?></td>
				 		<td><?php echo $row['tanggal_entry']; ?></td>
				 		<td>
				 			<a href="edit.php?id=<?php echo $row['id_penduduk']; ?>" class="badge badge-success">Edit</a>
				 			<a onclick="return confirm('Apa anda yakin?');" href="hapus.php?id=<?php echo $row['id_penduduk']; ?>" class="badge badge-danger">Hapus</a>
				 		</td>
				 	</tr>
			 	<?php 
			 		$no++;
			 		endwhile; 
			 	?>
			 </table>
		</div>
	 </div>
</div>

 <?php require '../footer.php'; ?>