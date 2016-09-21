<?php 
	$id = $_GET['id'];
	
	require_once('dbConnect.php');
	
	$sql = "SELECT * FROM tbl_kendaraan WHERE id=$id";
	$r = mysqli_query($con,$sql);
	
	$result = array();
	
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"id"=>$row['id'],
			"plat"=>$row['plat'],
			"merk"=>$row['merk'],
			"tahun"=>$row['tahun']
		));

	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);