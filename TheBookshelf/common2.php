<?php // common2.php
 
function error($msg) {
?>
<html>
<head>
  <script language="JavaScript">
  <!--
  
  function Redirect()
{
    window.location="index.html";
}

alert("<?=$msg?>"+"\n\nYou will be redirected to main page");
setTimeout('Redirect()', 500);
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