<?php 

session_start();
include('db.php');
include('common2.php');
{
 	dbconnect('thebookshelf');
    $user=mysql_real_escape_string($_POST['username']);
    $pass=mysql_real_escape_string($_POST['password']);
    $fetch=mysql_query("SELECT uname FROM user_master WHERE 
                         uname='$user' and password='$pass'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
    $_SESSION['login_username']=$user;
    header("Location:profile.php"); 
    }
    else
    {
	 	error("Wrong Username Password.Try again or pls register first");
      	//header('Location:index.php');
    }

}
?>