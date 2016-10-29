<?php

session_start();
include 'common6.php';
include 'db.php';
dbConnect('thebookshelf');
if(isset($_GET['photo']))
{
	$image=$_GET['photo'];
	$query1=mysql_query("SELECT * FROM book WHERE image='$image' ");
	$row=mysql_fetch_array($query1);
	$uname=$_SESSION['login_username'];
	$query1=mysql_query("SELECT email,contact,address FROM user_master WHERE uname='$uname' ");
	$row2=mysql_fetch_array($query1);
	
	
	$query3="INSERT into buybook (uname,address,contact,email,bname,mrp,description,image) values ('$uname','$row2[address]','$row2[contact]','$row2[email]','$row[bname]','$row[mrp]','$row[description]','$image')";
	//$query3="INSERT into buybook SET uname='$uname',address='$row2[address]',contact='$row2[contact]',email='$row2[email]',bname='$row[bname]',mrp='$row[mrp]',description='$row[description]',image='$row[image]'" ;
	
	/*echo $uname;
	echo $row2[address];
	echo $row2[contact];
	echo $row2[email];
	echo $row[bname];
	echo $row[mrp];
	echo $row[description];
	echo $row[image];*/
	mysql_query($query3) or die("Error in Confirming");
	error("Thanks for ordering from The Bookshelf");
}

?>