<?php
include 'common5.php';
include 'db.php';
session_start();
dbConnect('thebookshelf');
$uname=$_SESSION['login_username'];
$query="INSERT INTO contactus VALUES ('$uname','$_POST[name]','$_POST[email]','$_POST[message]')";
				
mysql_query($query) or die('Error, query failed'); 

error("Thanks for Contacting The Bookshelf.");

?>