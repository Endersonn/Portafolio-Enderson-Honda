<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio - Enderson Honda Civic</title>
    <link rel="icon" href="img/honda logo.png">

    <!-- Estilos solo de la navbar -->
    <link rel="stylesheet" href="navbar.css"> 
    <!-- Estilos del fondo y texto -->
    <link rel="stylesheet" href="cuerpo.css">
    <!-- Estilos del comentario -->
    <link rel="stylesheet" href="comentario.css">
    <!-- Estilos del footer -->
    <link rel="stylesheet" href="footer.css">
    

</head>
<body>
    <div class="navbar">
        <div class="logo-container">
                <img src="img/honda logo.png" alt="Logo" class="logo">
        <span class="portafolio">Portafolio</span>
        </div>
            <div class="links">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#favorite-topic">Favorite Topic</a>
                <a href="#contact">Contact</a>
                <a href="#comments">Comments</a>
        </div>
    </div>

     <!-- Fondo de la imagen -->
<div class="fondo" id="home">
    <img src="img/fondo.jpg" alt="Fondo" class="imagen-fondo">
    <div class="texto-bienvenida">
        <h1>Bienvenido, soy Enderson Honda</h1>
        <p>Un desarrollador web</p>
    </div>
</div>

<!-- Sección de perfil -->
<div class="perfil-section" id="about">
    <div class="perfil-imagen">
        <img src="img/perfil.jpg" alt="Perfil" class="imagen-perfil">
    </div>
    <div class="perfil-info">
        <h2>Enderson Honda</h2>
        <p>Desarrollador Web</p>
        <div class="descripcion">
            <h3>Sobre mí:</h3>
            <p>Me llamo Enderson Antonio Velasquez Zabala, tengo 21 años de edad, me gusta cocinar, me gustan los animales aunque mis ex’s dicen que soy un perro, me gustan mucho los carros, carreras de piques o circuitos, me gusta mucho el estar desarmando mi carro y viendo que mejorarle en rendimiento.</p>
        </div>
    </div>
</div>

<!-- Sección de Tema Favorito - Carros -->
<div class="tema-favorito" id="favorite-topic">
    <div class="tema-favorito-imagen">
        <img src="img/HondaCivic.jpg" alt="Honda Civic" class="imagen-tema-favorito">
    </div>
    <div class="tema-favorito-info">
        <h2>Tema Favorito - Carros</h2>
        <p>Tengo un Honda Civic 1998 sedán, porta un motor D16Y8 Sohc esto quiere decir que es (Single Overhead Camshaft), un auto japonés de la marca Honda producida por su fundador Soichiro Honda. Auto de tracción delantera, cómodo, con un estilo vanguardista, llamativo y sumamente escandaloso y especial para jóvenes que les gusta la adrenalina o vivir una aventura o experiencia en el mundo del jdm (japanese domestic market) un mercado amplío de artículos para la marca lo cual cuenta con artículos estéticos y elegantes para poner el auto en las condiciones deseadas de cada uno.</p>
    </div>
</div>


<!-- Sección de comentarios -->
<div class="comentarios" id="comments">
    <h3 class="comentarios-titulo">Deja tu Comentario</h3>
    <form class="comentarios-form" action="guardar_comentario.php" method="POST">
        <label class="comentarios-label" for="nombreyapellido">Nombre y Apellido:</label>
        <input class="comentarios-input" type="text" id="nombreyapellido" name="nombreyapellido" required>
        
        <label class="comentarios-label" for="email">Correo electrónico:</label>
        <input class="comentarios-input" type="email" id="email" name="email" required>

        <label class="comentarios-label" for="nota">Comentario:</label>
        <textarea class="comentarios-textarea" id="nota" name="nota" required></textarea>

        <button class="comentarios-button" type="submit">Enviar Comentario</button>
    </form>
</div>




<?php
    include('conexionbdd.php');  // Incluye el archivo de conexión

    $sql = "SELECT * FROM comentario ORDER BY fechanota DESC";  // Obtiene los comentarios ordenados por fecha
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar cada comentario
        while($row = $result->fetch_assoc()) {
            echo "<div class='comentario'>";
            echo "<p><strong>" . $row['nombreyapellido'] . "</strong> (" . $row['fechanota'] . ")</p>";
            echo "<p>" . $row['nota'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "";
    }

    $conn->close();
?>


<!-- Sección de Footer -->
<footer id="contact">
    <div class="footer-content">
        <h3>Contactos</h3>
        <p><strong>Correo personal:</strong> endersonavz@gmail.com</p>
        <p><strong>Correo institucional:</strong> evelasquez.1384@unimar.edu.ve</p>
        <p><strong>Número de teléfono:</strong> 0412-354-7789</p>
        <p><strong>Redes sociales:</strong></p>
        <p><strong>Instagram:</strong> e_velasquezzzz</p>
        <p><strong>TikTok:</strong> e_velasquezzzz</p>
    </div>
</footer>



</body>
</html>