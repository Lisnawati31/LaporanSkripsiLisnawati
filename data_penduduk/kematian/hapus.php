<?php 
	
	require '../function/koneksi.php';
	session_start();

	$id = $_GET['id'];
	mysqli_query($koneksi, "DELETE FROM kematian WHERE id_kematian = $id");
	$_SESSION['berhasil'] = "Data berhasil dihapus";
	header('Location: index.php');
 ?>