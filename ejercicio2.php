<?php

// Configuración de la base de datos
$servidor = "localhost";  // O la dirección del servidor de base de datos
$usuario = "root";        // Tu usuario de base de datos
$clave = "";              // Tu contraseña de base de datos
$base_datos = "ex_practico"; // Nombre de la base de datos

// Establecer la conexión utilizando mysqli
$conn = new mysqli($servidor, $usuario, $clave, $base_datos);

// Verificar si hubo un error de conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);}
else {


echo "Conexión exitosa a la base de datos '$base_datos'.";
}


?>