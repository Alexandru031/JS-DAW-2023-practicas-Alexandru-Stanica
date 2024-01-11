<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviso de Cookie</title>
</head>
<style>
    body {
        width: 90vw;
        height: 90vh;
    }
    footer {
        position: fixed;
        margin: 50px;
        width: 50%;
        bottom: 0;
        height: 12vh;
        left: 25%;
        border: 1px solid black;
    }
</style>
<body>
    <h1>Aviso de Cookies</h1>
    <footer>
    <?php 
        if (!isset($_COOKIE['aviso'])) {
            echo "<h3>Cookies</h3>";
            echo "<p>¿Aceptas nuestras cookies?</p>";
            echo "<a href='aceptar.php'>Aceptar</a>";
        } else {
            echo "<h3>Cookies</h3>";
            echo "<p>Aceptada la cookies</p>";
        }
    ?>
    </footer>
</body>
</html>