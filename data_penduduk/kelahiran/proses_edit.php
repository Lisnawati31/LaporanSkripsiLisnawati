<?php 
	
	require '../function/koneksi.php';
	session_start();

	$id = $_POST['id'];
	$no_kk = $_POST['no_kk'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$agama = $_POST['agama'];
	$status_keluarga = $_POST['status_keluarga'];
	$ayah = $_POST['ayah'];
	$ibu = $_POST['ibu'];
	$jenis_kelamin = $_POST['jenis_kelamin'];

	$sql = "UPDATE kelahiran SET no_kk = '$no_kk', 
								 nik = '$nik', 
								 nama = '$nama', 
								 tempat_lahir = '$tempat_lahir', 
								 tanggal_lahir = '$tanggal_lahir', 
								 agama = '$agama', 
								 status_keluarga = '$status_keluarga', 
								 ayah = '$ayah', 
								 ibu = '$ibu', 
								 jenis_kelamin = '$jenis_kelamin' 
								 WHERE id_kelahiran = $id";
	mysqli_query($koneksi, $sql);
	$_SESSION['berhasil'] = 'Data berhasil diubah';
	header('Location: index.php');

 ?>