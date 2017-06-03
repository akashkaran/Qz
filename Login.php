<?php
include 'includes/dbconn.php';
?>
<html>
    <head>
        <title>Login</title>
		
		<style>
	
		</style>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body >
        
        <div align="center"><h1>Login</h1></div>
		<div align="center">
		<form method="post" action="includes/login.inc.php">
		Username<input type="text" id="k" name="user_id"><br/>
		Password <input type="password" name="password";><br/>
		<button type="submit";>Login</button>
		<button type="reset";>Reset</button>
		</form>
		</div>
		
		
    </body>
</html>
