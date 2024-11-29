<?php

include('conexion.php');

//Datos del establecimiento en el que se inscribe
$clave_provincial = isset($_POST["clave_provincial"]) ? $_POST["clave_provincial"] : ''; // Clave provincial
$cue = isset($_POST["cue"]) ? $_POST["cue"] : ""; //CUE
$nombre_establecimiento = isset($_POST["nombre_establecimiento"]) ? $_POST["nombre_establecimiento"]: ''; //Nombre
$numero_establecimiento = isset($_POST["numero_establecimiento"]) ? $_POST["numero_establecimiento"]: ''; // Nº
$distrito_establecimiento = isset($_POST["distrito_establecimiento"]) ? $_POST["distrito_establecimiento"]: ''; // Distrito
$sector_gestion_establecimiento = isset($_POST["sector_gestion_establecimiento"]) ? $_POST["sector_gestion_establecimiento"]: ''; //SECTOR DE GESTION
//Fin datos establecimiento

//Datos establecimiento educativo de procedencia
$clave_provincial_establecimiento_procedencia = isset($_POST["clave_provincial_establecimiento_procedencia"]) ? $_POST["clave_provincial_establecimiento_procedencia"] : ''; //Clave Provincial
$cue_establecimiento_procedencia = isset($_POST["cue_establecimiento_procedencia"]) ? $_POST["cue_establecimiento_procedencia"] : ""; //CUE
$nivel_establecimiento_procedencia = isset($_POST["nivel_establecimiento_procedencia"]) ? $_POST["nivel_establecimiento_procedencia"]: ""; //Nivel / modalidad
$nombre_establecimiento_procedencia = isset($_POST["nombre_establecimiento_procedencia"]) ? $_POST["nombre_establecimiento_procedencia"]: ''; //Nombre
$numero_establecimiento_procedencia = isset($_POST["numero_establecimiento_procedencia"]) ? $_POST["numero_establecimiento_procedencia"]: ''; // Nº
$direccion_establecimiento_procedencia = isset($_POST["direccion_establecimiento_procedencia"]) ? $_POST["direccion_establecimiento_procedencia"]: ''; //Dirección
$localidad_establecimiento_procedencia = isset($_POST["localidad_establecimiento_procedencia"]) ? $_POST["localidad_establecimiento_procedencia"]: ''; //Localidad
$distrito_establecimiento_procedencia = isset($_POST["distrito_establecimiento_procedencia"]) ? $_POST["distrito_establecimiento_procedencia"]: ''; // Distrito
$provincia_establecimiento_procedencia = isset($_POST["provincia_establecimiento_procedencia"]) ? $_POST["provincia_establecimiento_procedencia"]: ''; // Provincia
$pais_establecimiento_procedencia = isset($_POST["pais_establecimiento_procedencia"]) ? $_POST["pais_establecimiento_procedencia"]: ''; // País
$sector_gestion_establecimiento_procedencia = isset($_POST["sector_gestion_establecimiento_procedencia"]) ? $_POST["sector_gestion_establecimiento_procedencia"]: ''; //SECROR DE GESTION
//Fin datos establecimiento educativo de procedencia

//Datos de inscripcion
$nivel_primario_año = isset($_POST["nivel_primario_año"]) ? $_POST["nivel_primario_año"]: ''; // NIVEL PRIMARIO - AÑO: 1 - 2 -3 -4 - 5 - 6 (checkboxes)
$turno_solicitado = isset($_POST["turno_solicitado"]) ? $_POST["turno_solicitado"]: ''; // TURNO SOLICITADO: Mañana - Tarde - Alternado (checkboxes)
$jornada_solicitada = isset($_POST["jornada_solicitada"]) ? $_POST["jornada_solicitada"]: ''; // JORNADA: Simple - completa -doble escolaridad (checkboxes)
$condicion_alumno = isset($_POST["condicion_alumno"]) ? $_POST["condicion_alumno"]: ''; // CONDICION DEL ALUMNO EN LA INSCRIPCION ACTUAL: Ingresante - Reinscripto - Promovido - En periodo extendido de enseñanza - Promovido en sistema de promocion acompañada (Consignar area pendiente: (input)) - Repitente (checkboxes)
//Promovido en sistema de promoción acompañada
$trayectoria_alumno = isset($_POST["trayectoria_alumno"]) ? $_POST["trayectoria_alumno"]: ''; //TRAYECTORIA DEL ALUMNO: ¿Asistio a la sala de 5 años en el jardin de infantes? SI - NO (checkboxes) - Asistió comoa lumno integrado a otra institucion educativa? SI - NO (checkboxes)
//Fin datos de inscripcion

