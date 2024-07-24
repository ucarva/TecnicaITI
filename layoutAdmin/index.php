
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Técnico Industrial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../Index.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <!--Formulario-->
                                        <h3 id="pruebaTecnica" class="text-center font-weight-light my-4 "  >
                                            PRUEBA TÉCNICA
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="container card-body">
                                            <div class="table-responsive">
                                                <table id="tablacolmenas" class="table table-bordered table-hover">
                                                    <tbody class="text-center align-middle">
                                                       
                                                        <tr>
                                                            <td>
                                                                <form action='./prueba/cognitiva.php' method='get'>
                                                                    <button class='btn btn-success btn-lg btn-block' type='submit' >Prueba
                                                                        Cognitiva</button>
                                                                  
                                                                </form>
                                                            </td>

                                                            <td>
                                                                <form action='./prueba/vocacional/home.php' method='get'>
                                                                    <button class='btn btn-success btn-lg btn-block' type='submit' >Prueba
                                                                        Vocacional</button>
                                                                    
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action='./prueba/especialidad/home.php' method='get'>
                                                                    <button class='btn btn-success btn-lg btn-block' type='submit' >Selección Especialidad</button>
                                                                 
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <!-- Otras filas según sea necesario -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>