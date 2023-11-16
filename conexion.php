<?php
// Declares a constant that will not change
define('SERVERNAME', 'localhost');
define('USERNAME', 'anyel');
define('PASSWORD', 'anyel');
define('DBNAME', 'lab1');

// Create connection with MySQL
$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// Set and make query
$consulta = "SELECT * FROM Persona";
$resultado = $conn->query($consulta) or die("Algo salió mal!!! :( carita triste");

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

    // While loop that runs once per record and shows it
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

    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Close connection
mysqli_close($conn);
?>
