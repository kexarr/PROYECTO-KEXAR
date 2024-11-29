<?php
include 'encabezado.php'
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inscripción</title>

    <!-- Incluir Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #ffffff;
            padding-top: 50px;
        }
        .container {
            max-width: 800px;
        }
        .fieldset-custom {
            border: 2px solid #000000;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }
        .legend-custom {
            font-size: 1.2rem;
            font-weight: bold;
            color: #007bff;
        }
        .header-img {
            width: 100%; /* Ajusta al ancho del contenedor */
            height: auto; /* Mantiene la proporción de la imagen */
            max-width: none; /* Elimina el límite de tamaño máximo */
        }
    </style>
</head>
<body>

    <div class="container">
        <h2 class="text-center mb-4">Formulario de Inscripción</h2>
        <div class="col-auto">
            <img src="Logo de buenos aires.jpg" class="header-img" alt="Logo Buenos Aires">
            </div>
        <form action="datos_alumno.php" method="POST">
            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Datos del Establecimiento</legend>
            <!-- Datos de inscripción -->
            <div class="mb-3">
                <label class="form-label" for="clave_provincial">Clave Provincial:</label>
                <input type="text" class="form-control" name="clave_provincial">
            </div>

            <!-- CUE -->
            <div class="mb-3">
                <label class="form-label" for="cue">CUE:</label>
                <input type="text" class="form-control" name="cue">
            </div>

            <!-- Nombre -->
            <div class="mb-3">
                <label class="form-label" for="nombre_establecimiento">Nombre:</label>
                <input type="text" class="form-control" name="nombre_establecimiento">
            </div>

            <!-- Nº -->
            <div class="mb-3">
                <label class="form-label" for="numero_establecimiento">Nº:</label>
                <input type="text" class="form-control" name="numero_establecimiento">
            </div>

            <!-- Distrito -->
            <div class="mb-3">
                <label class="form-label" for="distrito_establecimiento">Distrito:</label>
                <input type="text" class="form-control" name="distrito_establecimiento">
            </div>

            <!-- Sector de Gestión -->
            <div class="mb-3 checkbox-group">
                <label class="form-label">SECTOR DE GESTIÓN:</label><br>
                <input type="checkbox" name="sector_gestion_establecimiento" value="estatal"> Estatal<br>
                <input type="checkbox" name="sector_gestion_establecimiento" value="privado"> Privado<br>
                <input type="checkbox" name="sector_gestion_establecimiento" value="municipal"> Municipal<br>
                <input type="checkbox" name="sector_gestion_establecimiento" value="nacional"> Nacional<br>
                <input type="checkbox" name="sector_gestion_establecimiento" value="otro"> Otro<br>
            </div>
        </fieldset>

        <fieldset class="fieldset-custom">
            <legend class="legend-custom">Datos del Establecimiento de Procedencia</legend>

            <!-- Clave Provincial -->
            <div class="mb-3"><label class="form-label">Clave Provincial:</label>
                <input type="text" class="form-control" name="clave_provincial_establecimiento_procedencia">
            </div>
            <!-- CUE -->
            <div class="mb-3"><label class="form-label">CUE:</label>
                <input type="text" class="form-control" name="cue_establecimiento_procedencia">
            </div>
            <!-- Nivel / Modalidad -->
            <div class="mb-3"><label class="form-label">Nivel / Modalidad:</label>
                <input type="text" class="form-control" name="nivel_establecimiento_procedencia">
            </div>
            <!-- Nombre -->
            <div class="mb-3"><label class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre_establecimiento_procedencia">
            </div>
            <!-- Nº -->
            <div class="mb-3"><label class="form-label">Nº:</label>
                <input type="text" class="form-control" name="numero_establecimiento_procedencia">
            </div>
            <!-- Dirección -->
            <div class="mb-3"><label class="form-label">Dirección:</label>
                <input type="text" class="form-control" name="direccion_establecimiento_procedencia">
            </div>
            <!-- Localidad -->
            <div class="mb-3"><label class="form-label">Localidad:</label>
                <input type="text" class="form-control" name="localidad_establecimiento_procedencia">
            </div>
            <!-- Distrito -->
            <div class="mb-3"><label class="form-label">Distrito:</label>
                <input type="text" class="form-control" name="distrito_establecimiento_procedencia">
            </div>
            <!-- Provincia -->
            <div class="mb-3"><label class="form-label">Provincia:</label>
                <input type="text" class="form-control" name="provincia_establecimiento_procedencia">
            </div>
            <!-- País -->
            <div class="mb-3"><label class="form-label">País:</label>
                <input type="text" class="form-control" name="pais_establecimiento_procedencia">
            </div>

            <!-- Sector de Gestión -->
            <div class="mb-3 checkbox-group">
                <label class="form-label">SECTOR DE GESTIÓN:</label><br>
                <input type="checkbox" name="sector_gestion_establecimiento_procedencia" value="estatal"> Estatal<br>
                <input type="checkbox" name="sector_gestion_establecimiento_procedencia" value="privado"> Privado<br>
                <input type="checkbox" name="sector_gestion_establecimiento_procedencia" value="municipal"> Municipal<br>
                <input type="checkbox" name="sector_gestion_establecimiento_procedencia" value="nacional"> Nacional<br>
                <input type="checkbox" name="sector_gestion_establecimiento_procedencia" value="otro"> Otro<br>
            </div>
        </fieldset>

            <!-- Datos de Inscripcion -->
            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Datos de Inscripción</legend>

                <!-- NIVEL PRIMARIO - AÑO -->
                <div class="mb-3"><label class="form-label">Nivel Primario - Año</label><br>
                    <input type="checkbox" name="nivel_primario_año" value="1"> 1
                    <input type="checkbox" name="nivel_primario_año" value="2"> 2
                    <input type="checkbox" name="nivel_primario_año" value="3"> 3
                    <input type="checkbox" name="nivel_primario_año" value="4"> 4
                    <input type="checkbox" name="nivel_primario_año" value="5"> 5
                    <input type="checkbox" name="nivel_primario_año" value="6"> 6
                </div>

                <!-- TURNO SOLICITADO -->
                <div class="mb-3"><label class="form-label">Turno Solicitado</label><br>
                    <input type="checkbox" name="turno_solicitado" value="Mañana"> Mañana
                    <input type="checkbox" name="turno_solicitado" value="Tarde"> Tarde
                    <input type="checkbox" name="turno_solicitado" value="Alternado"> Alternado
                </div>

                <!-- JORNADA -->
                <div class="mb-3"><label class="form-label">Jornada</label><br>
                    <input type="checkbox" name="jornada_solicitada" value="Simple"> Simple
                    <input type="checkbox" name="jornada_solicitada" value="Completa"> Completa
                    <input type="checkbox" name="jornada_solicitada" value="Doble Escolaridad"> Doble Escolaridad
                </div>

                <!-- CONDICIÓN DEL ALUMNO EN LA INSCRIPCIÓN ACTUAL -->
                <div class="mb-3"><label class="form-label">Condición del Alumno</label><br>
                    <input type="checkbox" name="condicion_alumno" value="Ingresante"> Ingresante
                    <input type="checkbox" name="condicion_alumno" value="Reinscripto"> Reinscripto
                    <input type="checkbox" name="condicion_alumno" value="Promovido"> Promovido
                    <input type="checkbox" name="condicion_alumno" value="En periodo extendido de enseñanza"> En periodo extendido de enseñanza
                    <input type="checkbox" name="condicion_alumno" value="Promovido en sistema de promoción acompañada"> Promovido en sistema de promoción acompañada
                    <input type="text" name="area_pendiente" placeholder="Consignar área pendiente" class="form-control">
                    <input type="checkbox" name="condicion_alumno" value="Repitente"> Repitente
                </div>

                <!-- TRAYECTORIA DEL ALUMNO -->
                <div class="mb-3">
                    <label class="form-label">Trayectoria del Alumno</label><br>
                    <label class="form-label">¿Asistió a la sala de 5 años en el jardín de infantes?</label><br>
                    <input type="checkbox" name="trayectoria_alumno" value="Si"> Sí
                    <input type="checkbox" name="trayectoria_alumno" value="No"> No
                </div>

                <div class="mb-3">
                    <label class="form-label">¿Asistió como alumno integrado a otra institución educativa?</label><br>
                    <input type="checkbox" name="trayectoria_alumno" value="Si"> Sí
                    <input type="checkbox" name="trayectoria_alumno" value="No"> No
                </div>
            </fieldset>

            <!-- Datos del Alumno -->
            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Datos del Alumno</legend>
                <div class="mb-3"><label class="form-label">Tipo de Doc.</label>
                    <input type="text" name="tipo_documento_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Nº</label>
                    <input type="text" name="numero_documento_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Posee documento</label><br>
                    <input type="checkbox" name="posee_documento_alumno" value="posee"> Posee
                    <input type="checkbox" name="posee_documento_alumno" value="en_tramite"> En trámite
                    <input type="checkbox" name="posee_documento_alumno" value="no_posee"> No posee
                </div>
                <div class="mb-3"><label class="form-label">Estado del documento</label><br>
                    <input type="checkbox" name="estado_documento_alumno" value="bueno"> Bueno
                    <input type="checkbox" name="estado_documento_alumno" value="malo"> Malo
                </div>
                <div class="mb-3"><label class="form-label">Apellido</label>
                    <input type="text" name="apellido_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Nombre</label>
                    <input type="text" name="nombre_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Sexo</label>
                    <input type="text" name="sexo_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Fecha de Nac.</label>
                    <input type="date" name="fecha_nacimiento_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Lugar de Nac.</label>
                    <input type="text" name="lugar_nacimiento_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Nacionalidad</label>
                    <input type="text" name="nacionalidad_alumno" class="form-control">
                </div>
            </fieldset>

            <!-- Domicilio del Alumno -->
            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Domicilio</legend>
                <div class="mb-3"><label class="form-label">Calle</label>
                    <input type="text" name="calle_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Nº</label>
                    <input type="text" name="calle_altura_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Piso</label>
                    <input type="text" name="piso_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Torre</label>
                    <input type="text" name="torre_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Dpto</label>
                    <input type="text" name="departamento_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Entre calles</label>
                    <input type="text" name="entre_calles_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Otro dato</label>
                    <input type="text" name="otro_dato_domicilio_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Provincia</label>
                    <input type="text" name="provincia_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Distrito</label>
                    <input type="text" name="distrito_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Localidad</label>
                    <input type="text" name="localidad_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Código Postal</label>
                    <input type="text" name="codigo_postal_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Teléfono</label>
                    <input type="text" name="telefono_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Teléfono celular</label>
                    <input type="text" name="telefono_celular_alumno" class="form-control">
                </div>
            </fieldset>

            <!-- Otros Datos del Alumno -->
            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Otros Datos del Alumno</legend>
                <div class="mb-3"><label class="form-label">Nº de legajo</label>
                    <input type="text" name="numero_legajo_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Nº de matriz</label>
                    <input type="text" name="numero_matriz_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Nº de folio</label>
                    <input type="text" name="numero_folio_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">¿Tiene hermanos?</label>
                    <input type="checkbox" name="hermanos_alumno" value="si"> Sí
                    <input type="checkbox" name="hermanos_alumno" value="no"> No
                </div>
                <div class="mb-3"><label class="form-label">Cantidad de hermanos</label>
                    <input type="text" name="hermanos_cantidad_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Hermanos en este establecimiento</label>
                    <input type="text" name="hermanos_cantidad_establecimiento_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Habitantes en el hogar</label>
                    <input type="text" name="habitantes_hogar_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">Habitaciones en el hogar</label>
                    <input type="text" name="habitaciones_hogar_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">¿Otra lengua hablada en el hogar?</label>
                    <input type="text" name="otra_lengua_hablada_hogar_alumno" class="form-control">
                </div>
                <div class="mb-3"><label class="form-label">¿Recibe ayuda escolar?</label>
                    <input type="checkbox" name="recibe_ayuda_escolar_alumno" value="si"> Sí
                    <input type="checkbox" name="recibe_ayuda_escolar_alumno" value="no"> No
                </div>
                <div class="mb-3"><label class="form-label">¿Tiene obra social?</label>
                    <input type="checkbox" name="obra_social_alumno" value="si"> Sí
                    <input type="checkbox" name="obra_social_alumno" value="no"> No
                </div>
                <div class="mb-3"><label class="form-label">¿Está incorporado en un plan/programa?</label>
                    <input type="checkbox" name="incorporado_plan_o_programa_alumno" value="si"> Sí
                    <input type="checkbox" name="incorporado_plan_o_programa_alumno" value="no"> No
                </div>
                <div class="mb-3"><label class="form-label">Planes/Programas</label>
                    <input type="checkbox" name="incorporado_plan_o_programa_nombre_alumno" value="auh"> AUH
                    <input type="checkbox" name="incorporado_plan_o_programa_nombre_alumno" value="progresar"> Progresar
                    <input type="checkbox" name="incorporado_plan_o_programa_nombre_alumno" value="becas_judicializados"> Becas para judicializados
                    <input type="checkbox" name="incorporado_plan_o_programa_nombre_alumno" value="becas_excepcion"> Becas por excepción
                    <input type="checkbox" name="incorporado_plan_o_programa_nombre_alumno" value="otros"> Otros<br>
                </div>
                <div class="mb-3"><label class="form-label">Medio de transporte hacia el establecimiento:</label>
                    <input type="checkbox" name="medio_transporte_alumno" value="a_pie"> A pie<br>
                    <input type="checkbox" name="medio_transporte_alumno" value="omnibus"> Ómnibus<br>
                    <input type="checkbox" name="medio_transporte_alumno" value="auto_particular"> Auto particular<br>
                    <input type="checkbox" name="medio_transporte_alumno" value="taxi_remis"> Taxi/Remis<br>
                    <input type="checkbox" name="medio_transporte_alumno" value="otro"> Otro<br>
                </div>
            </fieldset>
            <!-- Botón de Envío -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Inscribirse</button>
            </div>
        </form>
    </div>

    <!-- Incluir Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
