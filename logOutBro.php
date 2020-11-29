<?php
require_once 'config.php';
$sql2="UPDATE LoginStatus SET visible=0 WHERE id=1";
$result2=mysqli_multi_query($conn, $sql2);
session_start();
session_destroy();
session_unset();
header('location: http://www.autohydroponicsfarm.com');


?>