<html>
<?php
include '/includes/dbconn.php';
if(!isset($_SESSION['userid']))
{
	$guest=true;
	$name="Guest";
	echo "Welcome! $name<br/>";
	
}
else
{	  $userid=$_SESSION['userid'];
	  $sql="select * from users_db where userid='$userid'";
	  $retval = mysql_query( $sql,$conn );
	  $row = mysql_fetch_assoc($retval);
	  //$email=$_SESSION['email'];
	  $_SESSION['name']=$row['name'];
	  $games=$row['games'];
	  $name=$row['name'];
	  //$_SESSION['userid']=$row['userid'];
	  echo "Welcome! $name <br/><p>Games  played $games</p>";
}

?>

<body>

<div align="center">
<h1><big><big><big><big>Q.z</big></big></big></big></h1>
<big>
<a href="quiz.php?pg=1"><button values="General" type="submit" name="1">General</button></a>
<a href="quiz.php?pg=2"><button values="Sports" type="submit" name="2">sports</button></a>
<a href="quiz.php?pg=3"><button values="Other" type="submit" name="3">other</button></a>
</form></big></div>
</body>
</html>
