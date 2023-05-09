<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>index</title>    
  </head>
  <body>
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col d-none d-lg-block" id="si" >
                <div class="frame">
                    <div class="group">
                        <span style="--i:1;" class="span-l"></span>
                        <span style="--i:2;" class="span-r"></span>
                    </div>
                    <div class="group">
                        <span style="--i:3;" class="span-l"></span>
                        <span style="--i:4;" class="span-r"></span>
                    </div>
                    <div class="group">
                        <span style="--i:5;" class="span-l"></span>
                        <span style="--i:6;" class="span-r"></span>
                    </div>
                </div>

                    <svg>
                        <filter id="gooey">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="25" />
                                <feColorMatrix values="
                                    1 0 0 0 0
                                    0 1 0 0 0
                                    0 0 1 0 0
                                    0 0 0 90 -25" />
                        </filter>
                    </svg>
            
                </div>
        <div class="col">
            <h1 class="text-center">Login</h1>
            <form class="p-4" action="parametros.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" id="username" name="user">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="pass">
                </div>
                <button type="submit" class="btn" style="background-color: #20c997">Iniciar sesión</button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>