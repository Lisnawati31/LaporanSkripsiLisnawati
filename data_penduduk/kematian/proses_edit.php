<?php 
	
	require '../function/koneksi.php';
	session_start();

	$id = $_POST['id'];
	$no_kk = $_POST['no_kk'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$status_keluarga = $_POST['status_keluarga'];
	$nama_ayah = $_POST['nama_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$tanggal_kematian = $_POST['tanggal_kematian'];

	$sql = "UPDATE kematian SET no_kk = '$no_kk', 
								nik = '$nik', 
								nama = '$nama', 
								tempat_lahir = '$tempat_lahir', 
								tanggal_lahir = '$tanggal_lahir', 
								jenis_kelamin = '$jenis_kelamin', 
								agama = '$agama', 
								status_keluarga = '$status_keluarga', 
								nama_ayah = '$nama_ayah', 
								nama_ibu = '$nama_ibu', 
								tanggal_kematian = '$tanggal_kematian' 
								WHERE id_kematian = $id";
	mysqli_query($koneksi, $sql);
	$_SESSION['berhasil'] = 'Data berhasil diubah';
	header('Location: index.php');

 ?>