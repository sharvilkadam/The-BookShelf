<?php
include 'common3.php';
include 'db.php';
session_start();
dbConnect('thebookshelf');

$db_table = "sellbook"; // Your Table Name where you want to Store Your Image. 


$uploadDir = 'images/'; //Image Upload Folder
if(isset($_POST['submit']))
{
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES['Photo']['name']);
	$extension = end($temp);
	if ((($_FILES['Photo']['type'] == "image/gif")
	|| ($_FILES['Photo']['type'] == "image/jpeg")
	|| ($_FILES['Photo']['type'] == "image/jpg")
	|| ($_FILES['Photo']['type'] == "image/pjpeg")
	|| ($_FILES['Photo']['type'] == "image/x-png")
	|| ($_FILES['Photo']['type'] == "image/png"))
	&& ($_FILES['Photo']['size'] < 1000000)
	&& in_array($extension, $allowedExts))
	  {
		  if ($_FILES["Photo"]["error"] > 0)
			{
			error("Try again. Error: " . $_FILES["Photo"]["error"] . "<br>");
			exit;
			}
		  else
		  {
			if (file_exists("images/" . $_FILES['Photo']['name']))
			{
			  error(" ".$_FILES['Photo']['name']." already exists. Change the name of Image and Try Again."."<br>");
			  exit;
			}
			else
			  {
				$fileName = $_FILES['Photo']['name'];
				$tmpName  = $_FILES['Photo']['tmp_name'];
				$fileSize = $_FILES['Photo']['size'];
				$fileType = $_FILES['Photo']['type'];
				$filePath = $uploadDir . $fileName;
				$result = move_uploaded_file($tmpName, $filePath);
				if (!$result) {
					error("Error uploading Image.Please try again.");
					exit;
				}
				if(!get_magic_quotes_gpc())
				{
					$fileName = addslashes($fileName);
					$filePath = addslashes($filePath);
				}
				$uname=$_SESSION['login_username'];
				$query1=mysql_query("SELECT email,contact FROM user_master WHERE uname='$uname' ");
				$row=mysql_fetch_array($query1);
				$email=$row['email'];
				$contact=$row['contact'];
				$bname=$_POST['bookname'];
				$author=$_POST['author'];
				$category=$_POST['category'];
				$mrp=$_POST['mrp'];
				$msp=$_POST['msp'];
				$description=$_POST['description'];
				$query = "INSERT INTO $db_table (uname,email,contact,bname,author,category,mrp,msp,description,image) VALUES ('$uname','$email','$contact','$bname','$author','$category','$mrp','$msp','$description','$filePath')";
				
				mysql_query($query) or die('Error, query failed'); 
				error("Successfully Uploaded you Book for others to View.");
				}
			}
		}
		else
			error("Invalid File");
	}
			
?>