//Datos del alumno
$tipo_documento_alumno = isset($_POST["tipo_documento_alumno"]) ? $_POST["tipo_documento_alumno"]: ''; //Tipo de Doc.
$numero_documento_alumno = isset($_POST["numero_documento_alumno"]) ? $_POST["numero_documento_alumno"]: ''; // Nº
$posee_documento_alumno = isset($_POST["posee_documento_alumno"]) ? $_POST["posee_documento_alumno"]: ''; // Posee - en tramite - no posee (checkboxes)
$estado_documento_alumno = isset($_POST["estado_documento_alumno"]) ?  $_POST["estado_documento_alumno"]: ''; //Estado del Doc. Bueno - malo (checkboxes)

$apellido_alumno = isset($_POST["apellido_alumno"]) ? $_POST["apellido_alumno"]: ''; // Apellido
$nombre_alumno = isset($_POST["nombre_alumno"]) ? $_POST["nombre_alumno"]: ''; //Nombre
$sexo_alumno = isset($_POST["sexo_alumno"]) ? $_POST["sexo_alumno"]: ''; //Sexo
$fecha_nacimiento_alumno = isset($_POST["fecha_nacimiento_alumno"]) ? $_POST["fecha_nacimiento_alumno"]: ''; //Fecha de Nac.
$lugar_nacimiento_alumno = isset($_POST["lugar_nacimiento_alumno"]) ? $_POST["lugar_nacimiento_alumno"]: ''; //Lugar de Nac.
$nacionalidad_alumno = isset($_POST["nacionalidad_alumno"]) ? $_POST["nacionalidad_alumno"]: ''; //Nacionalidad

//Domicilio
$calle_alumno = isset($_POST["calle_alumno"]) ? $_POST["calle_alumno"]: ''; // Calle
$calle_altura_alumno = isset($_POST["calle_altura_alumno"]) ? $_POST["calle_altura_alumno"]: ''; // Nº
$piso_alumno = isset($_POST["piso_alumno"]) ? $_POST["piso_alumno"]: ''; //Piso
$torre_alumno = isset($_POST["torre_alumno"]) ? $_POST["torre_alumno"]: '';// Torre
$departamento_alumno = isset($_POST["departamento_alumno"]) ? $_POST["departamento_alumno"]: ''; // Dpto
$entre_calles_alumno = isset($_POST["entre_calles_alumno"]) ? $_POST["entre_calles_alumno"]: ''; // Entre calles
$otro_dato_domicilio_alumno = isset($_POST["otro_dato_domicilio_alumno"]) ? $_POST["otro_dato_domicilio_alumno"]: ''; //Otro dato referido al domicilio
$provincia_alumno = isset($_POST["provincia_alumno"]) ? $_POST["provincia_alumno"]: ''; // Provincia
$distrito_alumno = isset($_POST["distrito_alumno"]) ? $_POST["distrito_alumno"]: ''; //Distrito
$localidad_alumno = isset($_POST["localidad_alumno"]) ? $_POST["localidad_alumno"]: ''; //Localidad
$codigo_postal_alumno = isset($_POST["codigo_postal_alumno"]) ? $_POST["codigo_postal_alumno"]: ''; //Codigo postal
$telefono_alumno = isset($_POST["telefono_alumno"]) ? $_POST["telefono_alumno"]: ''; //Telefono
$telefono_celular_alumno = isset($_POST["telefono_celular_alumno"]) ? $_POST["telefono_celular_alumno"]: ''; //Telefono celular
//Fin domicilio

$numero_legajo_alumno = isset($_POST["numero_legajo_alumno"]) ? $_POST["numero_legajo_alumno"]: ''; //Nº de legajo
$numero_matriz_alumno = isset($_POST["numero_matriz_alumno"]) ? $_POST["numero_matriz_alumno"]: ''; // Nº de Matriz
$numero_folio_alumno = isset($_POST["numero_folio_alumno"]) ? $_POST["numero_folio_alumno"]: ''; // Nº de folio

