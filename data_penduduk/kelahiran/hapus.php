<?php 
	
	require '../function/koneksi.php';
	session_start();

	$id = $_GET['id'];
	mysqli_query($koneksi, "DELETE FROM kelahiran WHERE id_kelahiran = $id");
	$_SESSION['berhasil'] = "Data berhasil dihapus";
	header('Location: index.php');
 ?>