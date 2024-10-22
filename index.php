<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario de IESTP</title> 
</head>
<body>
    <h1>Horario de IESTP</h1>

    <!-- Selector para filtrar por docente -->
    <div style="text-align: center;">
        <label for="filter-docente">Seleccionar Docente:</label>
        <select id="filter-docente" onchange="filterSchedule()">
            <option value="all">Todos</option>
            <option value="César Sánchez">César Sánchez</option>
            <option value="Toribio Marallano">Toribio Marallano</option>
            <option value="Ricardo Sánchez">Ricardo Sánchez</option>
            <option value="Judith Quispe">Judith Quispe</option>
            <option value="Rigoberto García">Rigoberto García</option>
            <option value="Raúl Hurtado">Raúl Hurtado</option>
            <option value="Johan Carrillo">Johan Carrillo</option>
        </select>
    </div>
    <div style="text-align: center;">
        <label for="filter-ciclo">Seleccionar Ciclo:</label>
        <select id="filter-ciclo" onchange="filterSchedule()">
            <option value="all">Todos</option>
            <option value="II">II</option>
            <option value="III">III</option>
            <option value="IV">IV</option>
            <option value="V">V</option>
            <option value="VI">VI</option>
        </select>
    </div>
    <!-- Contenedor de horarios por día -->
    <div class="container">

        <!-- Horario del Lunes -->
        <div class="day-schedule" id="lunes">
            <h3>Lunes</h3>
            <table>
                <thead>
                    <tr>
                        <th>Hora</th>
                        <th>Curso</th>
                        <th>Docente</th>
                        <th>Ciclo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>8:00-8:45</td>
                        <td>Seguridad y Automatización de Redes</td>
                        <td>César Sánchez</td>
                        <td>II</td>
                    </tr>
                    <tr>
                        <td>8:45-9:30</td>
                        <td>Comunicación y Gestión de Redes de Comunicación</td>
                        <td>César Sánchez</td>
                        <td>III</td>
                    </tr>
                    <tr>
                        <td>9:30-10:15</td>
                        <td>Inglés para la Comunicación Oral</td>
                        <td>Toribio Marallano</td>
                        <td>IV</td>
                    </tr>
                    <tr>
                        <td>10:15-11:00</td>
                        <td>Inglés para la Comunicación Oral</td>
                        <td>Toribio Marallano</td>
                        <td>IV</td>
                    </tr>
                    <tr>
                        <td>11:00-11:45</td>
                        <td>Fundamentos de Desarrollo Web</td>
                        <td>César Sánchez</td>
                        <td>VI</td>
                    </tr>
                    <tr>
                        <td>11:45-12:30</td>
                        <td>Innovación Tecnológica</td>
                        <td>Rigoberto García</td>
                        <td>VI</td>
                    </tr>
                    <tr>
                        <td>12:30-1:15</td>
                        <td>Innovación Tecnológica</td>
                        <td>Rigoberto García</td>
                        <td>VI</td>
                    </tr>
                    <tr>
                        <td>1:15-2:00</td>
                        <td>Reparación de Equipos Informáticos</td>
                        <td>Judith Quispe</td>
                        <td>V</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Horario del Martes -->
        <div class="day-schedule" id="martes">
            <h3>Martes</h3>
            <table>
                <thead>
                    <tr>
                        <th>Hora</th>
                        <th>Curso</th>
                        <th>Docente</th>
                        <th>Ciclo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>8:00-8:45</td>
                        <td>Instalación y Configuración de Redes</td>
                        <td>Ricardo Sánchez</td>
                        <td>II</td>
                    </tr>
                    <tr>
                        <td>8:45-9:30</td>
                        <td>Comunicación y Gestión de Redes de Comunicación</td>
                        <td>César Sánchez</td>
                        <td>III</td>
                    </tr>
                    <tr>
                        <td>9:30-10:15</td>
                        <td>Ofimática</td>
                        <td>Johan Carrillo</td>
                        <td>IV</td>
                    </tr>
                    <tr>
                        <td>10:15-11:00</td>
                        <td>Ofimática</td>
                        <td>Johan Carrillo</td>
                        <td>IV</td>
                    </tr>
                    <tr>
                        <td>11:00-11:45</td>
                        <td>Desarrollo de Aplicaciones</td>
                        <td>Judith Quispe</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>11:45-12:30</td>
                        <td>Desarrollo de Aplicaciones</td>
                        <td>Judith Quispe</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>12:30-1:15</td>
                        <td>Arquitectura y Programación Web</td>
                        <td>César Sánchez</td>
                        <td>VI</td>
                    </tr>
                    <tr>
                        <td>1:15-2:00</td>
                        <td>Arquitectura y Programación Web</td>
                        <td>César Sánchez</td>
                        <td>VI</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Horario del Miércoles -->
        <div class="day-schedule" id="miercoles">
            <h3>Miércoles</h3>
            <table>
                <thead>
                    <tr>
                        <th>Hora</th>
                        <th>Curso</th>
                        <th>Docente</th>
                        <th>Ciclo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>8:00-8:45</td>
                        <td>Interpretación de Textos</td>
                        <td>Raúl Hurtado</td>
                        <td>II</td>
                    </tr>
                    <tr>
                        <td>8:45-9:30</td>
                        <td>Interpretación de Textos</td>
                        <td>Raúl Hurtado</td>
                        <td>II</td>
                    </tr>
                    <tr>
                        <td>9:30-10:15</td>
                        <td>Instalación y Configuración de Redes</td>
                        <td>Ricardo Sánchez</td>
                        <td>II</td>
                    </tr>
                    <tr>
                        <td>10:15-11:00</td>
                        <td>Instalación y Configuración de Redes</td>
                        <td>Ricardo Sánchez</td>
                        <td>II</td>
                    </tr>
                    <tr>
                        <td>11:00-11:45</td>
                        <td>Desarrollo de Aplicaciones</td>
                        <td>Judith Quispe</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>11:45-12:30</td>
                        <td>Desarrollo de Aplicaciones</td>
                        <td>Judith Quispe</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>12:30-1:15</td>
                        <td>Desarrollo Multimedia</td>
                        <td>Judith Quispe</td>
                        <td>VI</td>
                    </tr>
                    <tr>
                        <td>1:15-2:00</td>
                        <td>Desarrollo Multimedia</td>
                        <td>Judith Quispe</td>
                        <td>VI</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Horario del Jueves -->
        <div class="day-schedule" id="jueves">
            <h3>Jueves</h3>
            <table>
                <thead>
                    <tr>
                        <th>Hora</th>
                        <th>Curso</th>
                        <th>Docente</th>
                        <th>Ciclo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>8:00-8:45</td>
                        <td>Inglés para la Comunicación Oral</td>
                        <td>Toribio Marallano</td>
                        <td>IV</td>
                    </tr>
                    <tr>
                        <td>8:45-9:30</td>
                        <td>Comunicación y Gestión de Redes de Comunicación</td>
                        <td>César Sánchez</td>
                        <td>III</td>
                    </tr>
                    <tr>
                        <td>9:30-10:15</td>
                        <td>Reparación de Equipos Informáticos</td>
                        <td>Judith Quispe</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>10:15-11:00</td>
                        <td>Reparación de Equipos Informáticos</td>
                        <td>Judith Quispe</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>11:00-11:45</td>
                        <td>Desarrollo de Aplicaciones</td>
                        <td>Judith Quispe</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>11:45-12:30</td>
                        <td>Desarrollo Multimedia</td>
                        <td>Judith Quispe</td>
                        <td>VI</td>
                    </tr>
                    <tr>
                        <td>12:30-1:15</td>
                        <td>Desarrollo Multimedia</td>
                        <td>Judith Quispe</td>
                        <td>VI</td>
                    </tr>
                    <tr>
                        <td>1:15-2:00</td>
                        <td>Arquitectura y Programación Web</td>
                        <td>César Sánchez</td>
                        <td>VI</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Horario del Viernes -->
        <div class="day-schedule" id="viernes">
            <h3>Viernes</h3>
            <table>
                <thead>
                    <tr>
                        <th>Hora</th>
                        <th>Curso</th>
                        <th>Docente</th>
                        <th>Ciclo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>8:00-8:45</td>
                        <td>Instalación y Configuración de Redes</td>
                        <td>Ricardo Sánchez</td>
                        <td>II</td>
                    </tr>
                    <tr>
                        <td>8:45-9:30</td>
                        <td>Inglés para la Comunicación Oral</td>
                        <td>Toribio Marallano</td>
                        <td>IV</td>
                    </tr>
                    <tr>
                        <td>9:30-10:15</td>
                        <td>Fundamentos de Desarrollo Web</td>
                        <td>César Sánchez</td>
                        <td>VI</td>
                    </tr>
                    <tr>
                        <td>10:15-11:00</td>
                        <td>Fundamentos de Desarrollo Web</td>
                        <td>César Sánchez</td>
                        <td>VI</td>
                    </tr>
                    <tr>
                        <td>11:00-11:45</td>
                        <td>Desarrollo de Aplicaciones</td>
                        <td>Judith Quispe</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>11:45-12:30</td>
                        <td>Desarrollo de Aplicaciones</td>
                        <td>Judith Quispe</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>12:30-1:15</td>
                        <td>Desarrollo Multimedia</td>
                        <td>Judith Quispe</td>
                        <td>VI</td>
                    </tr>
                    <tr>
                        <td>1:15-2:00</td>
                        <td>Desarrollo Multimedia</td>
                        <td>Judith Quispe</td>
                        <td>VI</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <script>
        function filterSchedule() {
            var selectedDocente = document.getElementById("filter-docente").value;
            var tables = document.querySelectorAll("tbody");
            tables.forEach(function(table) {
                table.querySelectorAll("tr").forEach(function(row) {
                    var docente = row.cells[2].textContent;
                    if (selectedDocente === "all" || docente === selectedDocente) {
                        row.style.display = ""; // Mostrar la fila
                    } else {
                        row.style.display = "none"; // Ocultar la fila
                    }
                });
            });
        }
    </script>
</body>
</html>
