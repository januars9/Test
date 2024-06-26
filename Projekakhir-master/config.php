<?php

date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

	$user = 'root'; $pass = '';
	try{
		$config = new PDO('mysql:host=localhost;dbname=projek_akhir;', $user,$pass);
		//echo 'sukses';
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
	$view = 'fungsi/view/view.php';
?>
