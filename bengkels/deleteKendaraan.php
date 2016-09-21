<?php 
	$id = $_GET['id'];
	
	require_once('dbConnect.php');
	
	$sql = "DELETE FROM tbl_kendaraan WHERE id=$id;";
	
	if(mysqli_query($con,$sql)){
		echo 'Data Kendaraan Berhasil Dihapus';
	}else{
		echo 'Data Kendaraan Gagal Disimpan';
	}
	
	mysqli_close($con);
