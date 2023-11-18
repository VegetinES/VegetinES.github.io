<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados del Test</title>
</head>
<body>
    <h2>Resultados del Test</h2>

    <?php
    // Verifica si la puntuación está disponible en el archivo
    $archivo_puntuacion = 'puntuacion.txt';

    if (file_exists($archivo_puntuacion)) {
        // Lee la puntuación desde el archivo
        $puntuacion = file_get_contents($archivo_puntuacion);

        // Muestra la puntuación al usuario
        echo '<p>Tu puntuación es: ' . $puntuacion . '</p>';
    } else {
        echo '<p>No se encontró la puntuación.</p>';
    }
    ?>

    <!-- Puedes añadir más contenido según tus necesidades -->

</body>
</html>
