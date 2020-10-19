<?php 

	if($_SESSION['user']['level'] != 'admin'){
		header('Location: ../akses.php');
	}

 ?>