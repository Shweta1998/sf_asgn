<?php
require_once 'dbconnect_sf.php';
if($user->is_loggedin()!=""){
	$user->redirect('home.php');
}
if(isset($_POST['logintab'])){
	$uname = $_POST['username'];
 	$upass = $_POST['password'];
 	if($user->login($uname,$upass)){
  		$user->redirect('home.php');
 }
 else{
 	$error="Please enter valid credentials";
 }
}
?>
<!doctype html>
<html>
<head>
<title>User Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="icon" type="image/jpg" href="icon.jpg"/>
<link rel="stylesheet" type="text/css" href="design_sf.css"/>
</head>
<body>
<div id="navbar">
<ul>
	<li><a href="login_sf.php"><div id="login">My Task Portal</div></a></li>
</ul>
</div>
<div id="form1">
<form name="f1" method="POST" action="login_sf.php">
<p>LOGIN</p>
<div id="u2">Username :
<input type="text" name="username" placeholder="Username" id="u1" style="left: 7px;position: relative;"/><br></div>
<div id="p2">Password :
<input type="Password" name="password" placeholder="Password" id="p1" style="left: 10px;position: relative;"/><br></div>
<input type="submit" name="logintab" id="b1" value="LOGIN" style="color: white;" />
</form>
</div>

</body>
</html>