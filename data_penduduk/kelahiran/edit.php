<?php 

  require '../function/koneksi.php';
  require '../header.php';
  require '../level.php';

  $id = $_GET['id'];
  $query = mysqli_query($koneksi, "SELECT * FROM kelahiran WHERE id_kelahiran = $id");
  $row = mysqli_fetch_assoc($query);
 ?>
<div class="container-fluid mt-3 mb-5">
	<div class="row">	
		<div class="col-md-8">	
			<h4 class="mb-5">Edit Kelahrian</h4>
			<form action="proses_edit.php" method="post">
				<input type="hidden" name="id" value="<?php echo $id; ?>">

				<div class="form-group row">
				    <label for="no_kk" class="col-sm-4 col-form-label">No KK</label>
				    <div class="col-sm-8">
				      <input type="number" name="no_kk" class="form-control form-control" id="no_kk" value="<?php echo $row['no_kk'] ?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="nik" class="col-sm-4 col-form-label">NIK</label>
				    <div class="col-sm-8">
				      <input type="number" name="nik" class="form-control form-control" id="nik" value="<?php echo $row['nik']; ?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="nama" class="col-sm-4 col-form-label">Nama</label>
				    <div class="col-sm-8">
				      <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $row['nama']; ?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="tempat_tanggal_lahir" class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
				    <div class="col-md-8">	
					    <div class="row">
					    	<div class="col-sm-6">
					    		<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $row['tempat_lahir']; ?>">
					    	</div>

						    <div class="col-sm-6">
						      <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>">
						    </div>
					    </div>
				    </div>
				</div>

				<div class="form-group row">
				    <label for="agama" class="col-sm-4 col-form-label">Agama</label>
				    <div class="col-sm-8">
				      <input type="text" name="agama" class="form-control" id="agama" value="<?php echo $row['agama']; ?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="status_keluarga" class="col-sm-4 col-form-label">Status Keluarga</label>
				    <div class="col-sm-8">
				      <input type="text" name="status_keluarga" class="form-control" id="status_keluarga" value="<?php echo $row['status_keluarga']; ?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="ayah" class="col-sm-4 col-form-label">Ayah</label>
				    <div class="col-sm-8">
				      <input type="text" name="ayah" class="form-control" id="ayah" value="<?php echo $row['ayah']; ?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="ibu" class="col-sm-4 col-form-label">Ibu</label>
				    <div class="col-sm-8">
				      <input type="text" name="ibu" class="form-control" id="ibu" value="<?php echo $row['ibu']; ?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
				    <div class="col-sm-8">
				      <select name="jenis_kelamin" class="form-control">
				      	<option disabled="">Pilih Jenis Kelamin</option>
				      	<?php if($row['jenis_kelamin'] == 'L') : ?>
				      		<option value="L" selected>Laki-laki</option>
				      		<option value="P">Perempuan</option>
				      	<?php else : ?>
				      		<option value="L">Laki-laki</option>
				      		<option value="P" selected>Perempuan</option>
				      	<?php endif; ?>
				      </select>
				    </div>
				</div>

				<div class="text-center">	
					<button type="submit" class="btn btn-primary btn-sm text-center">Update</button>
					<button type="submit" class="btn btn-secondary btn-sm text-center">Batal</button>
				</div>
			</form>
		</div>
	 </div>
</div>

 <?php require '../footer.php'; ?>