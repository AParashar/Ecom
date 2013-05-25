<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="jquery.validate.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BookStore</title>
<style type="text/css">
body {
	background-image: url(images/bg.JPG);
	background-repeat: repeat;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-weight: bold;
}

h1 {
    padding:20px 10px 20px 10px;
}
h2 {
    padding-left: 0px !important;
}
#header {
    background-color: #CA410B !important;
}
.large { font-size:22px; }
.orange { color:orange; }
.italic { font-style:italic }
.textmiddle {vertical-align:middle;}
.padout { padding-left:25px; padding-right:25px; }
.rounded-corners {
     -moz-border-radius: 40px;
    -webkit-border-radius: 40px;
    -khtml-border-radius: 40px;
    border-radius: 40px;
}
.rounded-corners-top {
     -moz-border-top-radius: 40px;
    -webkit-border-radius: 40px;
    -khtml-border-radius: 40px;
    border-radius: 40px;
}
.right {
    float: right;
}
.scrolldown { padding-left:20px; color:#EDECE8; font-size:40px; font-weight:bold; vertical-align:middle;
	text-shadow: #6374AB 2px 2px 2px;
 }
 .contentblock { margin: 0px 20px; }
 .results { border: 1px solid blue; padding:20px; margin-top:20px; min-height:50px; }
 .blue-bold { font-size:18px; font-weight:bold; color:blue; }

 /* example styles for validation form demo */
#register-form {
    background: url("C://Eweb//med.gif") repeat-x scroll left bottom #F8FDEF;
    border: 1px solid #DFDCDC;
    border-radius: 15px 15px 15px 15px;
    display: inline-block;
    margin-bottom: 30px;
    margin-left: 0px;
    margin-top: 10px;
    padding: 15px 30px 10px;
    width: 550px;
}

#register-form .fieldgroup {
    background: url(""C://Eweb//med.gif"") repeat-x scroll left top transparent;
    display: inline-block;
    padding: 8px 10px;
    width: 340px;
}

#register-form .fieldgroup label {
    float: left;
    padding: 15px 0 0;
    text-align: right;
    width: 110px;
}

#register-form .fieldgroup input, #register-form .fieldgroup textarea, #register-form .fieldgroup select {
    float: right;
    margin: 10px 0;
    height: 25px;
}

#register-form .submit {
    padding: 10px;
    width: 220px;
    height: 40px !important;
}

#register-form .fieldgroup label.error {
    color: #FB3A3A;
    display: inline-block;
    margin: 4px 0 5px 125px;
    padding: 0;
    text-align: left;
    width: 220px;
}
</style>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<center>
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
            $("#register-form").validate({
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
                    agree: "required"
                },
                messages: {
                    firstname: "Please enter your firstname",
                    lastname: "Please enter your lastname",
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                    email: "Please enter a valid email address",
                    agree: "Please accept our policy"
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
<div id="page-wrap">
  <div id="content">
  <form action="reg.php" method="post" id="register-form" novalidate="novalidate">
  <div id="form-content">
    <fieldset>

<div class="fieldgroup">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname">
            </div>
			<p>
<div class="fieldgroup">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname">
            </div>
			</p>
            <p>
<div class="fieldgroup">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>
			</p>
            <p>
<div class="fieldgroup">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
			</p>
            <p>
<div class="fieldgroup">
                <input type="submit" value="Register" class="submit">
            </div>
			</p>
    </fieldset>
    </div>

        <div class="fieldgroup">
            <p>Already registered? <a href="signin.php">Sign in</a>.</p>
        </div>
</form>
<!-- END HTML form for validation -->


<center>
</body>
</html>