<?php

if (count($_FILES) <= 0 || empty($_FILES["video"])) {
    exit("No hay archivos");
}


# De dónde viene el vídeo y en dónde lo ponemos
$rutaVideoSubido = $_FILES["video"]["tmp_name"];
$nuevoNombre = "loco.webm";
$rutaDeGuardado = __DIR__ . "/" . $nuevoNombre;
// Mover el archivo subido a la ruta de guardado
move_uploaded_file($_FILES["video"]["tmp_name"], $rutaDeGuardado);
// Imprimir el nombre para que la petición lo lea
echo $nuevoNombre;


?>
