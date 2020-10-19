<?php 
	
	require '../function/koneksi.php';
	session_start();

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
	$tanggal_entry = date('d/m/Y');

	$sql = "INSERT INTO kelahiran(no_kk, nik, nama, tempat_lahir, tanggal_lahir, agama, status_keluarga, ayah, ibu, jenis_kelamin, tanggal_entry) VALUES ('$no_kk', '$nik', '$nama', '$tempat_lahir', '$tanggal_lahir', '$agama', '$status_keluarga', '$ayah', '$ibu', '$jenis_kelamin', '$tanggal_entry')";
	if(mysqli_query($koneksi, $sql)){
		$sql_penduduk = "INSERT INTO penduduk(no_kk, nik, nama, jenis_kelamin, agama, hub_keluarga, tanggal_entry) VALUES('$no_kk', '$nik', '$nama', '$jenis_kelamin', '$agama', '$status_keluarga', '$tanggal_entry')";
		mysqli_query($koneksi, $sql_penduduk);
		$_SESSION['berhasil'] = 'Data berhasil disimpan';
		header('Location: index.php');
	}

 ?>