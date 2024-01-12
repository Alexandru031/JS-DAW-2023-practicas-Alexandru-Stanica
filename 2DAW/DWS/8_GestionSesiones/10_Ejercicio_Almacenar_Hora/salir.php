<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

if (isset($_SESSION['actual'])) {
    $segundos = $_SESSION['actual'] - time();

$i = floor(($segundos / 60) % 60);
$s = $segundos % 60;
if (floor($i / 60) < 1) {
    $H = 0;
} else {
    $H = floor($i / 60);
}   

echo "Han transcurrido desde el ultimo inicio: " . abs($H) . "h " .   abs($i) . "min ". abs($s) . "seg <br><br>";
echo "<a href='tiempo.php'>Volver al Inicio</a>";   
} else {
    echo "<h2>Se borro la ultima sesion</h2>";
    echo "<a href='tiempo.php'>Volver al Inicio</a>";
}
session_destroy();
?>
</body>
</html>