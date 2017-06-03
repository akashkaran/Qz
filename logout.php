<?php
 session_start();
 session_destroy();
 echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Logged Out');
		window.location.href='login.php';
		</SCRIPT>");
 ?>
