
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Online Medicine Store</title> 
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="description" content="Online-medecine-store is a premier online pharmacy providing a large range of prescription drugs.">
    <meta name="keywords" content="Quality Generic Drugs, Huge Savings, More Than 1200 Drugs, Generic, Herbal,  Ayurvedic, anti allergic,  anti-parkinson agents,  antidiabetic,  blood thinner,  deworming,  dipression care,  erectile dysfunction,  eye care,  gout pain,  hair care,  hemorroids,  infectives,  loreal co,  men special,  migrane,  vaginal creams,  women special, Kamagra Gold 100MG, Kamagra Jelly, Myagra 100MG, King Cobra Penis Enlargement, Uplift, Herbal Viagra">
    <meta name="copyright" content="Online Medicine Store">
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
					{echo'<a href="login.php">Login</a>';
					}
					else
					echo'<a href = "logout.php">Logout</a>';
					
					?>
					</td>
					</tr>
            </table>
            </span>
        </td>
    </tr>
</table>
<form name="srchFrm" method="get" action="cat.php">
    <table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="29"> <?php
		
		if(isset($_SESSION['login']))
		echo 'Welcome '.$_SESSION['user'].' &nbsp;';
		else
		{echo 'Welcome Guest';
		die('<h1><center>Please login to continue');}
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
<br />
<div align="center"></div>


<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("user", $con);
$us=$_SESSION['user'];
$medicine=$_GET['medicine'];
$total=0;
if($medicine!='')
{
$result1 = mysql_query("SELECT * from cart where mname ='$medicine' and uname='$us'");
$count=@mysql_num_rows($result1);
if($count!=0)
die('<center><h2>Medicine already in cart.. </h2><a href = "cat.php?search=">Back to Catlogue</a></center>');


$result = mysql_query("SELECT * from product where mname ='$medicine'");
while($ro = mysql_fetch_array($result))
$row = $ro['price'];
$sql="INSERT INTO cart (uname, mname, qty, price)
VALUES
('$us','$medicine',1,'$row')" or die('79' . mysql_error());
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
}
$result = mysql_query("SELECT * from cart where uname = '$us'"); 
$count=@mysql_num_rows($result);

if($count==0)
echo '<center><h2>Sorry, Cart is empty </h2><a href = "cat.php?search=">Back to Catlogue</a></center>';
else
{
echo'<table cellpadding="10" cellspacing="0" align="center"  border="1">
<tr>
<th>Medicine Name</th>
<th>Quantity</th>
<th>Rate</th>
<th>Price</th>
</tr>';

while($row = mysql_fetch_array($result))
  {
	  echo'
	  <tr>
	  <td>'.$row["mname"].'</td><td><form action = "update.php" method = "get"><input type = "hidden" value = "'.$row["mname"].'" name = "medicine" > <input type = "text" value = "'.$row["qty"].'" name = "qty" size = 5></td><td> '.$row["price"].'</td>
	  <td>'.$row["qty"]*$row["price"].'</td><td><input type = "submit" value = "Update" style="background: #ccc url(\"images/upd.jpg\") no-repeat "; ></td><td><a href = remove.php?mname='.$row["mname"].'><img src = "images/rem.jpg"></a></td></form>
	  </tr>';
	  //$_SESSION['mnamee']=$row["mname"];
	  $total+=($row["qty"]*$row["price"]);
  }
 echo '</table> <div style = "position:relative;top:10px"> <center>Total is Rs. '.$total.'&nbsp;&nbsp;<a href = "cat.php?search=">Back to Catlogue</a><br></div><div style = "position:relative;top:10px"> <center><a href = checkout.php><img src = "images/chk.jpg"></a></div>';
 }
?>



<div style="height:50px"></div>	
<table width="100%"  border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="footer"><table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td> &copy; 2012 med-online.com All rights reserved.</td>
        <td align="right"><a href="about_us.php">About Us</a> | <a href="contact_us.php">Contact Us</a> | <a href="privacy_policy.php">Privacy Policy</a> | <a href="terms_conditions.php">Terms and Conditions</a> </td>
      </tr>
    </table></td>
  </tr>
</table>    
    </body>
</html>
