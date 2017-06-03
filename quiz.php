<html>
<body>

<div>
<form method="post" action="eval.php?pg=<?php echo $_GET['pg'];?>">


<?php
include '/includes/dbconn.php';
$sql="select * from quizz where cat_id='".$_GET['pg']."'";

$res=mysql_query($sql,$conn);
if(!$res)
{
	echo "Failed";
}

else
{
	$x=1;
	for($i=1; $i<=5; $i++)
	{	
	$row[rand(1,5)]=mysql_fetch_array($res);
	$que=$row[rand(1,5)]['question'];
	$a=$row[rand(1,5)]['val_a'];
	$b=$row[rand(1,5)]['val_b'];
	$c=$row[rand(1,5)]['val_c'];
	$d=$row[rand(1,5)]['val_d'];
	
	{
		
		echo "<b>"."$i)".$que."</b><br/>";
		echo "<input type='radio' name=".$x." value='".$a."'/>".$a."
		<input type='radio' name=".$x." value='".$b."'/>".$b."
		<input type='radio' name=".$x." value='".$c."'/>".$c."
		<input type='radio' name=".$x." value='".$d."'/>".$d."<br/>";
		$x+=1;
		
	}
	}
}

?>
<button type="submit">Submit</button>
</body>
</html>

