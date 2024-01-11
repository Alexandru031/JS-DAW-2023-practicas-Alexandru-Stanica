<?php
setcookie("aviso", true, time()+ (365*24*60*60));
header("Location: index.php");
?>