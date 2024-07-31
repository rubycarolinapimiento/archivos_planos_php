<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes Registrados</title>
</head>
<body>
    <h1>Lista de Estudiantes Registrados</h1>
    <ul>
        <?php
        $archivo = 'estudiantes.txt';
        if (file_exists($archivo)) {
            $contenido = file($archivo, FILE_IGNORE_NEW_LINES);
            foreach ($contenido as $linea) {
                list($nombre, $edad, $grado) = explode(',', $linea);
                echo "<li>Nombre: " . htmlspecialchars($nombre) . ", Edad: " . htmlspecialchars($edad) . ", Grado: " . htmlspecialchars($grado) . "</li>";
            }
        } else {
            echo "No hay estudiantes registrados.";
        }
        ?>
    </ul>

    <br><br>
    <a href="registrar.php">Registrar un nuevo estudiante</a>
</body>
</html>