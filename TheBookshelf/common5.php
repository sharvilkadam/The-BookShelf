<?php // common3.php
 
function error($msg) {
?>
<html>
<head>
  <script language="JavaScript">
  <!--
  
  function Redirect()
{
    window.location="profile.php";
}

alert("<?=$msg?>"+"\n\nYou will be redirected to your PROLIFE page");
setTimeout('Redirect()', 50);
  //-->
  </script>
</head>
<body>
</body>
</html>
<?php
exit;
}
?>