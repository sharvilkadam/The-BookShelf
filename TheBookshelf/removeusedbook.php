<?php
include 'common4.php';
include 'db.php';
session_start();
dbConnect('thebookshelf');
if(isset($_GET['photo']))
{
$FileName = $_GET['photo'];  // the name of the file that is downloaded
$query = "DELETE from sellbook where image='$FileName'";
				
mysql_query($query) or die('Error, query failed');
error("Book Removed from Database.");
}

?>
