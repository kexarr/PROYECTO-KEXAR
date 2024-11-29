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
        <form action="salud.php" method="POST">
            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Información de Salud</legend>
                
                <!-- Obra Social -->
                <div class="mb-3"><label class="form-label">Obra Social</label>
                    <input type="text" class="form-control" name="salud_obrasocial">
                </div>
                <div class="mb-3"><label class="form-label">Nº Afiliado</label>
                    <input type="text" class="form-control" name="afiliado_obrasocial">
                </div>
            </fieldset>

            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Antecedentes de Enfermedad</legend>
                
                <!-- Antecedentes de Enfermedad -->
                <div class="mb-3"><label class="form-label">¿Tiene alguna enfermedad que requiera periódicamente tratamiento o control médico?</label><br>
                    <input type="radio" name="tratamiento_enfermedad" value="si"> Si<br>
                    <input type="radio" name="tratamiento_enfermedad" value="no"> No<br>
                    <label class="form-label">¿Cuál?</label>
                    <input type="text" class="form-control" name="cual"> 
                </div>
                <br>
                <div class="mb-3"><label class="form-label">Durante los últimos tres años ¿fue internado alguna vez?</label><br>
                    <input type="radio" name="fueinternado" value="si"> Si<br>
                    <input type="radio" name="fueinternado" value="no"> No<br>
                    <label class="form-label">¿Por qué?</label>
                    <input type="text" class="form-control" name="cual2"> 
                </div>
            </fieldset>

            <fieldset class="fieldset-custom">
                <legend class="legend-custom">¿Tiene algún tipo de Alergia?</legend>
                    <input type="radio" name="alergia" value="si"> Si<br>
                    <input type="radio" name="alergia" value="no"> No<br>

                    <div class="mb-3"><label class="form-label">En caso afirmativo, describa sus manifestaciones</label>
                        <input type="text" class="form-control" name="manifestaciones">
                    </div>

                    <div class="mb-3"><label class="form-label">La alergia se debe a</label>
                        <input type="text" class="form-control" name="alergiasedebe">
                        <input type="checkbox" name="anosabe" value="nosabe"> No sabe<br><br>
                        <label class="form-label">¿Recibe tratamiento permanente?</label><br>
                        <input type="radio" name="tratamiento_permanente" value="si"> Si<br>
                        <input type="radio" name="tratamiento_permanente" value="no"> No<br>
                    </div>         
            </fieldset>

            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Tratamientos</legend>
                    <div class="mb-3"><label class="form-label">¿Recibe tratamiento médico?</label><br>
                    <input type="radio" name="tratamiento_medico" value="si"> Si<br>
                    <input type="radio" name="tratamiento_medico" value="no"> No<br>
                    <label class="form-label">Especifique</label>
                    <input type="text" class="form-control" name="especifique">
                    </div>

                    <div class="mb-3"><label class="form-label">Quirúrgicos</label><br>
                        <input type="radio" name="quirurgico" value="si"> Si<br>
                        <input type="radio" name="quirurgico" value="no"> No<br>
                        <label class="form-label">Edad</label>
                        <input type="text" class="form-control" name="edad_tratamiento">
                        <label class="form-label">Tipo de cirugía</label>
                        <input type="text" class="form-control" name="tipodecirugia">
                        </div>
                    
                    <div class="mb-3"><label class="form-label">¿Presenta alguna limitación física?</label><br>
                        <input type="radio" name="limitacion_fisica" value="si"> Si<br>
                        <input type="radio" name="limitacion_fisica" value="no"> No<br>
                        <label class="form-label">Aclaracíon</label>
                        <input type="text" class="form-control" name="aclaracion_fisica">
                        </div>
                        
                    <div class="mb-3"><label class="form-label">¿Otros problemas de salud?</label><br>
                        <input type="text" class="form-control" name="otro_problema_salud">
                        </div>
            </fieldset>

            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Vacunas Obligatorias (NO LLENAR LOS PADRES)</legend>
                    <div class="mb-3"><label>De acuerdo a su cumplimiento tomando en cuenta el Calendario de Vacunación y la Guía de Salud Nº 2</label>
                        <input type="checkbox" name="vacunacion_obligatoria" value="completa"> Vacunacion Completa<br>
                        <input type="checkbox" name="vacunacion_obligatoria" value="incompleta"> Incompleta<br>
                        <input type="checkbox" name="vacunacion_obligatoria" value="sin-datos"> Sin Datos<br>
                        </div>
            </fieldset>

            <fieldset class="fieldset-custom">
                <legend class="legend-custom">DETERMINACION DE (NO LLENAR LOS PADRES)</legend>
                    <div class="mb-3"><label class="form-label">DETERMINACIÓN DE Talla (en centímetros):</label>
                             <input type="text" class="form-control" name="tallacm">

                        <label class="form-label">Peso (Kgrs. con 1 décimo):</label>
                             <input type="text" class="form-control" name="pesokg">

                        <label class="form-label">Fecha de la determinación:</label>
                             <input type="date" class="form-control" name="fecha_determinacion">
                        </div>
            </fieldset>

            <fieldset class="fieldset-custom">
                <legend class="legend-custom">Si el alumno tiene algun problema de salud en la escuela</legend>
                <div class="field-row">
                    <div class="field-group">
                        <h5>RECURRIR A</h5>
                        <label class="form-label">Institución</label>
                        <input type="text" class="form-control" name="salud_institucion">

                        <label class="form-label">Domicilio</label>
                        <input type="text" class="form-control" name="salud_domicilio">

                        <label class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="salud_telefono">
                    </div>

                    <br><br>

                    <div class="field-group">
                        <h5>MEDICO</h5>
                        <label class="form-label">Apellido/s</label>
                        <input type="text" class="form-control" name="medico_apellido">
                    </div>
                    <div class="field-group">
                        <label class="form-label">Nombre/s</label>
                        <input type="text" class="form-control" name="medico_nombre">
                    </div>
                    <div class="field-group">
                        <label class="form-label">Domicilio</label>
                        <input type="text" class="form-control" name="medico_domicilio">
                    </div>
                    <div class="field-group">
                        <label class="form-label">Teléfono</label>
                        <input type="text" class="form-control" name="medico_telefono">
                    </div>

                    <br><br>

                    <div class="field-group">
                        <h5>FAMILIAR</h5>
                        <label class="form-label">Apellido/s</label>
                        <input type="text" class="form-control" name="familiar_apellido">
                    </div>
                    <div class="field-group">
                        <label class="form-label">Nombre/s</label>
                        <input type="text" class="form-control" name="familiar_nombre">
                    </div>
                    <div class="field-group">
                        <label class="form-label">Domicilio</label>
                        <input type="text" class="form-control" name="familiar_domicilio">
                    </div>
                    <div class="field-group">
                        <label class="form-label">Teléfono</label>
                        <input type="text" class="form-control" name="familiar_telefono">
                    </div>
                </div>
                </fieldset>

                <fieldset class="fieldset-custom">
                    <legend class="legend-custom">Actualizaciones</legend>
                    <div class="mb-3">
                    <label for="cambios-salud">Describa los cambios de salud del alumno:</label>
                    <input type="text" class="form-control" name="cambios_salud">
                </div>
                <div class="field-group">
                    <label for="fecha-restriccion">Fecha:</label>
                    <input type="date" class="form-control" name="fecha_restriccion">
                </div>
                <div class="field-group"><label class="form-label">Anual</label><br>
                        <input type="radio" name="actualizacion_anual" value="si"> Si<br>
                        <input type="radio" name="actualizacion_anual" value="no"> No<br>
                </div>
                <div class="field-group"><label class="form-label">¿Hay cambios?</label><br>
                    <input type="radio" name="haycambios" value="si"> Si<br>
                    <input type="radio" name="haycambios" value="no"> No<br>
                </div>
                </fieldset>
                
                <fieldset class="fieldset-custom">
                    <legend class="legend-custom">Registro Unico de Beneficiario SAE</legend>
                    <label>Solicito la inclusión de mi hijo/a o tutelado/a en el siguiente Servicio Alimentario</label><br>
                    <input type="checkbox" name="beneficio_comedor" value="comedor"> Comedor<br>
                    <input type="checkbox" name="beneficio_comedor" value="desayuno/merienda"> DMC: Desayuno / Merienda Completa<br>
                    <input type="checkbox" name="beneficio_comedor" value="simple"> Simple<br>
                    <input type="checkbox" name="beneficio_comedor" value="doble"> Doble<br>
                    <input type="checkbox" name="beneficio_comedor" value="completa"> Completa<br>
                </fieldset>

                <fieldset class="fieldset-custom">
                <div class="section">
                    <div class="field-group">
                        <label>La totalidad de los datos e información suministrada por quien suscribe la presente tiene carácter de Declaración Jurada.</label>
                    </div>
                    <div class="field-group">
                        <label>El abajo firmante se compromete a comunicar al establecimiento cualquier modificación de los datos suministrados en forma inmediata y de manera fehaciente.</label>
                    </div>
                    <br>
                    <div class="field-row">
                        <div class="field-group">
                            <label for="fecha-inscripcion">Fecha de Inscripción:</label>
                            <input type="date" class="form-control" name="fecha-inscripcion">
                        </div>
                        <br>
                        <div class="field-group">
                            <label for="firma-responsable">Firma del responsable</label>
                            <input type="text" class="form-control" name="firma-responsable">
                        </div>
                        <br>
                        <div class="field-group">
                            <label for="aclaracion-firma">Aclaración</label>
                            <input type="text" class="form-control" name="aclaracion-firma">
                        </div>
                        <br>
                        <div class="field-group">
                            <label for="firma-director">Firma del Director</label>
                            <input type="text" class="form-control" name="firma-director">
                        </div>
                    </div>
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
