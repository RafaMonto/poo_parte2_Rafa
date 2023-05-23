<!-- Modal nuevo registro -->
<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="nuevoModalLabel">Agregar registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                    require 'parametros.php';
                    $conn = mysqli_connect("localhost", "root", "", "construct");
                    if("SELECT * FROM carros WHERE Placa='$placa'"){

                    $sql = "SELECT * FROM carros WHERE Placa='$placa'";

                    // Seleccionar los datos
                    $result = mysqli_query($conn,$sql);

                    // Crear la tabla
                    echo "<table class='table table-striped'>";
                    echo "<tr><th>Marca</th><th>Modelo</th><th>Año</th><th>Color</th><th>Numero puertas</th><th>Tipo carroceria</th><th>Transmision</th><th>Combustible</th><th>Kilometraje</th><th>Capacidad pasajeros</th><th>Capacidad carga</th><th>Sistema frenos</th><th>Equipamneto seguridad</th><th>Placa</th><th>Potencia</th><th>Precio</th></tr>";

                    // Mostrar los datos
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["Marca"] . "</td><td>" . $row["Modelo"] . "</td><td>" . $row["Año"] . "</td><td>" . $row["Color"] . "</td><td>" . $row["Numero_Puertas"] . "</td><td>" . $row["Tipo_Carroceria"] . "</td><td>" . $row["Transmision"] . "</td><td>" . $row["Combustible"] . "</td><td>" . $row["Kilometraje"] . "</td><td>" . $row["Capacidad_Pasajeros"] . "</td><td>" . $row["Capacidad_Carga"] . "</td><td>" . $row["Sistema_Frenos"] . "</td><td>" . $row["Equipamento_Seguridad"] . "</td><td>" . $row["Placa"] . "</td><td>" . $row["Potencia"] . "</td><td>" . $row["Frenos"] . "</td></tr>";
                    }

                    echo "</table>";
                    }
                ?>
            </div>

        </div>
    </div>
</div>