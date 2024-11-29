<?php

include('conexion.php');

//Datos de la madre
$apellido_madre = isset($_POST["apellido_madre"]) ? $_POST["apellido_madre"] : '';
$nombre_madre = isset($_POST["nombre_madre"]) ? $_POST["nombre_madre"] : '';
$nacionalidad_madre = isset($_POST["nacionalidad_madre"]) ? $_POST["nacionalidad_madre"] : '';
$asistioM = isset($_POST["asistioM"]) ? $_POST["asistioM"] : '';
$nivelM = isset($_POST["nivelM"]) ? $_POST["nivelM"] : ''; // checkbox: solo se captura el último valor seleccionado
$completoM = isset($_POST["completoM"]) ? $_POST["completoM"] : '';
$viveM = isset($_POST["viveM"]) ? $_POST["viveM"] : '';
$documento_madre = isset($_POST["documento_madre"]) ? $_POST["documento_madre"] : '';
$numero_madre = isset($_POST["numero_madre"]) ? $_POST["numero_madre"] : '';
$documento_estado_madre = isset($_POST["documento_estado_madre"]) ? $_POST["documento_estado_madre"] : '';
$domicilio_madre = isset($_POST["domicilio_madre"]) ? $_POST["domicilio_madre"] : '';
$departamento_madre = isset($_POST["departamento_madre"]) ? $_POST["departamento_madre"] : '';
$entre_calles_madre = isset($_POST["entre_calles_madre"]) ? $_POST["entre_calles_madre"] : '';
$distrito_madre = isset($_POST["distrito_madre"]) ? $_POST["distrito_madre"] : '';
$localidad_madre = isset($_POST["localidad_madre"]) ? $_POST["localidad_madre"] : '';
$codigo_postal_madre = isset($_POST["codigo_postal_madre"]) ? $_POST["codigo_postal_madre"] : '';
$telefono_madre = isset($_POST["telefono_madre"]) ? $_POST["telefono_madre"] : '';
$celular_madre = isset($_POST["celular_madre"]) ? $_POST["celular_madre"] : '';
$email_madre = isset($_POST["email_madre"]) ? $_POST["email_madre"] : '';
$jefe_del_hogar_madre = isset($_POST["jefe_del_hogar_madre"]) ? $_POST["jefe_del_hogar_madre"] : '';
$profesion_madre = isset($_POST["profesion_madre"]) ? $_POST["profesion_madre"] : '';
$actividadM = isset($_POST["ActividadM"]) ? $_POST["ActividadM"] : ''; // checkbox: último valor seleccionado

//Datos del padre
$apellido_padre = isset($_POST['apellido_padre']) ? $_POST['apellido_padre'] : '';
$nombre_padre = isset($_POST['nombre_padre']) ? $_POST['nombre_padre'] : '';
$nacionalidad_padre = isset($_POST['nacionalidad_padre']) ? $_POST['nacionalidad_padre'] : '';
$asistioP = isset($_POST['asistioP']) ? $_POST['asistioP'] : '';
$nivelP = isset($_POST['nivelP']) ? $_POST['nivelP'] : [];
$completoP = isset($_POST['completoP']) ? $_POST['completoP'] : '';
$viveP = isset($_POST['viveP']) ? $_POST['viveP'] : '';
$documento_padre = isset($_POST['documento_padre']) ? $_POST['documento_padre'] : '';
$numero_padre = isset($_POST['numero_padre']) ? $_POST['numero_padre'] : '';
$documento_estado_padre = isset($_POST['documento_estado_padre']) ? $_POST['documento_estado_padre'] : '';
$domicilio_padre = isset($_POST['domicilio_padre']) ? $_POST['domicilio_padre'] : '';
$departamento_padre = isset($_POST['departamento_padre']) ? $_POST['departamento_padre'] : '';
$entre_calles_padre = isset($_POST['entre_calles_padre']) ? $_POST['entre_calles_padre'] : '';
$distrito_padre = isset($_POST['distrito_padre']) ? $_POST['distrito_padre'] : '';
$localidad_padre = isset($_POST['localidad_padre']) ? $_POST['localidad_padre'] : '';
$codigo_postal_padre = isset($_POST['codigo_postal_padre']) ? $_POST['codigo_postal_padre'] : '';
$telefono_padre = isset($_POST['telefono_padre']) ? $_POST['telefono_padre'] : '';
$celular_padre = isset($_POST['celular_padre']) ? $_POST['celular_padre'] : '';
$email_padre = isset($_POST['email_padre']) ? $_POST['email_padre'] : '';
$jefe_del_hogar_padre = isset($_POST['jefe_del_hogar_padre']) ? $_POST['jefe_del_hogar_padre'] : '';
$profesion_padre = isset($_POST['profesion_padre']) ? $_POST['profesion_padre'] : '';
$actividadP = isset($_POST['ActividadP']) ? $_POST['ActividadP'] : [];
//Fin datos establecimiento educativo de procedencia

