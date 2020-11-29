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

?>