<?php
include('conexionbdd.php');  // Incluye el archivo de conexión

// Obtener datos del formulario
$nombreApellido = $_POST['nombreyapellido'];  
$email = $_POST['email'];
$comentario = $_POST['nota'];  
$fecha = date('Y-m-d H:i:s');  

// Insertar comentario en la base de datos
$sql = "INSERT INTO comentario (nombreyapellido, email, nota, fechanota) 
        VALUES ('$nombreApellido', '$email', '$comentario', '$fecha')";

// Verificar si la inserción fue exitosa
if ($conn->query($sql) === TRUE) {
    // Redirigir a la misma pagina para mostrar el comentario
    header("Location: index.php#comments");
    exit();  // Detener la ejecución del script
} else {
    echo "Error al guardar el comentario: " . $conn->error;
}

$conn->close();
?>
