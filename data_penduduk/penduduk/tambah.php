<?php 

  require '../header.php';
  require '../level.php';

 ?>
<div class="container-fluid mt-3 mb-5">
	<div class="row">	
		<div class="col-md-8">	
			<h4 class="mb-5">Tambah Penduduk</h4>
			<form action="proses_tambah.php" method="post">
				<div class="form-group row">
				    <label for="no_kk" class="col-sm-4 col-form-label">No KK</label>
				    <div class="col-sm-8">
				      <input type="number" name="no_kk" class="form-control form-control" id="no_kk">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="nik" class="col-sm-4 col-form-label">NIK</label>
				    <div class="col-sm-8">
				      <input type="number" name="nik" class="form-control form-control" id="nik">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="nama" class="col-sm-4 col-form-label">Nama</label>
				    <div class="col-sm-8">
				      <input type="text" name="nama" class="form-control" id="nama">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
				    <div class="col-sm-8">
				      <textarea class="form-control" name="alamat" id="alamat"></textarea>
				    </div>
				</div>

				<div class="form-group row">
				    <label for="tempat_tanggal_lahir" class="col-sm-4 col-form-label">RT/RW</label>
				    <div class="col-md-8">	
					    <div class="row">
					    	<div class="col-sm-6">
					    		<input type="number" name="rt" class="form-control">
					    	</div>

						    <div class="col-sm-6">
						      <input type="number" name="rw" class="form-control">
						    </div>
					    </div>
				    </div>
				</div>

				<div class="form-group row">
				    <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
				    <div class="col-sm-8">
				      <select name="jenis_kelamin" class="form-control">
				      	<option selected disabled="">Pilih Jenis Kelamin</option>
				      	<option value="L">Laki-laki</option>
				      	<option value="P">Perempuan</option>
				      </select>
				    </div>
				</div>

				<div class="form-group row">
				    <label for="agama" class="col-sm-4 col-form-label">Agama</label>
				    <div class="col-sm-8">
				      <input type="text" name="agama" class="form-control" id="agama">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="hub_keluarga" class="col-sm-4 col-form-label">Hub Keluarga</label>
				    <div class="col-sm-8">
				      <input type="text" name="hub_keluarga" class="form-control">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="status_perkawinan" class="col-sm-4 col-form-label">Status Perkawinan</label>
				    <div class="col-sm-8">
				      <select name="status_perkawinan" class="form-control">
				      	<option selected disabled="">Pilih Status Perkawinan</option>
				      	<option value="Sudah Menikah">Sudah Menikah</option>
				      	<option value="Belum Menikah">Belum Menikah</option>
				      </select>
				    </div>
				</div>

				<div class="form-group row">
				    <label for="pendidikan" class="col-sm-4 col-form-label">Pendidikan</label>
				    <div class="col-sm-8">
				      <input type="text" name="pendidikan" class="form-control" id="pendidikan">
				    </div>
				</div>

				<div class="form-group row">
				    <label for="perkerjaan" class="col-sm-4 col-form-label">Perkerjaan</label>
				    <div class="col-sm-8">
				      <input type="text" name="pekerjaan" class="form-control" id="perkerjaan">
				    </div>
				</div>

				<div class="text-center">	
					<button type="submit" class="btn btn-primary btn-sm text-center">Simpan</button>
					<button type="submit" class="btn btn-secondary btn-sm text-center">Batal</button>
				</div>
			</form>
		</div>
	 </div>
</div>

 <?php require '../footer.php'; ?>