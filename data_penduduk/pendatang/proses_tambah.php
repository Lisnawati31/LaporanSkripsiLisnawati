<?php 
	
	require '../function/koneksi.php';
	session_start();

	$no_kk = $_POST['no_kk'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$asal = $_POST['asal'];
	$alamat_tujuan = $_POST['alamat_tujuan'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$status_perkawinan = '';
	$tanggal_entry = date('d/m/Y');
	// $status_perkawinan = $_POST['status_perkawinan'];

	$sql = "INSERT INTO pendatang(no_kk, nik, nama, asal, alamat_tujuan, jenis_kelamin, agama, status_perkawinan, tanggal_entry) VALUES ('$no_kk', '$nik', '$nama', '$asal', '$alamat_tujuan', '$jenis_kelamin', '$agama', '$status_perkawinan', '$tanggal_entry')";
	if(mysqli_query($koneksi, $sql)){
		$sql_penduduk = "INSERT INTO penduduk(no_kk, nik, nama, jenis_kelamin, agama, tanggal_entry) VALUES('$no_kk', '$nik', '$nama', '$jenis_kelamin', '$agama', '$tanggal_entry')";
		mysqli_query($koneksi, $sql_penduduk);
		$_SESSION['berhasil'] = 'Data berhasil disimpan';
		header('Location: index.php');
	}

 ?>