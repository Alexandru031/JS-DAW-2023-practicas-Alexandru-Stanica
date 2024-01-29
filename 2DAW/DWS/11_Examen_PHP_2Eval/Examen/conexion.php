<?php

class Conexion extends PDO
{
    private $host = "localhost";
    private $dbname = 'examena';
    private $usuario = "root";
    private $password = "";

    function __construct()
    {
        $opciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        try {
            parent::__construct("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->usuario, $this->password, $opciones);
        } catch (PDOException $e) {
            header("HTTP/1.1 500 Bad Conexión");
            echo json_encode("Error de conexión a la Base de Datos: " . $e->getMessage());
        }
    }
}

function conectar() {
    $host = "localhost";
    $dbname = "examena";
    $user = "root";
    $pass = "";

    $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);

    try {
        $db = new PDO("mysql:host=". $host . ";dbname=" . $dbname, $user, $pass, $options);
        return $db;
    } catch (PDOException $e) {
        header("HTTP/1.1 500 Bad Conexión");
        echo "Error de conexión a la Base de Datos: " . $e->getMessage();
    }
    
}