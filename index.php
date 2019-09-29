 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Portal</title>
	<link href="css/index.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Wendy+One' rel='stylesheet' type='text/css'>

<script type="text/javascript">
	
function validate(){

	username = document.getElementById("username");
	pass = document.getElementById("pass");
	
	if(username.value == null || pass.value == null || username.value == "" || pass.value == ""){

		document.getElementById("required_text").style.visibility="visible";
		return false;
	}else
		return true;

}
</script>
</head>

<body>
<?php
session_start();
echo isset($_SESSION['is_logged_in']).'<br>';
echo isset($_SESSION['type']).'<br>';
if ( isset($_SESSION['is_logged_in']) && isset($_SESSION['type']) && ($_SESSION['is_logged_in'] == 1) )
{
	if ( !strcmp($_SESSION['type'], 'user') ) 
	{
		header("location:home.php");
	}
	else
	{
		header("location:admin.php");	
	}
}
else
{
	$_SESSION['is_logged_in'] = 0;
}
?>

	<div id="test">
		<div id="title">Project Portal</div>	
	</div>

	<div id="login">Login</div>
	<div id="login_container">
		<form name="login_form" action="login.php" method="post" onsubmit="return validate()">
		<table id="login_table" border="0">
			<tr>
				<td id="col1">Username</td>
				<td id="col2"><input type="text" id="username" name="name"></td>
			</tr>

			<tr>
				<td id="col1">Password</td>
				<td id="col2"><input type="password" id="pass" name="pass"></td>
			</tr>
		</table>
		<input type="submit" id="btn" value="Login"></td>
		<a href="signup_temp.html" id="signup_button"><input type="Button" id="btn2" value="Sign Up"></a><br \>
		
		<!-- <a href="forgot_password.html" id="forgot_password"><input type="Button" id="btn3" value="Forgot Password"></a> -->
		</form>
		<div id="guest"><a href="others/others_projects.php" id="guest">Guest User?</a></div><br/>
		<div id="fg_pass"><a href="forgot_pass.html" id="guest">Forgot Password?</a></div>
	</div>
	<div id="required_text">Cannot leave fields empty</a></div>
	
</body>

</html>