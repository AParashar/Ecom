
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head><title>Online Medicine Store</title>
<link href="images/style.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="jquery.validate.min.js"></script>
	
	<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#regForm").validate({
                rules: {
                    firstname: "required",
                    lastname: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
					address: "required"
				},
                messages: {
                    firstname: "Please enter your firstname",
                    lastname: "Please enter your lastname",
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    email: "Please enter a valid email address",
                    address: "Please enter your address"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>

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
					?>              </td>  </tr>
            </table>
            </span>
        </td>
    </tr>
</table>
<form name="srchFrm" method="get" action="search_result.php">
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
                            <input type="text" name="midSearch" value="">
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
   
<img src = 'images/ayurvedic.jpg' style = 'position:relative;'>
	</td>
            <td width="650" class="box_margin1"><h1>Members Login</h1> <br>
              <strong>If you have already registered, Login below so you dont have to fill up your details again.              </strong><br>
              <br>
                            <form method="post" name="loginFrm" action='log.php'>
                <table width="350" border="0" cellpadding="4" cellspacing="0" class="box_border">
                    <tr>
                        <td class="box_rows">Login ID </td>
                        <td class="box_rows">
                            <input type="text" name="loginID">
                        </td>
                    </tr>
                    <tr>
                        <td class="box_rows">Password</td>
                        <td class="box_rows">
                            <input type="password" name="password" autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td class="box_rows">&nbsp;</td>
                        <td class="box_rows">
                            <input type="submit" name="action" value="Secured Login">
                        </td>
                    </tr>
                </table>
                </form>
                <h2>New Member Register Now<a name="register"></a></h2>
                <p>
                Fields marked (*) are compulsory
                </p>
                <form name="regForm" method="POST" action = 'reg.php'>
                </form>
                <iframe src="register.php" frameborder="0" height="500px" width="550px" scrolling="no">
            </td>
        </tr>
    </table>
<table width="100%"  border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td class="footer"><table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td> &copy; 2012 med-online.com All rights reserved.</td>
        <td align="right"><a href="about_us.php">About Us</a> | <a href="contact_us.php">Contact Us</a> | <a href="privacy_policy.php">Privacy Policy</a> | <a href="terms_conditions.php">Terms and Conditions</a> </td>
      </tr>
    </table></td>
  </tr>
</table>    </body>
</html>
