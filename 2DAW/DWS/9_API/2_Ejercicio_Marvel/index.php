<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Onest:wght@100;200;300;400&display=swap" rel="stylesheet">
    <title>API Marvel</title>
</head>
<style>
    body {
        color: white;
        font-family: 'Onest', sans-serif;
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,121,117,1) 56%, rgba(0,212,255,1) 100%);
    }
    h1 {
        text-align: center;
    }
    table, tr, td {
        border: 1px solid white;
        padding: 10px;
    }
    table {
        border-radius: 20px;
        margin: 0 auto;
        background-color: #000077;
    }
    tr, td {
        background-color: #2d96bd;
    }
    td:nth-child(1){
        text-align: center;
    }
    img {
        width: 150px;
    }
</style>
<body>
    <h1>API Marvel</h1>
    <?php
    $inicio = 0;
    $limite = 99;
    $api_url = file_get_contents("http://gateway.marvel.com/v1/public/characters?offset=" . $inicio . "&limit=". $limite . "&ts=1000&apikey=6f5ae561b56045161e5be3c74fc5afc5&hash=7f661052d8f83d7a9e51a9943b8f5d9e");
    $contador = 0;

    $data = json_decode( $api_url, true);
    /* echo json_encode($data['data']['results']); */
    $results = $data['data']['results'];
    echo "<table border='1'>";
    foreach($results as $result){
        $src = $result['thumbnail']['path'];
        $comics = $result['comics']['items'];
        $nombre = $result['name'];
        echo "<tr>";
        echo "<td>" . $nombre . "</td>";
        echo "<td><img src='" . $src . ".jpg'></td>";
        $contComic = 0;
        echo "<td>";
        foreach ($comics as $comic) {
            $contComic++;
            echo "Comic-" . $contComic . ": ". $comic['name'] . "<br>";
        }
        echo  "</td>";
        echo "</tr>";
        $contador++;
    }
    echo "</table>";
    echo $contador;
    ?>
</body>
</html>