<?php 
	
	require '../function/koneksi.php';
	session_start();

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

	$sql = "INSERT INTO penduduk(no_kk, nik, nama, alamat, rt, rw, jenis_kelamin, agama, hub_keluarga, status_perkawinan, pendidikan, pekerjaan, tanggal_entry) VALUES ('$no_kk', '$nik', '$nama', '$alamat', '$rt', '$rw', '$jenis_kelamin', '$agama', '$hub_keluarga', '$status_perkawinan', '$pendidikan', '$pekerjaan', '$tanggal_entry')";
	mysqli_query($koneksi, $sql);
	$_SESSION['berhasil'] = 'Data berhasil disimpan';
	header('Location: index.php');

 ?>