<html>
<body>


<?php
include '/includes/dbconn.php';
$sql="select * from quizz where cat_id='".$_GET['pg']."'";
$res=mysql_query($sql,$conn);
$x=1; $score=0;
for($i=1; $i<=5; $i++)
{
	$row=mysql_fetch_assoc($res);
	$que=$row['question'];
	$ans=$_POST[$x];
	$correct=$row['val'];
	if(strcmp($ans,$correct)==0)
	{
		$score++;
		$acolor='green';
	}
	else{
		$acolor='red';
	}
	echo '&nbsp&nbsp&nbsp&nbspYour answer: <font color='.$acolor.'>'.$ans.'<font color=black><br/>';
	echo '&nbsp&nbsp&nbsp&nbspCorrect answer: '.$correct.'<br/>';
	echo'<hr>' ;
	$x+=1;
	
}
echo 'Score:'.$score.'/'.$x;
$g=$_SESSION['games'];
$g+=1;
$m=$_SESSION['email'];
$inc="UPDATE users_db SET games = '".$g."' WHERE users_db.email = '".$m."'";
mysql_query($inc,$conn);

?>



<div>