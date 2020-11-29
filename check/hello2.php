<?php
define('SERVER','localhost');
define('USER','autohydr_Ram');
define('PASSWORD','vivekAs:THROUGHOUT>7');
define('DB','autohydr_ahf');

$conn=mysqli_connect(SERVER,USER,PASSWORD,DB);

	if(!$conn)
	{
		//echo"Connection error".mysqli_connect_error();	
	}
	else
	{
		//echo"connected with the server successfully"."<br>";
	}   


    $status;
	$i=0;
	$query="select Status from WaterStatus where ID =1"; 
	$result=mysqli_query($conn,$query);
	if($result){
		$num_of_rows=mysqli_num_rows($result);
		if($num_of_rows>0){
			while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
				$status= $row[0];
				$i++;
			}
			mysqli_free_result($result);
		}else{
			$arr=null;
		}
	}else{
		die("Error :<br>".mysqli_error($conn));
	}
echo $status;
?>