<?php 
	
	require '../function/koneksi.php';
	session_start();

	$id = $_POST['id'];
	$no_kk = $_POST['no_kk'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$asal = $_POST['asal'];
	$alamat_tujuan = $_POST['alamat_tujuan'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$status_perkawinan = '';
	// $status_perkawinan = $_POST['status_perkawinan'];

	$sql = "UPDATE pendatang SET no_kk = '$no_kk', nik = '$nik', nama = '$nama', asal = '$asal', alamat_tujuan = '$alamat_tujuan', jenis_kelamin = '$jenis_kelamin', agama = '$agama', status_perkawinan = '$status_perkawinan' WHERE id_pendatang = $id";
	mysqli_query($koneksi, $sql);
	$_SESSION['berhasil'] = 'Data berhasil diubah';
	header('Location: index.php');

 ?>