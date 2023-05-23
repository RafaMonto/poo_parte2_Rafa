<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
    <style>
        body {
          background-image: url('https://cdn.motor1.com/images/mgl/P33WYL/s1/ferrari-sp48-unica.webp');
          background-size: cover;
          background-opacity: 0.8;
        }
        .form-container {
          max-width: 500px;
          margin: 10px auto;
          padding: 30px;
          box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
          background-color: white;
          border-radius: 20px;
        }
        .btn-red {
          background-color: red;
          border-radius: 10px;
        }

        .custom-row{
          height: 50px;
          text-align: center;
        }

        .log-out{
          color: white;
          padding-bottom: 20px;
        }
  </style>
  </head>
  <body>
      <div class="container-fluid">
          <div class="row log-out">
              <h1>LOG-OUT</h1>
              <form action="./config/parametros.php" method="post">
                  <input type="hidden" class="btn btn-primary"  name="user" value="<?php echo $_GET['user']?>"></input>
                  <input type="hidden" class="btn btn-primary"  name="pass" value="<?php echo $_GET['pass']?>"></input>
                  <input type="submit" class="btn btn-primary"  name="close" value="Cerrar Sesion"></input>
              </form>
          </div>
          <div class="row custom-row">
              <h1 class="">Motor Experiences</h1>
          </div>
          <div class="row">
              <div class="form-container overflow-auto" style="height: 500px">
                  <h2 class="mb-4">Formulario de Carro</h2>
                  <form action="./config/parametros.php" method="post">
                      <div class="mb-3">
                          <label for="marca" class="form-label">Marca</label>
                          <input type="text" class="form-control" id="marca" name="marca" required>
                      </div>
                      <div class="mb-3">
                          <label for="modelo" class="form-label">Modelo</label>
                          <input type="text" class="form-control" id="modelo" name="modelo" required>
                      </div>
                      <div class="mb-3">
                          <label for="año" class="form-label">Año</label>
                          <input type="number" class="form-control" id="año"name="año" required>
                      </div>
                      <div class="mb-3">
                          <label for="color" class="form-label">Color</label>
                          <input type="text" class="form-control" id="color" name="color" requierd>
                      </div>
                      <div class="mb-3">
                          <label for="npuertas" class="form-label">Número de puertas</label>
                          <input type="number" class="form-control" id="npuertas" name="npuertas" required>
                      </div>
                      <div class="mb-3">
                          <label for="carroceria" class="form-label">Tipo de carrocería</label>
                          <input type="text" class="form-control" id="carroceria" name="carroceria" required>
                      </div>
                      <div class="mb-3">
                          <label for="transmi" class="form-label">Transmisión</label>
                          <input type="text" class="form-control" id="transmi" name="transmi" required>
                      </div>
                      <div class="mb-3">
                          <label for="combus" class="form-label">Combustible</label>
                          <input type="text" class="form-control" id="combus" name="combus" required>
                      </div>
                      <div class="mb-3">
                          <label for="kilo" class="form-label">Kilometraje</label>
                          <input type="text" class="form-control" id="kilo" name="kilo" required>
                      </div>
                      <div class="mb-3">
                          <label for="cpasa" class="form-label">Capacidad pasajeros</label>
                          <input type="number" class="form-control" id="cpasa" name="cpasa" required>
                      </div>
                      <div class="mb-3">
                          <label for="carga" class="form-label">Capacidad de carga</label>
                          <input type="text" class="form-control" id="carga" name="carga" required>
                      </div>
                      <div class="mb-3">
                          <label for="frenos" class="form-label">Sistema de frenos</label>
                          <input type="text" class="form-control" id="frenos" name="frenos" required>
                      </div>
                      <div class="mb-3">
                          <label for="segu" class="form-label">Equipamento de seguridad</label>
                          <input type="text" class="form-control" id="segu" name="segu" required>
                      </div>
                      <div class="mb-3">
                          <label for="placa" class="form-label">Placa</label>
                          <input type="text" class="form-control" id="placa" name="placa" required>
                      </div>
                      <div class="mb-3">
                          <label for="potencia" class="form-label">Potencia</label>
                          <input type="text" class="form-control" id="potencia" name="potencia" required>
                      </div>
                      <div class="mb-3">
                          <label for="precio" class="form-label">Precio</label>
                          <input type="text" class="form-control" id="precio" name="precio" required>
                      </div>
                      <button type="submit" class="btn btn-red" name="regis"><a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal">Agregar</a></button>
                  </form>
              </div>
          </div>
          <?php
          require 'modal.php'; 
          ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </div>
  </body>
</html>