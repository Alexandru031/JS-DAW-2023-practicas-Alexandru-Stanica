<?php 

    $hoteles = array(
        array("Abashiri (NH)", 3, 168, "46013 Valencia", "Avenida Ausias March, 59"),
        array("Abba Acteon", 4, 189, "46023 Valencia", "Escultor Vicente Bertrán Grimal, 2"),
        array("Acta Atarazanas", 4, 42, "46011 Valencia", "Plaza Tribunal de las Aguas, 4"),
        array("Acta del Carmen", 3, 25, "46003 Valencia", "Blanquerías, 11"),
        array("AC Valencia (AC Hotels)", 4, 183, "46023 Valencia", "Avenida de Francia, 67"),
        array("Ad Hoc Monumental Valencia", 3, 28, "46003 Valencia", "Boix, 4"),
        array("Alkazar", 1, 18, "46003 Valencia", "Mosén Femades, 11")
    );

    /* Mostrar el listado de hoteles */
    echo "<h1>Mostrar Hoteles</h1>";
    for ($i=0; $i < count($hoteles) ; $i++) { 
            echo "Nombre: " . $hoteles[$i][0] . " Cat: " . $hoteles[$i][1] . " Hab: " . $hoteles[$i][2] . " Población: " . $hoteles[$i][3] . " Dirección: " . $hoteles[$i][4] . "<br><br>";
    }

    /* Mostrar hoteles de más de 100 hab */
    echo "<h1>Mostrar Hoteles más de 100 hab</h1>";
    for ($i=0; $i < count($hoteles) ; $i++) { 
        if ($hoteles[$i][2] >= 100) {
            echo "Nombre: " . $hoteles[$i][0] . " Cat: " . $hoteles[$i][1] . " Hab: " . $hoteles[$i][2] . " Población: " . $hoteles[$i][3] . " Dirección: " . $hoteles[$i][4] . "<br><br>";
        } 
    }

    /* Mostrar hoteles de menos de 100 hab y 3 estrellas*/
    echo "<h1>Mostrar Hoteles menos de 100 hab y 3 estrellas</h1>";
    for ($i=0; $i < count($hoteles) ; $i++) { 
        if ($hoteles[$i][2] < 100 && $hoteles[$i][1] == 3) {
            echo "Nombre: " . $hoteles[$i][0] . " Cat: " . $hoteles[$i][1] . " Hab: " . $hoteles[$i][2] . " Población: " . $hoteles[$i][3] . " Dirección: " . $hoteles[$i][4] . "<br><br>";
        } 
    }

    /* Borrar el hotel Acta del Carmen y mostrar el listado de hoteles */
    echo "<h1>Borrar el hotel Acta del Carmen y mostrar el listado de hoteles</h1>";
    for ($i=0; $i < count($hoteles) ; $i++) {
        if ($hoteles[$i][0] == "Acta del Carmen") {
            unset($hoteles[$i]);
            $hoteles = array_values($hoteles); /* Actualiza el array despues de eliminar un dato */
        }
        echo "Nombre: " . $hoteles[$i][0] . " Cat: " . $hoteles[$i][1] . " Hab: " . $hoteles[$i][2] . " Población: " . $hoteles[$i][3] . " Dirección: " . $hoteles[$i][4] . "<br><br>";
    }

    /* Borrar todos los hoteles y mostrar un mensaje “No hay hoteles en la base de datos”,
al intentar mostrar el listado de hoteles*/
    echo "<h1>Borrar todos los hoteles y mostrar un mensaje “No hay hoteles en la base de datos”,
    al intentar mostrar el listado de hoteles</h1>";
    $hoteles = [];
    
    if (empty($hoteles)) {
        echo "ERROR: EL ARRAY ESTA VACIÓ";
    }

    /* Añadir los siguientes hoteles al array y mostrar el listado*/
    echo "<h1>Añadir los siguientes hoteles al array y mostrar el listado</h1>";
    array_push($hoteles, array("Astoria Palace (Ayre Fiesta)", 4, 204, "46002 Valencia", "Plaza Rodrigo Botet, 5"));
    array_push($hoteles, array("Balneario Las Arenas", "Lujo", 253, "46011 Valencia", "Eugenia Viñes, 22-24"));

    /* Mostrar el listado de hoteles */
    for ($i=0; $i < count($hoteles) ; $i++) { 
            echo "Nombre: " . $hoteles[$i][0] . " Cat: " . $hoteles[$i][1] . " Hab: " . $hoteles[$i][2] . " Población: " . $hoteles[$i][3] . " Dirección: " . $hoteles[$i][4] . "<br><br>";
    }
?>