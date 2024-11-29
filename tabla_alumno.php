<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Inscripciones</title>
    <link rel="stylesheet" href="Estilos/tabla_alumno.css">
</head>
<body>
<?php
include('conexion.php');

// Consulta SQL para obtener solo los datos necesarios
$sql = "SELECT tipo_documento_alumno, numero_documento_alumno, nombre_alumno, apellido_alumno, sexo_alumno, fecha_nacimiento_alumno FROM inscripcion";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Tipo de Documento</th>";
    echo "<th>Número</th>";
    echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "<th>Sexo</th>";
    echo "<th>Fecha de Nacimiento</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Iterar sobre los resultados y mostrarlos en filas
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($fila['tipo_documento_alumno']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['numero_documento_alumno']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['nombre_alumno']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['apellido_alumno']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['sexo_alumno']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['fecha_nacimiento_alumno']) . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "No se encontraron registros.";
}

// Cerrar la conexión
$conexion->close();
?>
</body>
</html>
