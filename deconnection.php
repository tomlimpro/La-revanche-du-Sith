<?php 
setcookie('idSession');
unset($_COOKIE['idSession']);
header("Location: index.php");
?>