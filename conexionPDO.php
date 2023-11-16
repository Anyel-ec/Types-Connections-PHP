<?php
// Declares a constant that will not change
define('SERVERNAME', 'localhost');
define('USERNAME', 'anyel');
define('PASSWORD', 'anyel');
define('DBNAME', 'lab1');

try {
    // Create connection with MySQL using PDO
    $conn = new PDO("mysql:host=" . SERVERNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully with PDO";
    
    // Set and make query
    $consulta = "SELECT * FROM Persona";
    $resultado = $conn->query($consulta);

    // Show result of the register
    if ($resultado->rowCount() > 0) {
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
        while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
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
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close connection (not necessary for PDO)
// $conn = null;
?>
