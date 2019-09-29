<html>

<head>
	<title>Forgot Password</title>
</head>

<body>
<?php
require_once("PHPMailer/class.phpmailer.php");
require_once("PHPMailer/class.smtp.php");
require_once("PHPMailer/language/phpmailer.lang-en.php");
$username = $_POST['text1'];
$password = $_POST['text2'];
$password = md5($password);
$newpass = $_POST['text3'];

$con=mysqli_connect("localhost","root","","projects");

if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM users WHERE usn='$username' AND passwd='$password'");
if (mysqli_error($con))
{
   die(mysqli_error($con));
}


// ---------SEND MAIL---------

if(mysqli_num_rows($result) == 1)
{	
	$mail = new PHPMailer();
	$mail->IsSMTP();  // set mailer to use SMTP
	$mail->Host = "smtp.gmail.com";  // specify main server
	$mail->SMTPAuth = true;     // turn on SMTP authentication
	$mail->Username = "sir.ravi.jaddu@gmail.com";  // SMTP username
	$mail->Password = "z/x.c,123"; // SMTP password
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPDebug = 1;
	$mail->Port = 465;

	$mail->SetFrom('sir.ravi.jaddu@gmail.com', 'Sir RJ');
	$mail->AddReplyTo('sir.ravi.jaddu@gmail.com', 'Sir RJ');
	
	$mail->Subject = "Project Portal Password Help";
	$mail->Body = "Hi". $username. ", \nYou have requested for password change.\nYour new password is ".$newpass;
	$mail->AltBody = "Testing";

	$row = mysqli_fetch_array($result);
	$email = $row['email'];
	$address = "$email";
	$mail->AddAddress($address, "$username");

	if(!$mail->Send())
	{
	   echo "Message could not be sent. <p>";
	   echo "Mailer Error: " . $mail->ErrorInfo;
	   exit;
	}

	echo "Message sent";

// ---------------------------


// -----Update pass in DB-----
	$newpass = md5($newpass);
	mysqli_query($con,"UPDATE users SET passwd='$newpass' WHERE usn='$username' AND email='$password'");
	if (mysqli_error($con))
	{
   		die(mysqli_error($con));
	}
	echo "<br>Password Changed<br>";
// ---------------------------
}
mysqli_close($con);
?>
</body>

</html>