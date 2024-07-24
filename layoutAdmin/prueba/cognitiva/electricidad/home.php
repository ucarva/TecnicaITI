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
    <style>
        .btn-fixed-width {
            min-width: 150px;
            /* Ancho mínimo para todos los botones */
        }
    </style>
</head>


<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../../../../index.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <!--Titulo del formulario-->
                                    <h3 class="text-center font-weight-light my-4 ">
                                        PRUEBA ELECTRICIDAD
                                    </h3>
                                </div>
                                <div class="card-body">                                 
                                    <!--Formulario para ingresar preguntas-->
                                    <form action="#" method="post">                                    
                                        <div class="mb-3">
                                            <label class="form-label">1. ¿Primera Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta1a" name="respuesta1" value="A" required>
                                                <label for="respuesta1a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta1b" name="respuesta1" value="B">
                                                <label for="respuesta1b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta1c" name="respuesta1" value="C">
                                                <label for="respuesta1c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta1d" name="respuesta1" value="D">
                                                <label for="respuesta1d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">2. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">3. ¿Tercera Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta3a" name="respuesta3" value="A" required>
                                                <label for="respuesta3a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta3b" name="respuesta3" value="B">
                                                <label for="respuesta3b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta3c" name="respuesta3" value="C">
                                                <label for="respuesta3c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta3d" name="respuesta3" value="D">
                                                <label for="respuesta3d">D) Variable</label>
                                            </div>
                                        </div>  
                                        <div class="mb-3">
                                            <label class="form-label">4. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div> 
                                        <div class="mb-3">
                                            <label class="form-label">5. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div> 
                                        <div class="mb-3">
                                            <label class="form-label">6. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">7. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">8. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">9. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">10. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">11. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">12. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">13. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">14. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">15. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">16. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">17. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">18. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">19. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">20. ¿Segunda Pregunta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Positiva</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Negativa</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Neutra</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Variable</label>
                                            </div>
                                        </div>                                  
                                        <!-- Agregar más preguntas con el mismo formato -->                                        
                                        <div class="modal-footer justify-content-center ">
                                            <input class="btn btn-success " type="submit"  value="Enviar"  >
                                        </div>
                                    </form>
                                    <!-- Fin Formulario -->
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