<?php 
	
	require '../function/koneksi.php';
	session_start();

	$id = $_POST['id'];
	$no_kk = $_POST['no_kk'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$rt = $_POST['rt'];
	$rw = $_POST['rw'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$hub_keluarga = $_POST['hub_keluarga'];
	$status_perkawinan = $_POST['status_perkawinan'];
	$pendidikan = $_POST['pendidikan'];
	$pekerjaan = $_POST['pekerjaan'];
	$tanggal_entry = date('d/m/Y');

	$sql = "UPDATE penduduk SET no_kk = '$no_kk', 
								nik = '$nik', 
								nama = '$nama', 
								alamat = '$alamat', 
								rt = '$rt', 
								rw = '$rw', 
								jenis_kelamin = '$jenis_kelamin', 
								agama = '$agama', 
								hub_keluarga = '$hub_keluarga', 
								status_perkawinan = '$status_perkawinan', 
								pendidikan = '$pendidikan', 
								pekerjaan = '$pekerjaan' 
								WHERE id_penduduk = $id";
	mysqli_query($koneksi, $sql);
	$_SESSION['berhasil'] = 'Data berhasil diubah';
	header('Location: index.php');

 ?>