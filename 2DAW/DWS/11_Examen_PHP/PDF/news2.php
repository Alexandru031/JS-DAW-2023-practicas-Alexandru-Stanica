<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
</head>
<body>

<h2>Seleccionar Noticia</h2>
<form method="get" action="">
    <label for="id">Seleccionar ID de Noticia:</label>

    <select name="id" id="id">

        <?php
        // Conexión a la base de datos (reemplaza 'tudb', 'tuusuario', 'tucontraseña' y 'tuserver' con tus propios datos)
        $server = 'mysql:host=localhost;dbname=uoc;charset=utf8';
        $user = 'admin';
        $password = 'adminuoc';

        try {
            $pdo = new PDO($server, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "SELECT id, Title FROM news";
            $stmt = $pdo->query($query);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $selected = (isset($_GET['id']) && $_GET['id'] == $row['id']) ? 'selected' : '';
                echo '<option value="' . $row['id'] . '" ' . $selected . '>' . htmlspecialchars($row['id']) . '</option>';
            }
        } catch (PDOException $e) {
            echo 'Error de conexión a la base de datos: ' . $e->getMessage();
        }
        ?>
    </select>
    <input type="submit" value="Mostrar Noticia">
</form>
    <p>##########################################################################</p>

<?php
if (isset($_GET['id'])) {
    // Mostrar la noticia seleccionada
    $selectedid = ($_GET['id']); 

    try {
        $query = "SELECT id, Title, Datatime, Body FROM news WHERE id = :id";
        //Las siguientes líneas protegen la base de datos contra SQLi (prepare, bindParam y execute)
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $selectedid, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            echo '<h2>' . htmlspecialchars($row['Title']) . '</h2>';
            echo '<p><strong>Fecha:</strong> ' . htmlspecialchars($row['Datatime']) . '</p>';
            echo '<p>' . nl2br(htmlspecialchars($row['Body'])) . '</p>';
        } else {
            echo '<p>No se encontró la noticia seleccionada.</p>';
        }
    } catch (PDOException $e) {
        echo 'Error al obtener la noticia: ' . $e->getMessage();
    }
}

// Cerrar la conexión a la base de datos
$pdo = null;
?>

</body>
</html>