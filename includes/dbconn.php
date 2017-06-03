
 <?php 
 $dbhost="localhost";
 $dbuser="root";
 $dbpass="k";
 $db="qz_db";
 $conn=mysql_connect($dbhost,$dbuser,$dbpass,$db);
 mysql_select_db("qz_db");
 if(!$conn)
	 die(mysql_error().'Error');
 else
	 //echo "Connected";
 
session_start();
 
if(!isset($_SESSION['userid']))
{
	?><a href="index.php" style="float:right"><button>Home</button></a><?php
}
else
{
	?>
 <a href="logout.php" style="float:right"><button>Logout</button></a>
 <a href="homepage.php" style="float:right"><button>Home</button></a>
 <a href="profile.php" style="float:right"><button>Profile</button></a>
<?php } ?>