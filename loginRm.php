<?php
    require_once 'config.php';
    if (isset($_POST['username']) && isset($_POST['pass'])){
								$username=$_POST['username'];
								$password=$_POST['pass'];
								login($conn,$username,$password);
							}
							else
							{
								//echo "Please check your username and password";
							}
	function login($conn,$username,$password){
		$sql="select * from user 
		where Username='$username' and password='$password'";
		$result=mysqli_query($conn,$sql);
		$sql2="UPDATE LoginStatus SET visible=1 WHERE id=1";
		$result2=mysqli_multi_query($conn, $sql2);
		if (!$result){
			echo "Error ".mysql_error($conn);
		}else{
			$count=mysqli_num_rows($result);
			if ($count==1){
			    header("location:Monitering.php?userName='$username'");
			    session_start();
				$_SESSION['login']=$username;
			}
			else{
				header('location: login.php');
			}
		}
	}

?>	