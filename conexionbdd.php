<?php
$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "ender_honda"; 

// Crear la conexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar si hay error en la conexión
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
echo "Conexion exitosa!!!!!";
?>
