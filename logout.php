<?php 
setcookie("fullname", "", time()-3600*24*7, $path = "/");
header("Location: index.php");
?>