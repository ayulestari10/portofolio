<?php 
	$nama=htmlspecialchars($_POST['name']);
	$email=htmlspecialchars($_POST['email']);
	$hp=htmlspecialchars($_POST['nohp']);
	$message=htmlspecialchars($_POST['message']);

	$host="localhost";
	$usernameserver="root";
	$passwordserver="";
	$database="guest";

	$koneksi=mysqli_connect($host,$usernameserver,$passwordserver,$database) or die("tidak bisa nyambung ke mysql");
	if($koneksi)
	{
		$query="INSERT	INTO	mahasiswa VALUES ('$nim','$nohp','$email','hobby','$address','$nama') ";
		$result=mysqli_query($koneksi,$query); 
		include"tampil_bukutamu.php";
	}
	

 ?>