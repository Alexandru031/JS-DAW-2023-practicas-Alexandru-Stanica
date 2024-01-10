<?php
    if (isset($_POST['recordar']) && $_POST['recordar'] = '1') {
        setcookie("email", $_POST['email'], time() + 365*24*60*60, "/");
        $mostrar = "<h2>El email a sido recordado</h2>";
    } else {
        setcookie("email", $_POST['email'], time() - 365*24*60*60, "/");
        $mostrar = "<h2>El email no a sido recordado</h2>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Cookie</title>
</head>
<body>
    <h1>Acceder Email</h1>
    <?php echo $mostrar; ?>
</body>
</html>