//Datos del tutor
$apellido_tutor = isset($_POST['apellido_tutor']) ? $_POST['apellido_tutor'] : '';
$nombre_tutor = isset($_POST['nombre_tutor']) ? $_POST['nombre_tutor'] : '';
$nacionalidad_tutor = isset($_POST['nacionalidad_tutor']) ? $_POST['nacionalidad_tutor'] : '';
$asistioT = isset($_POST['asistioT']) ? $_POST['asistioT'] : '';
$nivelT = isset($_POST['nivelT']) ? $_POST['nivelT'] : [];
$completoT = isset($_POST['completoT']) ? $_POST['completoT'] : '';
$documento_tutor = isset($_POST['documento_tutor']) ? $_POST['documento_tutor'] : '';
$numero_tutor = isset($_POST['numero_tutor']) ? $_POST['numero_tutor'] : '';
$documento_estado_tutor = isset($_POST['documento_estado_tutor']) ? $_POST['documento_estado_tutor'] : '';
$domicilio_tutor = isset($_POST['domicilio_tutor']) ? $_POST['domicilio_tutor'] : '';
$departamento_tutor = isset($_POST['departamento_tutor']) ? $_POST['departamento_tutor'] : '';
$entre_calles_tutor = isset($_POST['entre_calles_tutor']) ? $_POST['entre_calles_tutor'] : '';
$distrito_tutor = isset($_POST['distrito_tutor']) ? $_POST['distrito_tutor'] : '';
$localidad_tutor = isset($_POST['localidad_tutor']) ? $_POST['localidad_tutor'] : '';
$codigo_postal_tutor = isset($_POST['codigo_postal_tutor']) ? $_POST['codigo_postal_tutor'] : '';
$telefono_tutor = isset($_POST['telefono_tutor']) ? $_POST['telefono_tutor'] : '';
$celular_tutor = isset($_POST['celular_tutor']) ? $_POST['celular_tutor'] : '';
$email_tutor = isset($_POST['email_tutor']) ? $_POST['email_tutor'] : '';
$jefe_del_hogar_tutor = isset($_POST['jefe_del_hogar_tutor']) ? $_POST['jefe_del_hogar_tutor'] : '';
$profesion_tutor = isset($_POST['profesion_tutor']) ? $_POST['profesion_tutor'] : '';
$ActividadT = isset($_POST['ActividadT']) ? $_POST['ActividadT'] : [];
//Fin datos de inscripcion

//Personas Autorizadas a Retirar al Alumno del Establecimiento
//Persona 1 
$apellido1 = isset($_POST['apellido1']) ? $_POST['apellido1'] : '';
$nombre1 = isset($_POST['nombre1']) ? $_POST['nombre1'] : '';
$tipo_doc1 = isset($_POST['tipo_doc1']) ? $_POST['tipo_doc1'] : '';
$numero_doc1 = isset($_POST['numero_doc1']) ? $_POST['numero_doc1'] : '';
$parentesco1 = isset($_POST['parentesco1']) ? $_POST['parentesco1'] : '';
//Persona 2
$apellido2 = isset($_POST['apellido2']) ? $_POST['apellido2'] : '';
$nombre2 = isset($_POST['nombre2']) ? $_POST['nombre2'] : '';
$tipo_doc2 = isset($_POST['tipo_doc2']) ? $_POST['tipo_doc2'] : '';
$numero_doc2 = isset($_POST['numero_doc2']) ? $_POST['numero_doc2'] : '';
$parentesco2 = isset($_POST['parentesco2']) ? $_POST['parentesco2'] : '';


//Restricciones Judiciales
$restriccion_apellido = isset($_POST['restriccion_apellido']) ? $_POST['restriccion_apellido'] : '';
$restriccion_nombre = isset($_POST['restriccion_nombre']) ? $_POST['restriccion_nombre'] : '';
$restriccion_doc = isset($_POST['restriccion_doc']) ? $_POST['restriccion_doc'] : '';
$restriccion_n = isset($_POST['restriccion_n']) ? $_POST['restriccion_n'] : '';
$restriccion = isset($_POST['restriccion']) ? $_POST['restriccion'] : '';
//Fin de Restricciones Judiciales
//Fin datos madre