//Otros datos del alumno
$hermanos_alumno = isset($_POST["hermanos_alumno"]) ? $_POST["hermanos_alumno"]: '';  //Hermanos: SI - NO (checkboxes)
$hermanos_cantidad_alumno = isset($_POST["hermanos_cantidad_alumno"]) ? $_POST["hermanos_cantidad_alumno"]: ''; // Cantidad
$hermanos_cantidad_establecimiento_alumno = isset($_POST["hermanos_cantidad_establecimiento_alumno"]) ? $_POST["hermanos_cantidad_establecimiento_alumno"]: ''; //Cantidad de hermanos que asisten a este establecimiento
$habitantes_hogar_alumno = isset($_POST["habitantes_hogar_alumno"]) ? $_POST["habitantes_hogar_alumno"]: ''; //Cantidad de habitantes en el hogar
$habitaciones_hogar_alumno = isset($_POST["habitaciones_hogar_alumno"]) ? $_POST["habitaciones_hogar_alumno"]: ''; // Cantidad de habitaciones en el hogar
$otra_lengua_hablada_hogar_alumno = isset($_POST["otra_lengua_hablada_hogar_alumno"]) ? $_POST["otra_lengua_hablada_hogar_alumno"]: ''; // Otra lengua hablada en el hogar
$recibe_ayuda_escolar_alumno = isset($_POST["recibe_ayuda_escolar_alumno"]) ? $_POST["recibe_ayuda_escolar_alumno"]: ''; //Recibe ayuda escolar: SI - NO (checkboxes)
$obra_social_alumno = isset($_POST["obra_social_alumno"]) ? $_POST["obra_social_alumno"]: ''; //Obra social: SI - NO (checkboxes)
$incorporado_plan_o_programa_alumno = isset($_POST["incorporado_plan_o_programa_alumno"]) ? $_POST["incorporado_plan_o_programa_alumno"]: ''; //Se encuentra incorporado en algun plan o programa? SI - NO (checkboxes)
$incorporado_plan_o_programa_nombre_alumno = isset($_POST["incorporado_plan_o_programa_nombre_alumno"]) ? $_POST["incorporado_plan_o_programa_nombre_alumno"]: ''; //AUH - Progresar - Becas para judicializados - Becas por excepcion - Otros (checkboxes)
$medio_transporte_alumno = isset($_POST["medio_transporte_alumno"]) ? $_POST["medio_transporte_alumno"]: '';//Medio de transporte que lo acerca al establecimiento: A pie - Omnibus - Auto particular - Taxi /remis - Otro (checkboxes)
//Fin otros datos del alumno
//Fin datos alumno


// Crear tabla si no existe
$sql_create_table = "CREATE TABLE IF NOT EXISTS inscripcion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    clave_provincial VARCHAR(50),
    cue VARCHAR(50),
    nombre_establecimiento VARCHAR(255),
    numero_establecimiento VARCHAR(50),
    distrito_establecimiento VARCHAR(255),
    sector_gestion_establecimiento VARCHAR(100),
    clave_provincial_establecimiento_procedencia VARCHAR(50),
    cue_establecimiento_procedencia VARCHAR(50),
    nivel_establecimiento_procedencia VARCHAR(100),
    nombre_establecimiento_procedencia VARCHAR(255),
    numero_establecimiento_procedencia VARCHAR(50),
    direccion_establecimiento_procedencia VARCHAR(255),
    localidad_establecimiento_procedencia VARCHAR(255),
    distrito_establecimiento_procedencia VARCHAR(255),
    provincia_establecimiento_procedencia VARCHAR(255),
    pais_establecimiento_procedencia VARCHAR(255),
    sector_gestion_establecimiento_procedencia VARCHAR(100),
    nivel_primario_año VARCHAR(50),
    turno_solicitado VARCHAR(100),
    jornada_solicitada VARCHAR(100),
    condicion_alumno VARCHAR(255),
    trayectoria_alumno VARCHAR(255),
    tipo_documento_alumno VARCHAR(50),
    numero_documento_alumno VARCHAR(50),
    posee_documento_alumno VARCHAR(100),
    estado_documento_alumno VARCHAR(100),
    apellido_alumno VARCHAR(255),
    nombre_alumno VARCHAR(255),
    sexo_alumno VARCHAR(50),
    fecha_nacimiento_alumno DATE,
    lugar_nacimiento_alumno VARCHAR(255),
    nacionalidad_alumno VARCHAR(255),
    calle_alumno VARCHAR(255),
    calle_altura_alumno VARCHAR(50),
    piso_alumno VARCHAR(50),
    torre_alumno VARCHAR(50),
    departamento_alumno VARCHAR(50),
    entre_calles_alumno VARCHAR(255),
    otro_dato_domicilio_alumno VARCHAR(255),
    provincia_alumno VARCHAR(255),
    distrito_alumno VARCHAR(255),
    localidad_alumno VARCHAR(255),
    codigo_postal_alumno VARCHAR(50),
    telefono_alumno VARCHAR(50),
    telefono_celular_alumno VARCHAR(50),
    numero_legajo_alumno VARCHAR(50),
    numero_matriz_alumno VARCHAR(50),
    numero_folio_alumno VARCHAR(50),
    hermanos_alumno VARCHAR(50),
    hermanos_cantidad_alumno varchar(50),
    hermanos_cantidad_establecimiento_alumno varchar(50),
    habitantes_hogar_alumno varchar(50),
    habitaciones_hogar_alumno varchar(50),
    otra_lengua_hablada_hogar_alumno VARCHAR(255),
    recibe_ayuda_escolar_alumno VARCHAR(50),
    obra_social_alumno VARCHAR(50),
    incorporado_plan_o_programa_alumno VARCHAR(50),
    incorporado_plan_o_programa_nombre_alumno VARCHAR(255),
    medio_transporte_alumno VARCHAR(255)
);
";

