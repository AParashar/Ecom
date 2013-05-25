
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Online Medicine</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="images/style.css" rel="stylesheet" type="text/css">
</head>
    <body>
	
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td><a href="index.php"><img src="images/online-medicine.gif" width="231" height="69" border="0"></a></td>
        <td align="right" valign="bottom">
            <span class="whitelink">
            <table width="100%" border="0" cellpadding="0" cellspacing="3">
                <tr align="center">
                    <td height="25" class="tab_g"><a href="index.php">Home</a></td>
                    <td class="tab_g"><a href="cat.php?search=">Products</a></td>              
                    <td class="tab_g"><a href="cart.php?medicine=">Shopping Cart</a></td>
                    <td class="tab_g">
					<?php
					@session_start();
					if(!isset($_SESSION['login']))
					echo'<a href="login.php">Login</a>';
					else
					echo'<a href = "logout.php">Logout</a>';
					?>              </td> </tr>
            </table>
            </span>
        </td>
    </tr>
</table>
<form name="srchFrm" method="get" action="cat.php">
    <table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="29"><?php
		
		if(isset($_SESSION['login']))
		echo 'Welcome '.$_SESSION['user'].' &nbsp;';
		else
		echo 'Welcome Guest'
		?></td>
            <td height="29" align="right">
                <table  border="0" cellspacing="0" cellpadding="5">
                    <tr align="center">
                        <td>Search</td>
                        <td>
                            <input type="text" name="search" value="">
                        </td>
                                           </tr>
                </table>
            </td>
        </tr>
        <tr align="right">
            <td height="10" colspan="2">&nbsp;</td>
        </tr>
    </table>
</form>
    <table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr valign="top">
            <td width="200">
    <table width="100%"  border="0" cellpadding="0" cellspacing="0" class="box_border">
    
</table><br />
 
<div style = 'position:absolute;top:25%;'>
<center>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("user", $con);
$s=$_GET['search'];
if($s=='')
{

$result = mysql_query("SELECT * from product"); 
echo'<table cellpadding="4" cellspacing="2" align="center" style="position:relative;left:50px" border="2">';
while($row = mysql_fetch_array($result))
  {
	  echo'
	  <tr>
	  <td><img src="'.$row["imagesrc"].'"height=114 width=104></td><td width=500px><br>Name:'.$row["mname"].'<br>Price : '.$row["price"].'<br>Details : '.$row["details"].'<br>Type: '.$row["mtype"].'
	  </td>
	  <td><a href = "cart.php?medicine='.$row["mname"].'"><img src = "images/buy.jpg"></a></td>
	  </tr>';
  }
}/*
else if($s=='b')
{
$result = mysql_query("SELECT * from product where mtype='Antidiabetic'");
echo'<table cellpadding="4" cellspacing="2" align="center" style="position:relative;left:50px" border="2">';
while($row = mysql_fetch_array($result))
  {
	  echo'
	  <tr>
	  <td><img src="'.$row["imagesrc"].'" height=114 width=104></td><td width=500px><br>Name:'.$row["mname"].'<br>Price : '.$row["price"].'<br>Details : '.$row["details"].'<br>Type: '.$row["mtype"].'
	  </td>
	  <td><a href = "cart.php?medicine='.$row["mname"].'"><img src = "images/buy.jpg"></a></td>
	  </tr>';
  }
}
else if($s=='s')
{
$result = mysql_query("SELECT * from product where mtype='Bloodpressure'");
echo'<table cellpadding="4" cellspacing="2" align="center" style="position:relative;left:50px" border="2">';
while($row = mysql_fetch_array($result))
  {
	  echo'
	  <tr>
	  <td><img src="'.$row["imagesrc"].'" height=114 width=104></td><td width=500px><br>Name:'.$row["mname"].'<br>Price : '.$row["price"].'<br>Details : '.$row["details"].'<br>Type: '.$row["mtype"].'
	  </td>
	  <td><a href = "cart.php?medicine='.$row["mname"].'"><img src = "images/buy.jpg"></a></td>
	  </tr>';
  }
}
else if($s=='f')
{
$result = mysql_query("SELECT * from product where mtype='Hair'");
echo'<table cellpadding="4" cellspacing="2" align="center" style="position:relative;left:50px" border="2">';
while($row = mysql_fetch_array($result))
  {
	  echo'
	  <tr>
	  <td><img src="'.$row["imagesrc"].'" height=114 width=104></td><td width=500px><br>Name:'.$row["mname"].'<br>Price : '.$row["price"].'<br>Details : '.$row["details"].'<br>Type: '.$row["mtype"].'
	  </td>
	  <td><a href = "cart.php?medicine='.$row["mname"].'"><img src = "images/buy.jpg"></a></td>
	  </tr>';
  }
}
else if($s=='a')
{
$result = mysql_query("SELECT * from product where mtype='Bones'");
echo'<table cellpadding="4" cellspacing="2" align="center" style="position:relative;left:50px" border="2">';
while($row = mysql_fetch_array($result))
  {
	  echo'
	  <tr>
	  <td><img src="'.$row["imagesrc"].'" height=114 width=104></td><td width=500px><br>Name:'.$row["mname"].'<br>Price : '.$row["price"].'<br>Details : '.$row["details"].'<br>Type: '.$row["mtype"].'
	  </td>
	  <td><a href = "cart.php?medicine='.$row["mname"].'"><img src = "images/buy.jpg"></a></td>
	  </tr>';
  }
}*/
else{
$result = mysql_query("SELECT * from product where mname like '%$s%'");
$count=@mysql_num_rows($result);
if($count==0)
echo "No such medicine Found";
else{
echo'<table cellpadding="4" cellspacing="2" align="center" style="position:relative;left:50px" border="2">';
while($row = mysql_fetch_array($result))
  {
	  echo'
	  <tr>
	  <td><img src="'.$row["imagesrc"].'" height=114 width=104></td><td width=500px><br>Name:'.$row["mname"].'<br>Price : '.$row["price"].'<br>Details : '.$row["details"].'<br>Type: '.$row["mtype"].'
	  </td>
	  <td><a href = "cart.php?medicine='.$row["mname"].'"><img src = "images/buy.jpg"></a></td>
	  </tr>';
  }
  }
  }
echo'</table>';
?>
</center>
</div> 
</body>
</html>
