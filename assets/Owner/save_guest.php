<?php 

	$nama=$_POST['name'];
	$nohp=$_POST['nohp'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$host="localhost";
	$usernameserver="root";
	$passwordserver="";
	$database="guest";

	$koneksi=mysqli_connect($host,$usernameserver,$passwordserver,$database) or die("tidak bisa nyambung ke mysql");
	if($koneksi)
	{
		$query="INSERT	INTO	contact VALUES ('$nama','$email','$nohp','$message') ";
		$result=mysqli_query($koneksi,$query); 
		
	}
	

 ?>