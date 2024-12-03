<?php
// Configuración de la base de datos
$servername = "localhost";  // Dirección del servidor MySQL
$username = "root";         // Usuario de la base de datos
$password = "";             // Contraseña de la base de datos
$dbname = "ex_practico";    // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Comprobar si el usuario ha enviado el formulario
if (isset($_GET['nombre']) && !empty($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

    // Preparar la consulta SQL para buscar usuarios por nombre
    $sql = "SELECT id, nombre, correo, fecha_registro FROM usuarios WHERE nombre LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchTerm = "%$nombre%";  // Esto permite buscar coincidencias parciales
    $stmt->bind_param("s", $searchTerm);

    // Ejecutar la consulta
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si hay resultados
    if ($result->num_rows > 0) {
        echo "<h3>Resultados de la búsqueda:</h3>";
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Fecha de Registro</th>
                </tr>";

        // Mostrar los resultados de la búsqueda
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["nombre"] . "</td>
                    <td>" . $row["correo"] . "</td>
                    <td>" . $row["fecha_registro"] . "</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No se encontraron resultados para '$nombre'.</p>";
    }

    // Cerrar la declaración preparada
    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>