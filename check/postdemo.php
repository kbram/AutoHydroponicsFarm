<?php
//Creates new record as per request
    //Connect to database
    $servername = "localhost";
    $username = "autohydr_Ram";
    $password = "vivekAs:THROUGHOUT>7";
    $dbname = "autohydr_ahf";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    //Get current date and time
    date_default_timezone_set('Asia/Colombo');
    $d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
    $t = date("H:i:s");

    if(!empty($_POST['HumidityIn']) && !empty($_POST['TemperatureIn']) && !empty($_POST['HumidityOut']) && !empty($_POST['TemperatureOut'])&& !empty($_POST['SoilMoisture']) && !empty($_POST['SoilTemperature']))
    {
    	$HumidityIn = $_POST['HumidityIn'];
    	$TemperatureIn = $_POST['TemperatureIn'];
    	$HumidityOut = $_POST['HumidityOut'];
    	$TemperatureOut = $_POST['TemperatureOut'];
    	$SoilMoisture= $_POST['SoilMoisture'];
    	$SoilTemperature= $_POST['SoilTemperature'];

	    $sql = "INSERT INTO InSideTempHum (Humidity, Temperature, Date, Time)
		
		VALUES ('".$HumidityIn."', '".$TemperatureIn."', '".$d."', '".$t."')";

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$sql1 = "INSERT INTO OutSideTempHum (Humidity, Temperature, Date, Time)
		
		VALUES ('".$HumidityOut."', '".$TemperatureOut."', '".$d."', '".$t."')";

		if ($conn->query($sql1) === TRUE) {
		    echo "OK";
		}else {
		    echo "Error: " . $sql1 . "<br>" . $conn->error;
		}
		
		$sql2 = "INSERT INTO SoilSideTempHum (Humidity, Temperature, Date, Time)
		VALUES ('".$SoilMoisture."', '".$SoilTemperature."', '".$d."', '".$t."')";
		
		if ($conn->query($sql2) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql2 . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>