<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Duel Academy</title>
<link href="http://duelacademy.myapprenticeapp.com/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="http://duelacademy.myapprenticeapp.com/css/style.css" rel="stylesheet" type="text/css" />
<script src=<?php echo base_url() . "js/analytics.js"?>></script>
</head>

<body>
<div id="wrapper">
	<div id="homeLogo">
		<div id="logo"><img src="http://i35.tinypic.com/352eo9f.png"/></div>
	</div>
	<form action="http://localhost/index.php/user/login" method="POST">
		<div id="login"> Login: <input type="text" class="resizedTexbox" name="user_name"></div>
		<div id="homeButton"> 
			<div id="loginButton"><input type="submit" class="btn btn-success" value="Login"></div>
			<div id="registerButton"><a class="btn btn-primary" href=<?php echo site_url() . "/user/index/register"?>>Register</a></div>
		</div>
	</form>

</div>
</body>
</html>
