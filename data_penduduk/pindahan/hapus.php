<?php 
	
	require '../function/koneksi.php';
	session_start();

	$id = $_GET['id'];
	mysqli_query($koneksi, "DELETE FROM pindahan WHERE id_pindahan = $id");
	$_SESSION['berhasil'] = "Data berhasil dihapus";
	header('Location: index.php');
 ?>