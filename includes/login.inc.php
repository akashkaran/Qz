<?php

include 'dbconn.php';
$email=$_POST['user_id'];
$password=$_POST['password'];
mysql_select_db("qz_db");
$sql="select * from users_db where email='$email' AND password='$password'";

$res=(mysql_query($sql,$conn));
	if ((!$row = mysql_fetch_assoc($res)))
	{
		die("<script>window.alert('Login Failed!');
		window.location.href='../login.php';
		</script>".mysql_error());
	}
else
	{	
		$_SESSION['name']=$row['name'];
		$_SESSION['userid']=$row['userid'];
		$_SESSION['games']=$row['games'];
	    $_SESSION['email']=$row['email'];
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Welcome ".$_SESSION['name']."!!!');
		window.location.href='../homepage.php';
		</SCRIPT>");
	} 
 ?>

 