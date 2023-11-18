<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Array para almacenar las respuestas correctas
    $respuestas_correctas = array(
        "1" => "b",
        "2" => "a",
        "3" => "c",
        "4" => "d",
        "5" => "a",
        "6" => "b",
        "7" => "c",
        "8" => "d",
        "9" => "a",
        "10" => "b",
        "11" => "a",
        "12" => "b",
        "13" => "c",
        "14" => "d",
        "15" => "a",
        "16" => "b",
        "17" => "c",
        "18" => "d",
        "19" => "a",
        "20" => "b",
        "21" => "a",
        "22" => "b",
        "23" => "c",
        "24" => "d",
        "25" => "a",
        "26" => "b",
        "27" => "c",
        "28" => "d",
        "29" => "a",
        "30" => "b"
    );

    // Inicializa la puntuación
    $puntuacion = 0;

    // Recorre las respuestas enviadas por el formulario y verifica la corrección
    for ($i = 1; $i <= 30; $i++) {
        $nombre_pregunta = strval($i);

        if (isset($_POST[$nombre_pregunta])) {
            $respuesta_usuario = $_POST[$nombre_pregunta];

            // Verifica si la respuesta es correcta
            if ($respuesta_usuario == $respuestas_correctas[$nombre_pregunta]) {
                $puntuacion += 0.33; // Suma 0.33 por cada respuesta correcta
            } else {
                // Resta 1 por cada grupo de 3 respuestas incorrectas
                $puntuacion -= floor($i / 3);
            }
        }
    }

    // Guarda la puntuación en un archivo o base de datos, según tus necesidades
    $archivo_puntuacion = 'puntuacion.txt';
    file_put_contents($archivo_puntuacion, $puntuacion);

    // Puedes redirigir a una página de resultados o hacer cualquier otra acción después de guardar la puntuación
    header('Location: resultados.php');
    exit();
}
?>
