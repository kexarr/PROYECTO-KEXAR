<?php

include('conexion.php');

// Variables de la sección de Salud
$salud_obrasocial = $_POST['salud_obrasocial'];
$afiliado_obrasocial = $_POST['afiliado_obrasocial'];

// Antecedentes de Enfermedad
$tratamiento_enfermedad = $_POST['tratamiento_enfermedad'];
$cual_tratamiento = $_POST['cual']; // O también se puede hacer un if para verificar si la respuesta es "si"
$fueinternado = $_POST['fueinternado'];
$cual_internado = $_POST['cual2']; // Otra vez, dependiendo de la respuesta de "si"

// Alergias
$alergia = $_POST['alergia'];
$manifestaciones = $_POST['manifestaciones'];
$alergiasedebe = $_POST['alergiasedebe'];
$anosabe = isset($_POST['anosabe']) ? $_POST['anosabe'] : ''; // Esto es para saber si se marcó "No sabe"
$tratamiento_permanente = $_POST['tratamiento_permanente'];

// Tratamientos médicos
$tratamiento_medico = $_POST['tratamiento_medico'];
$especifique_tratamiento = $_POST['especifique'];
$quirurgico = $_POST['quirurgico'];
$edad_tratamiento = $_POST['edad_tratamiento'];
$tipodecirugia = $_POST['tipodecirugia'];
$limitacion_fisica = $_POST['limitacion_fisica'];
$aclaracion_fisica = $_POST['aclaracion_fisica'];
$otro_problema_salud = $_POST['otro_problema_salud'];

// Vacunas Obligatorias
$vacunacion_obligatoria = $_POST['vacunacion_obligatoria']; // Puede ser un array si el usuario marca más de una opción

// Determinación física
$tallacm = $_POST['tallacm'];
$pesokg = $_POST['pesokg'];
$fecha_determinacion = $_POST['fecha_determinacion'];

// Institución médica y médico
$salud_institucion = $_POST['salud_institucion'];
$salud_domicilio = $_POST['salud_domicilio'];
$salud_telefono = $_POST['salud_telefono'];

$medico_apellido = $_POST['medico_apellido'];
$medico_nombre = $_POST['medico_nombre'];
$medico_domicilio = $_POST['medico_domicilio'];
$medico_telefono = $_POST['medico_telefono'];

$familiar_apellido = $_POST['familiar_apellido'];
$familiar_nombre = $_POST['familiar_nombre'];
$familiar_domicilio = $_POST['familiar_domicilio'];
$familiar_telefono = $_POST['familiar_telefono'];

// Actualizaciones de salud
$cambios_salud = $_POST['cambios_salud'];
$fecha_restriccion = $_POST['fecha_restriccion']; // Parece que hay un error con este nombre de campo
$actualizacion_anual = $_POST['actualizacion_anual'];
$haycambios = $_POST['haycambios'];

// Registro único de beneficiario
$beneficio_comedor = $_POST['beneficio_comedor']; // Puede ser un array si el usuario marca más de una opción

// Firma y fecha de inscripción
$fecha_inscripcion = $_POST['fecha-inscripcion'];
$firma_responsable = $_POST['firma-responsable'];
$aclaracion_firma = $_POST['aclaracion-firma'];
$firma_director = $_POST['firma-director'];

