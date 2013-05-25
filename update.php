<?php
$con = mysql_connect("localhost","root","");
 session_start();
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("user", $con);
//$medicine=$_SESSION['bnamee'] or die('medicine' . mysql_error());
$medicine=$_REQUEST['medicine'];
$row = mysql_query("SELECT price from product where mname='$medicine'") or die('select' . mysql_error()); 
$qty = $_REQUEST['qty'];
$sql="UPDATE cart SET qty='$qty' WHERE mname = '$medicine'"or die('79' . mysql_error());  

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added ";
header('Location: cart.php?medicine=');
mysql_close($con);
?>