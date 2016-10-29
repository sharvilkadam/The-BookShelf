<?php
include 'common.php';
include 'db.php';
error_reporting(0);
if (!isset($_POST['submit'])):
// Display the user signup form
?>

<html>
<head>
<title>Register on The Bookshelf</title>
<style>
.error {
   color: red;
   font-size: 12px;
}

.legend{
 margin-top:5%;
font-family:'Eras medium ITC';
text-transform: uppercase;
}
.formtable{
margin-left:13%;}
body {
  background-image:url("scroll_background_page_horizontal.jpg");
  background-position:* *;
  background-repeat: no-repeat;

}
.reset, .submit {
font-family:'Tempus sans ITC'; 
background: -moz-linear-gradient(#d4b78f,#ecdcb7);
text-transform: uppercase;
font-weight: bold;
box-shadow: 3px 3px 1px #0a0702;
text-shadow: 1px 1px 0px #0a0702;
background: -webkit-linear-gradient(#d4b78f,#ecdcb7 45%);
border: 2px groove;
border-radius: 10px;
}
.reset:hover{
font-family:'Tempus sans ITC'; 
background: -moz-linear-gradient(#d4b78f,#9D6524);
text-transform: uppercase;
font-weight: bold;
box-shadow: 3px 3px 1px #0a0702;
text-shadow: 1px 1px 0px #0a0702;
background: -webkit-linear-gradient(#d4b78f,#9D6524 45%);
border: 2px groove;
border-radius: 10px;
}
.submit:hover{
font-family:'Tempus sans ITC'; 
background: -moz-linear-gradient(#d4b78f,#9D6524);
text-transform: uppercase;
font-weight: bold;
box-shadow: 3px 3px 1px #0a0702;
text-shadow: 1px 1px 0px #0a0702;
background: -webkit-linear-gradient(#d4b78f,#9D6524 45%);
border: 2px groove;
border-radius: 10px;
}
.info, .security {
text-shadow: 1px 1px 2px #0a0702;
font-family:'Eras medium ITC';
}
.myform{
  font-family:'Eras medium ITC';}

  </style>
<script src="jquery.js"></script>
<script src="jquery_validate.js"></script>
<script>
$(document).ready(function(){
$("#myform").validate({
rules:
{
gender:"required",

password:
	{
	maxlength:15,
	minlength:6
	},
email:
	{ 
	 required:true,
	 email:true
	},
cpassword: 
	{
         equalTo: "#password"
        },
contact:{
	minlength:8,
	maxlength:10
	},
},
messages:
	{
	gender:"Choose your gender",
	
	password:
		{
		maxlength:"Password too long",
		minlength:"Password too short"
		},
	cpassword: 
		{
		 equalTo:"Password Mismatch!"
		},
	email:"Please enter a valid Email address",
	contact:
		{minlength:"Invalid Number",
		maxlength:"Invalid Number"}		
}
});
});
</script>
</head>
<body>
<center><h2><legend class="legend">Sign Up Form</legend><h2></center>
<form id="myform" method="post" class="myform">
<table cellspacing="10" class="formtable">
<tr><td class="info"><p><u>BASIC INFORMATION:</u></p></td></tr>
<tr><td>Username:</td><td><input type="text" id="uname" name="uname" autocomplete="off" placeholder="Username" autofocus required class="error"></td>
</tr>
<tr><td>Age:</td><td><input type="number" id="age" name="age" required class="error"></td</tr>
<tr><td>Gender:</td><td>Male<input type="radio" name="gender" value="male"></input></td><td><input type="radio" name="gender" class="error" value="female">Female</td></tr>
<tr><td>Address:</td><td><textarea height="200" width="100" name="address" id="address" required class="error"></textarea></td></tr>
<tr></tr><tr><td class="security"><p><u>SECURITY:</u></p></td></tr>
<tr><td>Email:</td><td><input type="email" id="email" name="email" placeholder="abc@xyz.com" class="error"></td></tr>
<tr><td>Password:</td><td><input type="password" id="password" name="password" placeholder="Password" required class="error"></td>
<tr><td>Confirm Password:</td><td><input type="password" id="cpassword" name="cpassword" placeholder="Re-enter Password" required class="error"></td></tr>
<tr><td>Workplace/College/High School:</td><td><input type="text" id="workplace" name="workplace" placeholder="Name of INSTITUTION" required class="error"></td></tr>
<tr><td>Contact Number:</td><td><input type="number" id="contact" name="contact" required class="error"></td></tr>
<tr><td><input type="reset" value="Reset Form" class="reset"/></td><td> <input type="submit" name="submit" value="submit" class="submit"/></td></tr>
</form>

</table>
</body>
</html>

<?php
else:
// Process signup submission
dbConnect('thebookshelf');

 // Check for existing user with the new id
$sql = "SELECT COUNT(*) FROM user_master WHERE uname = '$_POST[uname]'";
$result = mysql_query($sql);
if (!$result) {
error('A database error occurred in processing your '.
'submission.\nIf this error persists, please '.
'contact sharvilkadam@yahoo.in.');
}
if (@mysql_result($result,0,0)>0) {
error('A user already exists with your chosen username.\n'.
'Please try another.');
}
 
$sql = "INSERT INTO user_master SET
uname = '$_POST[uname]',
password = '$_POST[password]',
address = '$_POST[address]',
gender = '$_POST[gender]',
contact = '$_POST[contact]',
workplace = '$_POST[workplace]',
email = '$_POST[email]',
age = '$_POST[age]'";

if (!mysql_query($sql))
error('A database error occurred in processing your '.
'submission.\nIf this error persists, please '.
'contact sharvilkadam@yahoo.in.');
 
$message="Hello There !!

Your personal account for The Bookshelf
has been created! To log in, proceed to the
following address:
http:/
Your personal login ID and password are as follows:
Username:'$_POST[email]'
Password:'$_POST[password]'

If you have any problems, feel free to contact me at <sharvilkadam@yahoo.in>.
 
-Sharvil Kadam
The Bookshelf Webmaster

";
mail($_POST['email'],"Password for Your Bookshelf Account",
$message, "From:Sharvil Kadam <sharvilkadam@yahoo.in>");

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Registration Complete </title>
<meta http-equiv="Content-Type"
content="text/html; charset=iso-8859-1" />
</head>
<body>
<p><strong>User registration successful!</strong></p><br>
<p>Your Username and Password have been emailed to
<strong><?=$_POST['email']?></strong>, the email address
you just provided in your registration form. <br>To log in,
click <a href="index.html">here</a> to return to the login
page, and enter your new personal username and password.</p>
</body>
</html>
<?php
endif;
?>
