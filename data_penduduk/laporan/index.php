<?php 

  require '../function/koneksi.php';
  require '../header.php';

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

			 <h3 class="font-weight-light">Laporan kependudukan</h3>
		</div>
	 </div>
	 <div class="row justify-content-center mt-5">
	 	<div class="col-md-3">
	 		<form action="cetak.php" method="post">
			 	<div class="form-check">
				  <input class="form-check-input" type="radio" name="cetak" id="exampleRadios1" value="Penduduk">
				  <label class="form-check-label" for="exampleRadios1">
				    Laporan Data penduduk
				  </label>
				</div>

				<div class="form-check">
				  <input class="form-check-input" type="radio" name="cetak" id="exampleRadios2" value="Kelahiran">
				  <label class="form-check-label" for="exampleRadios2">
				    Laporan Data Kelahiran Penduduk
				  </label>
				</div>

				<div class="form-check">
				  <input class="form-check-input" type="radio" name="cetak" id="exampleRadios3" value="Kematian">
				  <label class="form-check-label" for="exampleRadios3">
				    Laporan Data Kematian Penduduk
				  </label>
				</div>

				<div class="form-check">
				  <input class="form-check-input" type="radio" name="cetak" id="exampleRadios4" value="Pindahan">
				  <label class="form-check-label" for="exampleRadios4">
				    Laporan Data Pindahan Penduduk
				  </label>
				</div>

				<div class="form-check">
				  <input class="form-check-input" type="radio" name="cetak" id="exampleRadios5" value="Pendatang">
				  <label class="form-check-label" for="exampleRadios5">
				    Laporan Data Pendatang Penduduk
				  </label>
				</div>
				<br>
				<div class="form-group">
					<label>Bulan</label>
					<select class="form-control" name="bulan">
						<option value="01Januari">JANUARI</option>
						<option value="02Februari">FEBRUARI</option>
						<option value="03Maret">MARET</option>
						<option value="04April">APRIL</option>
						<option value="05Mei">MEI</option>
						<option value="06Juni">JUNI</option>
						<option value="07Juli">JULI</option>
						<option value="08Agustus">AGUSTUS</option>
						<option value="09September">SEPTEMBER</option>
						<option value="10Oktober">OKTOBER</option>
						<option value="11November">NOVEMBER</option>
						<option value="12Desember">DESEMBER</option>
					</select>
				</div>

				<div class="form-group">
					<label>Tahun</label>
					<select class="form-control" name="tahun">
						<?php $tahun = date('Y'); ?>
						
						<?php for($i=-5; $i<=5; $i++) : ?>
							<option value="<?php echo $tahun+$i ?>"><?php echo $tahun+$i ?></option>
						<?php endfor; ?>
					</select>
				</div>
			 	<div class="text-center mt-2">
				 	<button type="submit" class="btn btn-primary btn-sm">Cetak</button>
			 	</div>
		 	</form>
		 	<br>
	 	</div>
	 </div>	
</div>

 <?php require '../footer.php'; ?>