if ($conexion->query($sql_create_table) === TRUE) {
    echo "Tabla creada o ya existe.\n";
} else {
    echo "Error al crear la tabla: " . $conexion->error;
}

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO inscripcion (
    clave_provincial,
    cue,
    nombre_establecimiento,
    numero_establecimiento,
    distrito_establecimiento,
    sector_gestion_establecimiento,
    clave_provincial_establecimiento_procedencia,
    cue_establecimiento_procedencia,
    nivel_establecimiento_procedencia,
    nombre_establecimiento_procedencia,
    numero_establecimiento_procedencia,
    direccion_establecimiento_procedencia,
    localidad_establecimiento_procedencia,
    distrito_establecimiento_procedencia,
    provincia_establecimiento_procedencia,
    pais_establecimiento_procedencia,
    sector_gestion_establecimiento_procedencia,
    nivel_primario_año,
    turno_solicitado,
    jornada_solicitada,
    condicion_alumno,
    trayectoria_alumno,
    tipo_documento_alumno,
    numero_documento_alumno,
    posee_documento_alumno,
    estado_documento_alumno,
    apellido_alumno,
    nombre_alumno,
    sexo_alumno,
    fecha_nacimiento_alumno,
    lugar_nacimiento_alumno,
    nacionalidad_alumno,
    calle_alumno,
    calle_altura_alumno,
    piso_alumno,
    torre_alumno,
    departamento_alumno,
    entre_calles_alumno,
    otro_dato_domicilio_alumno,
    provincia_alumno,
    distrito_alumno,
    localidad_alumno,
    codigo_postal_alumno,
    telefono_alumno,
    telefono_celular_alumno,
    numero_legajo_alumno,
    numero_matriz_alumno,
    numero_folio_alumno,
    hermanos_alumno,
    hermanos_cantidad_alumno,
    hermanos_cantidad_establecimiento_alumno,
    habitantes_hogar_alumno,
    habitaciones_hogar_alumno,
    otra_lengua_hablada_hogar_alumno,
    recibe_ayuda_escolar_alumno,
    obra_social_alumno,
    incorporado_plan_o_programa_alumno,
    incorporado_plan_o_programa_nombre_alumno,
    medio_transporte_alumno
) VALUES (
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
)";

// Preparar y ejecutar la consulta
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssssssssssss", 
    $clave_provincial,
    $cue,
    $nombre_establecimiento,
    $numero_establecimiento,
    $distrito_establecimiento,
    $sector_gestion_establecimiento,
    $clave_provincial_establecimiento_procedencia,
    $cue_establecimiento_procedencia,
    $nivel_establecimiento_procedencia,
    $nombre_establecimiento_procedencia,
    $numero_establecimiento_procedencia,
    $direccion_establecimiento_procedencia,
    $localidad_establecimiento_procedencia,
    $distrito_establecimiento_procedencia,
    $provincia_establecimiento_procedencia,
    $pais_establecimiento_procedencia,
    $sector_gestion_establecimiento_procedencia,
    $nivel_primario_año,
    $turno_solicitado,
    $jornada_solicitada,
    $condicion_alumno,
    $trayectoria_alumno,
    $tipo_documento_alumno,
    $numero_documento_alumno,
    $posee_documento_alumno,
    $estado_documento_alumno,
    $apellido_alumno,
    $nombre_alumno,
    $sexo_alumno,
    $fecha_nacimiento_alumno,
    $lugar_nacimiento_alumno,
    $nacionalidad_alumno,
    $calle_alumno,
    $calle_altura_alumno,
    $piso_alumno,
    $torre_alumno,
    $departamento_alumno,
    $entre_calles_alumno,
    $otro_dato_domicilio_alumno,
    $provincia_alumno,
    $distrito_alumno,
    $localidad_alumno,
    $codigo_postal_alumno,
    $telefono_alumno,
    $telefono_celular_alumno,
    $numero_legajo_alumno,
    $numero_matriz_alumno,
    $numero_folio_alumno,
    $hermanos_alumno,
    $hermanos_cantidad_alumno,
    $hermanos_cantidad_establecimiento_alumno,
    $habitantes_hogar_alumno,
    $habitaciones_hogar_alumno,
    $otra_lengua_hablada_hogar_alumno,
    $recibe_ayuda_escolar_alumno,
    $obra_social_alumno,
    $incorporado_plan_o_programa_alumno,
    $incorporado_plan_o_programa_nombre_alumno,
    $medio_transporte_alumno
);


if ($stmt->execute()) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error: " . $stmt->error;
}

echo "<form action='tabla_alumno.php' method='get'>";
echo "<button type='submit'>Ver datos del alumno</button>";
echo "</form>";

// Cerrar la conexión
$stmt->close();
$conexion->close();

