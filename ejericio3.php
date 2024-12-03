<?php
// Datos de conexión a la base de datos
$servername = "liz.examen"; // O el nombre de tu servidor de base de datos
$username = "root";        // Tu nombre de usuario de la base de datos
$password = "75106676";            // Tu contraseña de la base de datos
$dbname = "ususario"; // El nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
 
  die("Conexión fallida: " . $conn->connect_error);
}


// Ejecutar la consulta y verificar si se creó la tabla
if ($conn->query($sql) === TRUE) {
    
    

  
  echo "Tabla 'usuarios' creada exitosamente";
} else {


echo "Error al crear la tabla: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>