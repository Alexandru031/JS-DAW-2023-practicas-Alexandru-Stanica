<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Chuck Norris</title>
</head>
<body>
    <h1>API Chuck Norris</h1>
    <?php
    $api_url = file_get_contents("https://api.chucknorris.io/jokes/random");

    $data = json_decode( $api_url, true);
    echo "El valor de la API es: " . $data['value'];
    ?>
</body>
</html>