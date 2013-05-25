<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BookStore</title>
<style type="text/css">
<!--
body {
	background-image: url(images/bg.JPG);
	background-repeat: repeat;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-weight: bold;
}
-->
</style>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div style="background-image: url(images/headloginbar.JPG);top:0px;	background-repeat: repeat-x;">&nbsp;
<div style = "position:absolute; top:10px; right:3%; width: 563px; height:30px; background-image: url(images/headlogin.JPG); background-repeat: repeat;">
 <?php
 session_start();
if(isset($_SESSION['login']))
echo 'Welcome '.$_SESSION['user'].' &nbsp; <a href = "logout.php"><input type="button" value="Logout"></a>';
 else
  echo'<div align="center">
  <form action="login.php" method="post">Email :
    <input name="email" type="text" />
    &nbsp; Password : 
    <input name="password" type="password" /> <input type="submit" value="Login" />
    </form>
  </div>';
  ?>
</div>
</div>
<div style="top:19px; font-family: Arial, Helvetica, sans-serif; position:absolute; left: 12px; font-weight: normal;"><a href="index.php">Home</a> | <a href="cat.php?search=">Catalogue</a> |
 
 <?php
 //session_start();
if(isset($_SESSION['login']))
echo '<a href="cart.php?medicine=">Shopping Cart</a>';
 else
  echo'<a href="register.php">Register</a>';
  ?>
 |<a href="contact.php">Contact</a></div>
<div style=" height:50px;"></div>
<div>
  <div align="center"><img src="images/bookstr.JPG" width="527" height="177" align="middle" /></div>
</div>
<div style=" height:75px;"></div>
<div align="center"></div><center>
Thankyou for the Purchase you will receive your medicine soon....
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
		
 $us=$_SESSION['user']; 
mysql_select_db("user", $con);
$sql="DELETE FROM cart
WHERE uname = '$us' ";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);
header('Location: index.php');
?>
</div>
<div>
  
  <p align="center"><img src="images/bline.JPG" width="956" height="17" /></p>
  <p align="right">&nbsp;</p>
</div>
<div>
  <div align="center"><img src="images/sponsers.JPG" width="723" height="118" /></div>
</div>
</body>
</html>