<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Getting values
		error_reporting(0);
		$id = $_POST['id'];
		$plat = $_POST['plat'];
		$merk = $_POST['merk'];
		$tahun = $_POST['tahun'];
		
		//Creating an sql query
		$sql = "INSERT INTO tbl_kendaraan(id,plat,merk,tahun) VALUES ('$id','$plat','$merk','$tahun')";
		
		//Importing our db connection script
		require_once('dbConnect.php');
		
		//Executing query to database
		if(mysqli_query($con,$sql)){
			echo 'Data Kendaraan Berhasil Disimpan';
		}else{
			echo 'Data Kendaraan Gagal Disimpan';
		}
		
		//Closing the database 
		mysqli_close($con);
	}