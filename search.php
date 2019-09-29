<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
  <link href="css/admin.css" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
</head>

<body>


<?php
session_start();
if ($_SESSION['is_logged_in'] == 0 )
{
    header("Location:index.html");
    die();
}
$text=$_POST['search'];
if (!strcmp( $_POST['options'], "Name"))
{
  $select = "Name";
}
else if (!strcmp( $_POST['options'], "Domain"))
{
  $select = "domain";
}
else if (!strcmp( $_POST['options'], "Year"))
{
  $select = "year";
}
else
{
  $select = "PL";
}

$con=mysqli_connect("localhost","root","","projects");

if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM project WHERE $select LIKE '%$text%' ");
if (mysqli_error($con))
{
   die(mysqli_error($con));
}

if(mysqli_num_rows($result) == 0)
{
  echo "No Significant Results found for : " . $text . "";
  echo "<br /><br /><br /><br />";
}
else
{
  echo "Search Results for : ".$text."";
  echo "<br /><br /><br /><br />";

  while($row = mysqli_fetch_array($result))
  {
    $name = $row['Name'];
    $path = "http://localhost/SE/second.php?id=".$row['id']."";
    echo "<a href=$path target=\"_blank\"> $name </a>";
    echo "<br />";
  }
}

mysqli_close($con);

?>
  
</body>

</html>