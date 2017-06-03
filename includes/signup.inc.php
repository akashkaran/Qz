<?php
 include 'dbconn.php';
 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
  mysql_select_db("qz_db");
 //To check if user already exists

 $sql="insert into users_db"."(name,email,password)"."values('$name','$email','$password')";
 if( !(mysql_query($sql,$conn)))
 {die('Error'.mysql_error());}
 else
	 //echo "Entered";

 ?>
 
 <html>
<script>
function red()
{
	window.location="../login.php";
}
setTimeout('red()',5000);
document.write("Welcome \<b\> <?php echo "$name !";?> \</b\>");
 </script>
 <p>You will be redirected to login page in 5 sec or <a href="../login.php" > click here.</a></p>
 </html>