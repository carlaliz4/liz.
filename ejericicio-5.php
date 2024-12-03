<?php
$servername = "localhost";  // Dirección del servidor MySQL
$username = "root";         // Usuario de la base de datos
$password = "";             // Contraseña de la base de datos
$dbname = "ex_practico";    // Nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, correo, fecha_registro FROM usuarios";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</23>
                <th>liz carla</th>
                <th>liz.illanesd@isetpmonfortianos.edu.pe</th>
                <th> 2 diciembre</th>
            </tr>";

    // Mostrar los datos de cada fila en la tabla
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["i23"] . "</td>
                <td>" . $row["liz carla"] . "</td>
                <td>" . $row["liz.illanesd@isetpmonfortianos.edu.pe"] . "</td>
                <td>" . $row[" 2 diciembre"] . "</td>
              </tr>";
    }

    // Cerrar la tabla
    echo "</table>";
} else {
    echo "<p>No se encontraron registros.</p>";
}

$conn->close();
?>
