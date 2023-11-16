<?php
// Declares a constant that will not change
define('SERVERNAME', 'localhost');
define('USERNAME', 'anyel');
define('PASSWORD', 'anyel');
define('DBNAME', 'lab1');

// Create connection with MySQL using procedural style
$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

// Set and make query
$consulta = "SELECT * FROM Persona";
$resultado = mysqli_query($conn, $consulta);

// Show result of the register
if (mysqli_num_rows($resultado) > 0) {
    echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>NumeroIdentificacion</th>
            <th>Direccion</th>
            <th>Telefono</th>
        </tr>";

    // Loop through the records and display them
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                <td>{$fila['ID']}</td>
                <td>{$fila['Nombre']}</td>
                <td>{$fila['Apellido']}</td>
                <td>{$fila['NumeroIdentificacion']}</td>
                <td>{$fila['Direccion']}</td>
                <td>{$fila['Telefono']}</td>
            </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "No se encontraron resultados.";
}

// Close connection
mysqli_close($conn);
?>
