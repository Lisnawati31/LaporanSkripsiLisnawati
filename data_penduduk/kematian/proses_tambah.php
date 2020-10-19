<?php 
	
	require '../function/koneksi.php';
	session_start();

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
	$tanggal_entry = date('d/m/Y');

	$sql = "INSERT INTO kematian(no_kk, nik, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, status_keluarga, nama_ayah, nama_ibu, tanggal_kematian, tanggal_entry) VALUES ('$no_kk', '$nik', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$status_keluarga', '$nama_ayah', '$nama_ibu', '$tanggal_kematian', '$tanggal_entry')";
	if(mysqli_query($koneksi, $sql)){
		mysqli_query($koneksi, "DELETE FROM penduduk WHERE nik = '$nik'");
		$_SESSION['berhasil'] = 'Data berhasil disimpan';
		header('Location: index.php');
	}

 ?>