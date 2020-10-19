<?php 

  require '../function/koneksi.php';
  require '../header.php';
  require '../level.php';

  $id = $_GET['id'];
  $query = mysqli_query($koneksi, "SELECT * FROM kematian WHERE id_kematian = $id");
  $row = mysqli_fetch_assoc($query);
 ?>
<div class="container-fluid mt-3 mb-5">
	<div class="row">	
		<div class="col-md-8">	
			<h4 class="mb-5">Edit Kematian</h4>
			<form action="proses_edit.php" method="post">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="form-group row">
				    <label for="no_kk" class="col-sm-4 col-form-label">No KK</label>
				    <div class="col-sm-8">
				      <input type="number" name="no_kk" class="form-control form-control" id="no_kk" value="<?php echo $row['no_kk']; ?>">
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

				<div class="form-group row">
				    <label for="agama" class="col-sm-4 col-form-label">Agama</label>
				    <div class="col-sm-8">
				      <input type="text" name="agama" class="form-control" id="agama" value="<?php echo $row['agama']; ?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="status_keluarga" class="col-sm-4 col-form-label">Status Keluarga</label>
				    <div class="col-sm-8">
				      <select name="status_keluarga" class="form-control">
				      	<option disabled="">Pilih Status Keluarga</option>
				      	<?php if($row['status_perkawinan'] == 'Kepala Keluarga') : ?>
					      	<option value="Kepala Keluarga" selected>Kepala Keluarga</option>
					      	<option value="Istri">Istri</option>
					      	<option value="Anak">Anak</option>
					      	<option value="Lainnya">Lainnya</option>
					    <?php elseif($row['status_perkawinan'] == 'Istri') : ?>
					    	<option value="Kepala Keluarga">Kepala Keluarga</option>
					      	<option value="Istri" selected>Istri</option>
					      	<option value="Anak">Anak</option>
					      	<option value="Lainnya">Lainnya</option>
					     <?php elseif($row['status_perkawinan'] == 'Anak') : ?>
					    	<option value="Kepala Keluarga">Kepala Keluarga</option>
					      	<option value="Istri">Istri</option>
					      	<option value="Anak" selected>Anak</option>
					      	<option value="Lainnya">Lainnya</option>
					    <?php else : ?>
					      	<option value="Kepala Keluarga">Kepala Keluarga</option>
					      	<option value="Istri">Istri</option>
					      	<option value="Anak">Anak</option>
					      	<option value="Lainnya" selected>Lainnya</option>
				      	<?php endif; ?>
				      </select>
				    </div>
				</div>

				<div class="form-group row">
				    <label for="nama_ayah" class="col-sm-4 col-form-label">Nama Lengkap Ayah</label>
				    <div class="col-sm-8">
				      <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" value="<?php echo $row['nama_ayah']; ?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="nama_ibu" class="col-sm-4 col-form-label">Nama Lengkap Ibu</label>
				    <div class="col-sm-8">
				      <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" value="<?php echo $row['nama_ibu']; ?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="tanggal_kematian" class="col-sm-4 col-form-label">Tanggal Kematian</label>
				    <div class="col-sm-8">
				      <input type="date" name="tanggal_kematian" class="form-control" id="tanggal_kematian" value="<?php echo $row['tanggal_kematian']; ?>">
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