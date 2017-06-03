<?php
include 'includes/dbconn.php';
if(!isset($_SESSION['userid']))
{
	echo "Please Login to view this..";
}
else
{
      $userid = $_SESSION['userid'];
	  $sql="select * from users_db where userid='$userid'";
	  $retval = mysql_query( $sql,$conn );
	  $row = mysql_fetch_assoc($retval);
	  $name=$row['name'];
	  $mail=$row['email'];
	  $dob=$row['dob'];
	  $games=$row['games'];
	  $join=$row['join_date'];
	  
	 echo "Welcome $name!";
}  

?>

<br/>
<hr>
<p>personel Info</p>
<?php echo "email id $mail"; echo"<br/>";
		echo "Date of Birth $dob"; echo"<br/>";
		echo "Date of join $join"; echo"<br/>";
		echo "Number of Quiz played $games";?>
