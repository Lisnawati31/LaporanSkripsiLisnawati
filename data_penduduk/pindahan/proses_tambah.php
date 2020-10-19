<?php 
	
	require '../function/koneksi.php';
	session_start();

	$no_kk = $_POST['no_kk'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$tujuan = $_POST['tujuan'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$status_perkawinan = $_POST['status_perkawinan'];
	$tanggal_entry = date('d/m/Y');

	$sql = "INSERT INTO pindahan(no_kk, nik, nama, tujuan, jenis_kelamin, agama, status_perkawinan, tanggal_entry) VALUES ('$no_kk', '$nik', '$nama', '$tujuan', '$jenis_kelamin', '$agama', '$status_perkawinan', '$tanggal_entry')";
	if(mysqli_query($koneksi, $sql)){
		mysqli_query($koneksi, "DELETE FROM penduduk WHERE nik = '$nik'");
		$_SESSION['berhasil'] = 'Data berhasil disimpan';
		header('Location: index.php');
	}

 ?>