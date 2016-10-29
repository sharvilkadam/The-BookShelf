<?php
session_start();
include('common2.php');
if(session_destroy())
{
error("You have been logged out");
//header("Location: index.php");
}
?>