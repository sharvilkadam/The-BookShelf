<?php
if(isset($_GET['file']))
{
$FileName = $_GET['file'];  // the name of the file that is downloaded
}
else
$FileName = null;
if(file_exists($FileName))
{
$size = filesize($FileName) ;
header("Content-Type: application/octet-stream; name=\"". $FileName ."\"");
header("Content-Transfer-Encoding: binary");
header("Content-Length: ". $size ."");
header("Content-Disposition: attachment; filename=\"". $FileName ."\"");
header("Expires: 0");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
readfile($FileName);
}
else {
header("HTTP/1.0 404 Not Found");
echo "<h1>Error 404: File Not Found: <br /><em>'$FileName'</em></h1>";
}
?>