// Crear tabla si no existe
$sql_create_table = "
CREATE TABLE IF NOT EXISTS salud (
    id INT AUTO_INCREMENT PRIMARY KEY,
    salud_obrasocial VARCHAR(255),
    afiliado_obrasocial VARCHAR(255),
    tratamiento_enfermedad VARCHAR(50),
    cual_tratamiento VARCHAR(50),
    fueinternado VARCHAR(50),
    cual_internado VARCHAR(50),
    alergia VARCHAR(50),
    manifestaciones VARCHAR(50),
    alergiasedebe VARCHAR(50),
    anosabe VARCHAR(10),
    tratamiento_permanente VARCHAR(50),
    tratamiento_medico VARCHAR(50),
    especifique_tratamiento VARCHAR(50),
    quirurgico VARCHAR(50),
    edad_tratamiento VARCHAR(20),
    tipodecirugia VARCHAR(50),
    limitacion_fisica VARCHAR(50),
    aclaracion_fisica VARCHAR(50),
    otro_problema_salud VARCHAR(50),
    vacunacion_obligatoria VARCHAR(50),
    tallacm VARCHAR(20),
    pesokg VARCHAR(10),
    fecha_determinacion DATE,
    salud_institucion VARCHAR(255),
    salud_domicilio VARCHAR(255),
    salud_telefono VARCHAR(50),
    medico_apellido VARCHAR(255),
    medico_nombre VARCHAR(255),
    medico_domicilio VARCHAR(255),
    medico_telefono VARCHAR(50),
    familiar_apellido VARCHAR(255),
    familiar_nombre VARCHAR(255),
    familiar_domicilio VARCHAR(255),
    familiar_telefono VARCHAR(50),
    cambios_salud VARCHAR(50),
    fecha_restriccion DATE,
    actualizacion_anual VARCHAR(50),
    haycambios VARCHAR(50),
    beneficio_comedor VARCHAR(50),
    fecha_inscripcion DATE,
    firma_responsable VARCHAR(255),
    aclaracion_firma VARCHAR(50),
    firma_director VARCHAR(255)
);
";

// Ejecutar la consulta para crear la tabla
if ($conexion->query($sql_create_table) === TRUE) {
    echo "Tabla 'salud' creada o ya existe.\n";
} else {
    echo "Error al crear la tabla: " . $conexion->error;
}

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO salud (
    salud_obrasocial, 
    afiliado_obrasocial, 
    tratamiento_enfermedad,
    cual_tratamiento,
    fueinternado, 
    cual_internado, 
    alergia, 
    manifestaciones, 
    alergiasedebe, 
    anosabe,
    tratamiento_permanente, 
    tratamiento_medico, 
    especifique_tratamiento, 
    quirurgico,
    edad_tratamiento, 
    tipodecirugia, 
    limitacion_fisica, 
    aclaracion_fisica,
    otro_problema_salud, 
    vacunacion_obligatoria, 
    tallacm, 
    pesokg, 
    fecha_determinacion,
    salud_institucion, 
    salud_domicilio, 
    salud_telefono, 
    medico_apellido, 
    medico_nombre,
    medico_domicilio, 
    medico_telefono, 
    familiar_apellido, 
    familiar_nombre,
    familiar_domicilio, 
    familiar_telefono, 
    cambios_salud, 
    fecha_restriccion,
    actualizacion_anual, 
    haycambios, 
    beneficio_comedor, 
    fecha_inscripcion,
    firma_responsable, 
    aclaracion_firma, 
    firma_director
) VALUES (
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?, 
    ?
)";

// Preparar la sentencia
$stmt = $conexion->prepare($sql);

// Enlazar los parámetros
$stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssss", 
$salud_obrasocial,
$afiliado_obrasocial,
$tratamiento_enfermedad,
$cual_tratamiento,
$fueinternado,
$cual_internado,
$alergia,
$manifestaciones,
$alergiasedebe,
$anosabe,
$tratamiento_permanente,
$tratamiento_medico,
$especifique_tratamiento,
$quirurgico,
$edad_tratamiento,
$tipodecirugia,
$limitacion_fisica,
$aclaracion_fisica,
$otro_problema_salud,
$vacunacion_obligatoria,
$tallacm,
$pesokg,
$fecha_determinacion,
$salud_institucion,
$salud_domicilio,
$salud_telefono,
$medico_apellido,
$medico_nombre,
$medico_domicilio,
$medico_telefono,
$familiar_apellido,
$familiar_nombre,
$familiar_domicilio,
$familiar_telefono,
$cambios_salud,
$fecha_restriccion,
$actualizacion_anual,
$haycambios,
$beneficio_comedor,
$fecha_inscripcion,
$firma_responsable,
$aclaracion_firma,
$firma_director,
);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error al insertar los datos: " . $stmt->error;
}

// Cerrar la sentencia y la conexión
$stmt->close();
$conexion->close();



