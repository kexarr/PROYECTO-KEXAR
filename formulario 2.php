<?php
include 'encabezado.php'
?><!DOCTYPE html>
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
        <form action="datos_madre.php" method="POST">
            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Datos de la Madre</legend>
                
                <!-- Apellido/s -->
                <div class="mb-3"><label class="form-label" for="apellido">Apellido/s</label>
                    <input type="text" class="form-control" name="apellido_madre">
                </div>

                <!-- Nombre/s -->
                <div class="mb-3"><label class="form-label" for="nombre">Nombre/s</label>
                    <input type="text" class="form-control" name="nombre_madre">
                </div>

                <!-- Nacionalidad -->
                <div class="mb-3"><label class="form-label" for="nacionalidad">Nacionalidad</label>
                    <input type="text" class="form-control" name="nacionalidad_madre">
                </div>

                <!-- Asistencia a establecimiento educacional -->
                <div class="mb-3"><label class="form-label">¿Asistió a algún establecimiento educacional?</label><br>
                    <input type="radio" name="asistioM" value="Si"> Si<br>
                    <input type="radio" name="asistioM" value="No"> No
                </div>
    
                <!-- Nivel más alto cursado -->
                <div class="mb-3">
                    <label class="form-label">¿Nivel más alto que cursó?</label><br>
                    <input type="checkbox" name="nivelM" value="primario"> Primario<br>
                    <input type="checkbox" name="nivelM" value="secundario"> Secundario<br>
                    <input type="checkbox" name="nivelM" value="Terciario"> Terciario<br>
                    <input type="checkbox" name="nivelM" value="Universitario"> Universitario<br>
                </div>
    
                <!-- Completo ese nivel -->
                <div class="mb-3">
                    <label class="form-label" for="completoM">¿Completó ese nivel?</label><br>
                    <input type="radio" name="completoM" value="si"> Si<br>
                    <input type="radio" name="completoM" value="no"> No
                </div>

                <!-- Vive -->
                <div class="mb-3">
                    <label class="form-label" for="viveM">Vive:</label><br>
                    <input type="radio" name="viveM" value="si"> Si<br>
                    <input type="radio" name="viveM" value="no"> No
                    <small class="text-muted">SI LA RESPUESTA ES NO, FIN DEL CUESTIONARIO SOBRE ESTA PERSONA</small>
                </div>
    
                <!-- Tipo de documento -->
                <div class="mb-3">
                    <label class="form-label">Tipo de Documento</label>
                    <input type="text" class="form-control" name="documento_madre">
                </div>
    
                <!-- Número de documento -->
                <div class="mb-3">
                    <label class="form-label">Nº</label>
                    <input type="number" class="form-control" name="numero_madre">
                </div>
    
                <!-- Si no posee documento -->
                <div class="mb-3">
                    <label class="form-label">Si no posee documento indicar:</label><br>
                    <input type="radio" name="documento_estado_madre" value="en_tramite"> En trámite<br>
                    <input type="radio" name="documento_estado_madre" value="no_tiene"> No tiene Doc.
                </div>
    
                <!-- Dirección -->
                <div class="mb-3"><label class="form-label">Domicilio:</label>
                    <input type="text" class="form-control" name="domicilio_madre">
                </div>
                <div class="mb-3"><label class="form-label">Dpto</label>
                    <input type="text" class="form-control" name="departamento_madre" >
                </div>
                <div class="mb-3"><label class="form-label">Provincia</label>
                    <input type="text" class="form-control" name="entre_calles_madre">
                </div>
                <div class="mb-3"><label class="form-label">Distrito</label>
                    <input type="text" class="form-control" name="distrito_madre">
                </div>
                <div class="mb-3"><label class="form-label">Localidad</label>
                    <input type="text" class="form-control" name="localidad_madre">
                </div>
                <div class="mb-3"><label class="form-label">Código Postal</label>
                    <input type="text" class="form-control" name="codigo_postal_madre">
                </div>
                <div class="mb-3"><label class="form-label">Teléfono:</label>
                    <input type="number" class="form-control" name="telefono_madre">
                </div>
                <div class="mb-3"><label class="form-label">Teléfono Celular:</label>
                    <input type="number" class="form-control" name="celular_madre">
                </div>
                <div class="mb-3"><label class="form-label" for="email_madre">E-mail:</label>
                    <input type="email" class="form-control" name="email_madre">
                </div>
    
                <div class="mb-3">
                    <label class="form-label">¿Es Jefe del Hogar?</label><br>
                    <input type="radio" name="jefe_del_hogar_madre" value="si"> Si<br>
                    <input type="radio" name="jefe_del_hogar_madre" value="no"> No
                </div>

                <!-- Profesión -->
                <div class="mb-3"><label class="form-label">Profesión u ocupación:</label>
                    <input type="text" class="form-control" name="profesion_madre">
                </div>
    
                <!-- Condición de actividad -->
                <div class="mb-3">
                    <label class="form-label" for="ActividadM">Condición de Actividad:</label><br>
                        <input type="checkbox" name="ActividadM" value="solotrabaja"> Sólo trabaja<br>
                        <input type="checkbox" name="ActividadM" value="trabajayestudia"> Trabaja y Estudia<br>
                        <input type="checkbox" name="ActividadM" value="trabajayrecibepension"> Trabaja y Recibe Jubilación o Pensión<br>
                        <input type="checkbox" name="ActividadM" value="buscatrabajo"> Sólo Busca Trabajo<br>
                        <input type="checkbox" name="ActividadM" value="estudia"> Solo estudia<br>
                        <input type="checkbox" name="ActividadM" value="buscatrabajoyestudia"> Busca Trabajo y Estudia<br>
                        <input type="checkbox" name="ActividadM" value="buscatrabajoyrecibepension"> Busca Trabajo y Recibe Jubilación o Pensión<br>
                        <input type="checkbox" name="ActividadM" value="jubilado/pensionado"> Jubilado/pensionado<br>
                        <input type="checkbox" name="ActividadM" value="otro"> Otro<br>
                </div>
            </fieldset>

            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Datos del Padre</legend>
                
                <!-- Apellido/s -->
                <div class="mb-3"><label class="form-label">Apellido/s</label>
                    <input type="text" class="form-control" name="apellido_padre">
                </div>

                <!-- Nombre/s -->
                <div class="mb-3"><label class="form-label">Nombre/s</label>
                    <input type="text" class="form-control" name="nombre_padre">
                </div>

                <!-- Nacionalidad -->
                <div class="mb-3"><label class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" name="nacionalidad_padre">
                </div>

                <!-- Asistencia a establecimiento educacional -->
                <div class="mb-3"><label class="form-label">¿Asistió a algún establecimiento educacional?</label><br>
                    <input type="radio" name="asistioP" value="Si"> Si<br>
                    <input type="radio" name="asistioP" value="No"> No
                </div>
    
                <!-- Nivel más alto cursado -->
                <div class="mb-3">
                    <label class="form-label">¿Nivel más alto que cursó?</label><br>
                    <input type="checkbox" name="nivelP" value="primario"> Primario<br>
                    <input type="checkbox" name="nivelP" value="secundario"> Secundario<br>
                    <input type="checkbox" name="nivelP" value="Terciario"> Terciario<br>
                    <input type="checkbox" name="nivelP" value="Universitario"> Universitario<br>
                </div>
    
                <!-- Completo ese nivel -->
                <div class="mb-3">
                    <label class="form-label">¿Completó ese nivel?</label><br>
                    <input type="radio" name="completoP" value="si"> Si<br>
                    <input type="radio" name="completoP" value="no"> No
                </div>

                <!-- Vive -->
                <div class="mb-3">
                    <label class="form-label">Vive:</label><br>
                    <input type="radio" name="viveP" value="si"> Si<br>
                    <input type="radio" name="viveP" value="no"> No
                    <small class="text-muted">SI LA RESPUESTA ES NO, FIN DEL CUESTIONARIO SOBRE ESTA PERSONA</small>
                </div>
    
                <!-- Tipo de documento -->
                <div class="mb-3">
                    <label class="form-label">Tipo de Documento</label>
                    <input type="text" class="form-control" name="documento_padre">
                </div>
    
                <!-- Número de documento -->
                <div class="mb-3">
                    <label class="form-label">Nº</label>
                    <input type="number" class="form-control" name="numero_padre">
                </div>
    
                <!-- Si no posee documento -->
                <div class="mb-3">
                    <label class="form-label">Si no posee documento indicar:</label><br>
                    <input type="radio" name="documento_estado_padre" value="en_tramite"> En trámite<br>
                    <input type="radio" name="documento_estado_padre" value="no_tiene"> No tiene Doc.
                </div>
    
                <!-- Dirección -->
                <div class="mb-3"><label class="form-label">Domicilio:</label>
                    <input type="text" class="form-control" name="domicilio_padre">
                </div>
                <div class="mb-3"><label class="form-label">Dpto</label>
                    <input type="text" class="form-control" name="departamento_padre">
                </div>
                <div class="mb-3"><label class="form-label">Provincia</label>
                    <input type="text" class="form-control" name="entre_calles_padre">
                </div>
                <div class="mb-3"><label class="form-label">Distrito</label>
                    <input type="text" class="form-control" name="distrito_padre">
                </div>
                <div class="mb-3"><label class="form-label">Localidad</label>
                    <input type="text" class="form-control" name="localidad_padre">
                </div>
                <div class="mb-3"><label class="form-label">Código Postal</label>
                    <input type="text" class="form-control" name="codigo_postal_padre">
                </div>
                <div class="mb-3"><label class="form-label">Teléfono:</label>
                    <input type="number" class="form-control" name="telefono_padre">
                </div>
                <div class="mb-3"><label class="form-label">Teléfono Celular:</label>
                    <input type="number" class="form-control" name="celular_padre">
                </div>
                <div class="mb-3"><label class="form-label" for="email_padre">E-mail:</label>
                    <input type="email" class="form-control" name="email_padre">
                </div>
    
                <div class="mb-3">
                    <label class="form-label">¿Es Jefe del Hogar?</label><br>
                    <input type="radio" name="jefe_del_hogar_padre" value="si"> Si<br>
                    <input type="radio" name="jefe_del_hogar_padre" value="no"> No
                </div>

                <!-- Profesión -->
                <div class="mb-3"><label class="form-label">Profesión u ocupación:</label>
                    <input type="text" class="form-control" name="profesion_padre">
                </div>
    
                <!-- Condición de actividad -->
                <div class="mb-3">
                    <label class="form-label">Condición de Actividad:</label><br>
                        <input type="checkbox" name="ActividadP" value="solotrabaja"> Sólo trabaja<br>
                        <input type="checkbox" name="ActividadP" value="trabajayestudia"> Trabaja y Estudia<br>
                        <input type="checkbox" name="ActividadP" value="trabajayrecibepension"> Trabaja y Recibe Jubilación o Pensión<br>
                        <input type="checkbox" name="ActividadP" value="buscatrabajo"> Sólo Busca Trabajo<br>
                        <input type="checkbox" name="ActividadP" value="estudia"> Solo estudia<br>
                        <input type="checkbox" name="ActividadP" value="buscatrabajoyestudia"> Busca Trabajo y Estudia<br>
                        <input type="checkbox" name="ActividadP" value="buscatrabajoyrecibepension"> Busca Trabajo y Recibe Jubilación o Pensión<br>
                        <input type="checkbox" name="ActividadP" value="jubilado/pensionado"> Jubilado/pensionado<br>
                        <input type="checkbox" name="ActividadP" value="otro"> Otro<br>
                </div>
            </fieldset>

            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Datos del Tutor</legend>
                
                <!-- Apellido/s -->
                <div class="mb-3"><label class="form-label">Apellido/s</label>
                    <input type="text" class="form-control" name="apellido_tutor">
                </div>

                <!-- Nombre/s -->
                <div class="mb-3"><label class="form-label">Nombre/s</label>
                    <input type="text" class="form-control" name="nombre_tutor">
                </div>

                <!-- Nacionalidad -->
                <div class="mb-3"><label class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" name="nacionalidad_tutor">
                </div>

                <!-- Asistencia a establecimiento educacional -->
                <div class="mb-3"><label class="form-label">¿Asistió a algún establecimiento educacional?</label><br>
                    <input type="radio" name="asistioT" value="Si"> Si<br>
                    <input type="radio" name="asistioT" value="No"> No
                </div>
    
                <!-- Nivel más alto cursado -->
                <div class="mb-3"><label class="form-label">¿Nivel más alto que cursó?</label><br>
                    <input type="checkbox" name="nivelT" value="primario"> Primario<br>
                    <input type="checkbox" name="nivelT" value="secundario"> Secundario<br>
                    <input type="checkbox" name="nivelT" value="Terciario"> Terciario<br>
                    <input type="checkbox" name="nivelT" value="Universitario"> Universitario<br>
                </div>
    
                <!-- Completo ese nivel -->
                <div class="mb-3">
                    <label class="form-label" for="completoT">¿Completó ese nivel?</label><br>
                    <input type="radio" name="completoT" value="si"> Si<br>
                    <input type="radio" name="completoT" value="no"> No
                </div>
    
                <!-- Tipo de documento -->
                <div class="mb-3">
                    <label class="form-label">Tipo de Documento</label>
                    <input type="text" class="form-control" name="documento_tutor">
                </div>
    
                <!-- Número de documento -->
                <div class="mb-3">
                    <label class="form-label">Nº</label>
                    <input type="number" class="form-control" name="numero_tutor">
                </div>
    
                <!-- Si no posee documento -->
                <div class="mb-3">
                    <label class="form-label">Si no posee documento indicar:</label><br>
                    <input type="radio" name="documento_estado_tutor" value="en_tramite"> En trámite<br>
                    <input type="radio" name="documento_estado_tutor" value="no_tiene"> No tiene Doc.
                </div>
    
                <!-- Dirección -->
                <div class="mb-3"><label class="form-label">Domicilio:</label>
                    <input type="text" class="form-control" name="domicilio_tutor">
                </div>
                <div class="mb-3"><label class="form-label">Dpto</label>
                    <input type="text" class="form-control" name="departamento_tutor">
                </div>
                <div class="mb-3"><label class="form-label">Provincia</label>
                    <input type="text" class="form-control" name="entre_calles_tutor">
                </div>
                <div class="mb-3"><label class="form-label">Distrito</label>
                    <input type="text" class="form-control" name="distrito_tutor">
                </div>
                <div class="mb-3"><label class="form-label">Localidad</label>
                    <input type="text" class="form-control" name="localidad_tutor">
                </div>
                <div class="mb-3"><label class="form-label">Código Postal</label>
                    <input type="text" class="form-control" name="codigo_postal_tutor">
                </div>
                <div class="mb-3"><label class="form-label">Teléfono:</label>
                    <input type="number" class="form-control" name="telefono_tutor">
                </div>
                <div class="mb-3"><label class="form-label">Teléfono Celular:</label>
                    <input type="number" class="form-control" name="celular_tutor">
                </div>
                <div class="mb-3"><label class="form-label" for="email_padre">E-mail:</label>
                    <input type="email" class="form-control" name="email_tutor">
                </div>
    
                <div class="mb-3">
                    <label class="form-label">¿Es Jefe del Hogar?</label><br>
                    <input type="radio" name="jefe_del_hogar_tutor" value="si"> Si<br>
                    <input type="radio" name="jefe_del_hogar_tutor" value="no"> No
                </div>

                <!-- Profesión -->
                <div class="mb-3"><label class="form-label">Profesión u ocupación:</label>
                    <input type="text" class="form-control" name="profesion_tutor">
                </div>
    
                <!-- Condición de actividad -->
                <div class="mb-3">
                    <label class="form-label">Condición de Actividad:</label><br>
                        <input type="checkbox" name="ActividadT" value="solotrabaja"> Sólo trabaja<br>
                        <input type="checkbox" name="ActividadT" value="trabajayestudia"> Trabaja y Estudia<br>
                        <input type="checkbox" name="ActividadT" value="trabajayrecibepension"> Trabaja y Recibe Jubilación o Pensión<br>
                        <input type="checkbox" name="ActividadT" value="buscatrabajo"> Sólo Busca Trabajo<br>
                        <input type="checkbox" name="ActividadT" value="estudia"> Solo estudia<br>
                        <input type="checkbox" name="ActividadT" value="buscatrabajoyestudia"> Busca Trabajo y Estudia<br>
                        <input type="checkbox" name="ActividadT" value="buscatrabajoyrecibepension"> Busca Trabajo y Recibe Jubilación o Pensión<br>
                        <input type="checkbox" name="ActividadT" value="jubilado/pensionado"> Jubilado/pensionado<br>
                        <input type="checkbox" name="ActividadT" value="otro"> Otro<br>
                </div>
            </fieldset>

            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Personas Autorizadas a Retirar al Alumno del Establecimiento</legend>
                
                <!-- Primera Parte -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Persona 1 -->
                        <div class="mb-3">
                            <label class="form-label">Apellido/s</label>
                            <input type="text" class="form-control" name="apellido1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nombre/s</label>
                            <input type="text" class="form-control" name="nombre1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipo de Doc</label>
                            <input type="text" class="form-control" name="tipo_doc1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nº</label>
                            <input type="text" class="form-control" name="numero_doc1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Vínculo/Parentesco con el alumno</label>
                            <input type="text" class="form-control" name="parentesco1">
                        </div>
                    </div>
            
                    <div class="col-md-6">
                        <!-- Persona 2 -->
                        <div class="mb-3">
                            <label class="form-label">Apellido/s</label>
                            <input type="text" class="form-control" name="apellido2">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nombre/s</label>
                            <input type="text" class="form-control" name="nombre2">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipo de Doc</label>
                            <input type="text" class="form-control" name="tipo_doc2">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nº</label>
                            <input type="text" class="form-control" name="numero_doc2">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Vínculo/Parentesco con el alumno</label>
                            <input type="text" class="form-control" name="parentesco2">
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Restricciones Judiciales</legend>
                
                <div class="mb-3"><label class="form-label">Apellido/s</label>
                    <input type="text" class="form-control" name="restriccion_apellido">
                </div>

                <!-- Nombre/s -->
                <div class="mb-3"><label class="form-label">Nombre/s</label>
                    <input type="text" class="form-control" name="restriccion_nombre">
                </div>

                <!-- Nacionalidad -->
                <div class="mb-3"><label class="form-label">Tipo de Doc.</label>
                    <input type="text" class="form-control" name="restriccion_doc">
                </div>

                <div class="mb-3"><label class="form-label">Nº</label>
                    <input type="text" class="form-control" name="restriccion_n">
                </div>

                <div class="mb-3"><label class="form-label">Restricción</label>
                    <input type="text" class="form-control" name="restriccion">
                </div>
            </fieldset>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Inscribirse</button>
            </div>
        </form>
    </div>

    <!-- Incluir Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>