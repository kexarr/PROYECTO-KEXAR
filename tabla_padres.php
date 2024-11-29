<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Padres</title>
    <link rel="stylesheet" href="Estilos/tabla_padres.css">
</head>
<body>
<?php
include('conexion.php');

// Consultas para obtener los datos
$query_madre = "SELECT apellido_madre, nombre_madre, documento_madre, numero_madre, celular_madre FROM padres";
$query_padre = "SELECT apellido_padre, nombre_padre, documento_padre, numero_padre, celular_padre FROM padres";
$query_tutor = "SELECT apellido_tutor, nombre_tutor, documento_tutor, numero_tutor, celular_tutor FROM padres";

// Ejecutar las consultas
$resultado_madre = $conexion->query($query_madre);
$resultado_padre = $conexion->query($query_padre);
$resultado_tutor = $conexion->query($query_tutor);

// Mostrar las tablas
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Familiares</title>
</head>
<body>
    <h2>Datos de la Madre</h2>
    <table>
        <thead>
            <tr>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Tipo de Documento</th>
                <th>DNI Nº</th>
                <th>Celular</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($resultado_madre->num_rows > 0) {
                while ($row = $resultado_madre->fetch_assoc()) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row['apellido_madre']) . "</td>
                            <td>" . htmlspecialchars($row['nombre_madre']) . "</td>
                            <td>" . htmlspecialchars($row['documento_madre']) . "</td>
                            <td>" . htmlspecialchars($row['numero_madre']) . "</td>
                            <td>" . htmlspecialchars($row['celular_madre']) . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No se encontraron registros</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <h2>Datos del Padre</h2>
    <table>
        <thead>
            <tr>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Tipo de Documento</th>
                <th>DNI Nº</th>
                <th>Celular</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($resultado_padre->num_rows > 0) {
                while ($row = $resultado_padre->fetch_assoc()) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row['apellido_padre']) . "</td>
                            <td>" . htmlspecialchars($row['nombre_padre']) . "</td>
                            <td>" . htmlspecialchars($row['documento_padre']) . "</td>
                            <td>" . htmlspecialchars($row['numero_padre']) . "</td>
                            <td>" . htmlspecialchars($row['celular_padre']) . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No se encontraron registros</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <h2>Datos del Tutor</h2>
    <table>
        <thead>
            <tr>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Tipo de Documento</th>
                <th>DNI Nº</th>
                <th>Celular</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($resultado_tutor->num_rows > 0) {
                while ($row = $resultado_tutor->fetch_assoc()) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row['apellido_tutor']) . "</td>
                            <td>" . htmlspecialchars($row['nombre_tutor']) . "</td>
                            <td>" . htmlspecialchars($row['documento_tutor']) . "</td>
                            <td>" . htmlspecialchars($row['numero_tutor']) . "</td>
                            <td>" . htmlspecialchars($row['celular_tutor']) . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No se encontraron registros</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>

<?php
// Cerrar la conexión
$conexion->close();
?>
</body>
</html>

