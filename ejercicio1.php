<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mi_base_de_datos"; // Nombre de la base de datos a crear
$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    
    
die("Conexión fallida: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
        
echo "Base de datos creada o ya existe.\n";
} 

else {
    
    
echo "Error al crear la base de datos: " . $conn->error;
}
$conn->select_db($dbname);

if ($conn->query($sql) === TRUE) {
      
echo "Tabla 'ex_practico' creada con éxito.";
} 

else {
    
echo "Error al crear la tabla: " . $conn->error;
}

$conn->close();
?>