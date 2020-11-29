<?php
	require_once 'config.php';
	$sql="select visible from LoginStatus 
	where id=1";
	$result=mysqli_query($conn,$sql);
	if (!$result){
		echo "Error ".mysql_error($conn);
	}else{
		$count=mysqli_num_rows($result);
		$user=mysqli_fetch_array($result,MYSQL_ASSOC);
		if($user['visible']==1){
		    header('location: Monitering.php');
		}else{
		    header('location: login.php');
		}
	
	}
?>