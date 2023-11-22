<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iCar Plus</title>
    <link rel="stylesheet" href="assets/css/Registro.css">
    <link rel="icon" href="assets/img/Logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg rounded" aria-label="Thirteenth navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                <img src="assets/img/Logo.png" alt="" height="80" width="80">  
                <a class="navbar-brand col-lg-3 me-0" href="index.php">iCar Plus</a>
                <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-current="page" href="#">Registro</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Registro_Cliente.php">Clientes</a></li>
                                <li><a class="dropdown-item" href="#">Empleados</a></li>
                            </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Inventario</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="">Reparaciones</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Reportes</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Respuestos</a></li>
                            <li><a class="dropdown-item" href="#">Carro de Clientes</a></li>
                            <li><a class="dropdown-item" href="#">Empleados</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center " id="Overflow">
            <h1>REGISTRO DE NUEVO CLIENTE</h1>
            <form class="" action="">
                <div class="row" id="Formulario">
                    <div class="col-lg-6">
                        <div class="form-floating" bis_skin_checked="1">
                            <input type="text" class="form-control" id="Nombre" placeholder="" value required>
                            <label for="Nombre">Nombre</label>
                        </div>
                        <div class="form-floating" bis_skin_checked="1">
                            <input type="text" class="form-control" id="Nombre" placeholder="" value required>
                            <label for="Nombre">Apellido</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-floating" bis_skin_checked="1">
                            <input type="number" class="form-control" id="Nombre" placeholder="" value required>
                            <label for="Nombre">Numero Telefonico</label>
                        </div>
                        <div class="form-floating" bis_skin_checked="1">
                            <input type="email" class="form-control" id="Correo" placeholder="name@example.com" value required>
                            <label for="Correo">Correo Electronico</label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Enviar</button>
            </form>
        </div>
    </main>
    <footer class="d-flex flex-wrap align-items-center">
      <img src="assets/img/Logo.png" alt="" width="50px" height="50px">
      <h3>©iCar Plus 2023</h3>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>