<?php
session_start();
include('db.php');
include('common2.php');
dbconnect('thebookshelf');
if(isset($_SESSION['login_username']))
{
	$check=$_SESSION['login_username'];
	$session=mysql_query("SELECT uname FROM user_master WHERE uname='$check' ");
	$row=mysql_fetch_array($session);
	$login_session=$row['uname'];
	if(!isset($login_session))
	{
	error("Please Login Again");
	//header("Location:index.php");
	}
}
else
{
	error("Please Login to continue.");
}
?>