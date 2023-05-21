<?php
// Retrieve form data
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
$Correo = $_POST['Correo'];
$Portafolio = $_POST['Portafolio'];

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artfoli0";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the data into the database
$sql = "INSERT INTO artistas (Nombre, Apellidos, Correo, Portafolio) VALUES ('$Nombre', '$Apellidos', '$Correo', '$Portafolio')";

if ($conn->query($sql) === TRUE) {
    echo "Guardado correctamente";
} else {
    echo "Error x " . $conn->error;
}

$conn->close();
?>
