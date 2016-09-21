<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$id = $_POST['id'];
		$plat = $_POST['plat'];
		$merk = $_POST['merk'];
		$tahun = $_POST['tahun'];
		
		require_once('dbConnect.php');
		
		$sql = "UPDATE tbl_kendaraan SET plat = '$plat', merk = '$merk', tahun = '$tahun' WHERE id = $id;";
		
		if(mysqli_query($con,$sql)){
			echo 'Data Kendaraan Berhasil Diubah';
		}else{
			echo 'Data Kendaraan Gagal Disimpan';
		}
		
		mysqli_close($con);
	}