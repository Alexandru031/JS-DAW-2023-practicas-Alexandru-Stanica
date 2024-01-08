<?php
setcookie("visitante", $_POST['nombre'], time() + 365*24*60*60, "/");
header("Location: index.php");
?>