// Crear tabla si no existe
$sql_create_table = "CREATE TABLE IF NOT EXISTS padres (
    id int not null auto_increment primary key,
    apellido_madre VARCHAR(50),
    nombre_madre VARCHAR(25),
    nacionalidad_madre VARCHAR(15),
    asistioM VARCHAR(20),
    nivelM VARCHAR(20),
    completoM VARCHAR(20),
    viveM VARCHAR(20),
    documento_madre VARCHAR(10),
    numero_madre VARCHAR(20),
    documento_estado_madre VARCHAR(15),
    domicilio_madre VARCHAR(50),
    departamento_madre VARCHAR(15),
    entre_calles_madre VARCHAR(60),
    distrito_madre VARCHAR(30),
    localidad_madre VARCHAR(20),
    codigo_postal_madre VARCHAR(10),
    telefono_madre VARCHAR(20),
    celular_madre VARCHAR(20),
    email_madre VARCHAR(70),
    jefe_del_hogar_madre VARCHAR(15),
    profesion_madre VARCHAR(20),
    ActividadM VARCHAR(20),
    apellido_padre VARCHAR(50),
    nombre_padre VARCHAR(25),
    nacionalidad_padre VARCHAR(15),
    asistioP VARCHAR(20),
    nivelP VARCHAR(20),
    completoP VARCHAR(20),
    viveP VARCHAR(20),
    documento_padre VARCHAR(10),
    numero_padre VARCHAR(20),
    documento_estado_padre VARCHAR(15),
    domicilio_padre VARCHAR(50),
    departamento_padre VARCHAR(15),
    entre_calles_padre VARCHAR(60),
    distrito_padre VARCHAR(30),
    localidad_padre VARCHAR(20),
    codigo_postal_padre VARCHAR(10),
    telefono_padre VARCHAR(20),
    celular_padre VARCHAR(20),
    email_padre VARCHAR(70),
    jefe_del_hogar_padre VARCHAR(15),
    profesion_padre VARCHAR(20),
    ActividadP VARCHAR(20),
    apellido_tutor VARCHAR(50),
    nombre_tutor VARCHAR(25),
    nacionalidad_tutor VARCHAR(15),
    asistioT VARCHAR(20),
    nivelT VARCHAR(20),
    completoT VARCHAR(20),
    documento_tutor VARCHAR(10),
    numero_tutor VARCHAR(20),
    documento_estado_tutor VARCHAR(15),
    domicilio_tutor VARCHAR(50),
    departamento_tutor VARCHAR(15),
    entre_calles_tutor VARCHAR(60),
    distrito_tutor VARCHAR(30),
    localidad_tutor VARCHAR(20),
    codigo_postal_tutor VARCHAR(10),
    telefono_tutor VARCHAR(20),
    celular_tutor VARCHAR(20),
    email_tutor VARCHAR(70),
    jefe_del_hogar_tutor VARCHAR(15),
    profesion_tutor VARCHAR(20),
    ActividadT VARCHAR(20),
    apellido1 VARCHAR(30),
    nombre1 VARCHAR(20),
    tipo_doc1 VARCHAR(15),
    numero_doc1 VARCHAR(10),
    parentesco1 VARCHAR(15),
    apellido2 VARCHAR(30),
    nombre2 VARCHAR(20),
    tipo_doc2 VARCHAR(15),
    numero_doc2 VARCHAR(10),
    parentesco2 VARCHAR(15),
    restriccion_apellido VARCHAR(20),
    restriccion_nombre VARCHAR(20),
    restriccion_doc VARCHAR(15),
    restriccion_n VARCHAR(10),
    restriccion VARCHAR(20)
)";


if ($conexion->query($sql_create_table) === TRUE) {
    echo "Tabla creada o ya existe.";
} else {
    echo "Error al crear la tabla: " . $conexion->error;
}


// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO padres (
    apellido_madre,
    nombre_madre,
    nacionalidad_madre,
    asistioM,
    nivelM,
    completoM,
    viveM,
    documento_madre,
    numero_madre,
    documento_estado_madre,
    domicilio_madre,
    departamento_madre,
    entre_calles_madre,
    distrito_madre,
    localidad_madre,
    codigo_postal_madre,
    telefono_madre,
    celular_madre,
    email_madre,
    jefe_del_hogar_madre,
    profesion_madre,
    ActividadM,
    apellido_padre,
    nombre_padre,
    nacionalidad_padre,
    asistioP,
    nivelP,
    completoP,
    viveP,
    documento_padre,
    numero_padre,
    documento_estado_padre,
    domicilio_padre,
    departamento_padre,
    entre_calles_padre,
    distrito_padre,
    localidad_padre,
    codigo_postal_padre,
    telefono_padre,
    celular_padre,
    email_padre,
    jefe_del_hogar_padre,
    profesion_padre,
    ActividadP,
    apellido_tutor,
    nombre_tutor,
    nacionalidad_tutor,
    asistioT,
    nivelT,
    completoT,
    documento_tutor,
    numero_tutor,
    documento_estado_tutor,
    domicilio_tutor,
    departamento_tutor,
    entre_calles_tutor,
    distrito_tutor,
    localidad_tutor,
    codigo_postal_tutor,
    telefono_tutor,
    celular_tutor,
    email_tutor,
    jefe_del_hogar_tutor,
    profesion_tutor,
    ActividadT,
    apellido1,
    nombre1,
    tipo_doc1,
    numero_doc1,
    parentesco1,
    apellido2,
    nombre2,
    tipo_doc2,
    numero_doc2,
    parentesco2,
    restriccion_apellido,
    restriccion_nombre,
    restriccion_doc,
    restriccion_n,
    restriccion
) VALUES (
    ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?
)";


$stmt = $conexion->prepare($sql);

// Definir las variables antes de la llamada a bind_param()
// Ejemplo: $apellido_madre = 'valor'; (deberías haber definido las variables previamente)

$stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss", // Cadena de tipos de parámetros (todos 's' para string)
    $apellido_madre, 
    $nombre_madre, 
    $nacionalidad_madre, 
    $asistioM, 
    $nivelM, 
    $completoM, 
    $viveM,
    $documento_madre, 
    $numero_madre, 
    $documento_estado_madre, 
    $domicilio_madre, 
    $departamento_madre,
    $entre_calles_madre, 
    $distrito_madre, 
    $localidad_madre, 
    $codigo_postal_madre, 
    $telefono_madre,
    $celular_madre, 
    $email_madre, 
    $jefe_del_hogar_madre, 
    $profesion_madre, 
    $ActividadM, 
    $apellido_padre, 
    $nombre_padre, 
    $nacionalidad_padre, 
    $asistioP, 
    $nivelP, 
    $completoP, 
    $viveP,
    $documento_padre, 
    $numero_padre, 
    $documento_estado_padre, 
    $domicilio_padre, 
    $departamento_padre,
    $entre_calles_padre, 
    $distrito_padre, 
    $localidad_padre, 
    $codigo_postal_padre, 
    $telefono_padre,
    $celular_padre, 
    $email_padre, 
    $jefe_del_hogar_padre, 
    $profesion_padre, 
    $ActividadP, 
    
    $apellido_tutor, 
    $nombre_tutor, 
    $nacionalidad_tutor, 
    $asistioT, 
    $nivelT, 
    $completoT, 
    $documento_tutor,
    $numero_tutor, 
    $documento_estado_tutor, 
    $domicilio_tutor, 
    $departamento_tutor, 
    $entre_calles_tutor,
    $distrito_tutor, 
    $localidad_tutor, 
    $codigo_postal_tutor, 
    $telefono_tutor, 
    $celular_tutor, 
    $email_tutor,
    $jefe_del_hogar_tutor, 
    $profesion_tutor, 
    $ActividadT, 
    
    $apellido1, 
    $nombre1, 
    $tipo_doc1, 
    $numero_doc1, 
    $parentesco1, 
    
    $apellido2, 
    $nombre2, 
    $tipo_doc2, 
    $numero_doc2, 
    $parentesco2, 
    
    $restriccion_apellido, 
    $restriccion_nombre, 
    $restriccion_doc, 
    $restriccion_n, 
    $restriccion
);

if ($stmt->execute()) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error: " . $stmt->error;
}

echo "<form action='tabla_padres.php' method='get'>";
echo "<button type='submit'>Ver datos de los Padres</button>";
echo "</form>";

// Cerrar la conexión
$stmt->close();
$conexion->close();

