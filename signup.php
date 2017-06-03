<html>
<head>
<title>SignUp</title>
</head>
<style>
input{
	border:1px gray;
}
form {
  max-width: 300px;
  margin: 50px auto;
  padding: 10px 20px;
  background: #f4f7f8;
}
div{
	border:1px solid black;
}
</style>
<body>
<div align="center"><h1>SignUp</h1></div>
<div align="center">
<form action="/Qz/includes/signup.inc.php" method="post" class="for">
Name: &nbsp &nbsp <input type="text" name="name" required/><br/>
Email: &nbsp &nbsp <input type="text" name="email"/><br/>
Password <input type="password" name="password"/><br/>
<button type="submit">Signup</button>
<a href="login.php";><input type="button" value="Login"/></a>
</form>
</div>
</body>
</html>