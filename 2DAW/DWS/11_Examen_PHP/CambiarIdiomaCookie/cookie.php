<?php 

// Agregar un producto al carrito
$producto = array("id" => 123, "nombre" => "Producto ABC", "precio" => 19.99);
$carrito = isset($_COOKIE["carrito"]) ? json_decode($_COOKIE["carrito"], true) : array();
$carrito[] = $producto;
setcookie("carrito", json_encode($carrito), time() + 7*24*60*60);