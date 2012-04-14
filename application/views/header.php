<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="./static/css/style.css" media="screen" />
	<script type="text/javascript" src="./static/myscript.js"></script>
</head>
<body>
	<div id="wrappper">
		
		<div id="header">
			<div id="logo">
				<a href="#"><?php echo $logo;?><span class="logo-title">By  Mario Onekanda</span></a>
			</div>
			<div id="loggin-form">
				<form action="#" action="post">
					<input type="text" name="username" class="login-field" /><br />
					<p>Forgot your password</p>
					<input type="password" name="password" class="login-field" />
					<p>Want to be a member?</p>
					<input type="checkbox" name="session" value="remember" />Remember me</>
					<input type="submit" name="submit" value="Login" />
				</form>
			</div>
			<div id="banner-bg">
				My banner
			</div>
		</div>
		<!--