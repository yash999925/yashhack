<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Portal</title>
  <link href="css/new_user.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
$usn = $_POST['usn'];
$name = $_POST['name'];
$email = $_POST['email'];
$passwd = md5($_POST['pass']);
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$gender = (string)$gender;
$g = 1;
if (strcmp($gender,"Male"))
{	
	$g = 0;
}

$con=mysqli_connect("localhost","root","","projects");

if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM users WHERE usn='$usn'");

if (mysqli_error($con))
{
   die(mysqli_error($con));
}

if(mysqli_num_rows($result) == 1)
{
  	//header("location:logout.php");
  	echo "<div id=\"already\">User ".$usn." already exists</div>";
  	echo "<br><a href=\"signup_temp.html\" id=\"back\">Go back</a>";
}
else
{

	$sql="INSERT INTO users (usn, passwd, email, usertype, DOB, gender, phone, name) VALUES
	('$usn', '$passwd', '$email', 'user', '$dob', '$g', '$phone', '$name')";

	if (!mysqli_query($con,$sql))
	{
	  die('Error: ' . mysqli_error($con));
	}
	
	echo "<div id=\"new_user\">Your account has been created<br>Username : ".$usn."</div><br>";
	echo "<a href=\"index.php\" id=\"login_link\">Login here</a>";
}

mysqli_close($con);
?>

</body>

</html>