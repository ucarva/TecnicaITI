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
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
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
                                        PRUEBA MOTORES
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <!--Formulario para ingresar preguntas-->
                                    <form action="#" method="post">
                                        <!-- Preguntas -->
                                        <div class="mb-3">
                                            <label class="form-label">1. ¿Qué es un alternador en un vehículo?</label>
                                            <div>
                                                <input type="radio" id="respuesta1a" name="respuesta1" value="A"
                                                    required>
                                                <label for="respuesta1a">A) Genera la chispa para la
                                                    combustión </label><br>
                                                <input type="radio" id="respuesta1b" name="respuesta1" value="B">
                                                <label for="respuesta1b">B) Produce electricidad para cargar la
                                                    batería</label><br>
                                                <input type="radio" id="respuesta1c" name="respuesta1" value="C">
                                                <label for="respuesta1c">C) Regula la temperatura del motor</label><br>
                                                <input type="radio" id="respuesta1d" name="respuesta1" value="D">
                                                <label for="respuesta1d">D) Controla la presión de los neumáticos</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">2. En un automóvil ¿Cuál dispositivo es el que
                                                transforma la energía química y la energía mecánica?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A)La dirección</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B)La transmisión</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)El motor</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) El Filtro de aire en el cual Permite el
                                                    ingreso directo del aire al motor</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">3. ¿Para qué se utiliza un gato hidráulico en
                                                un taller de automotriz?</label>
                                            <div>
                                                <input type="radio" id="respuesta3a" name="respuesta3" value="A"
                                                    required>
                                                <label for="respuesta3a">A)Para limpiar el motor </label><br>
                                                <input type="radio" id="respuesta3b" name="respuesta3" value="B">
                                                <label for="respuesta3b">B)Para levantar el vehículo</label><br>
                                                <input type="radio" id="respuesta3c" name="respuesta3" value="C">
                                                <label for="respuesta3c">C)Para cambiar el aceite </label><br>
                                                <input type="radio" id="respuesta3d" name="respuesta3" value="D">
                                                <label for="respuesta3d">D) Para medir la presión de los neumáticos</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">4. ¿Qué función cumple el filtro de aire en un
                                                motor?</label>
                                            <div>
                                                <input type="radio" id="respuesta4a" name="respuesta4" value="A"
                                                    required>
                                                <label for="respuesta4a">A) Regula la presión del aceite</label><br>
                                                <input type="radio" id="respuesta4b" name="respuesta4" value="B">
                                                <label for="respuesta4b">B) Limpia el aire antes de ingresar al
                                                    motor</label><br>
                                                <input type="radio" id="respuesta4c" name="respuesta4" value="C">
                                                <label for="respuesta4c">C) Controla la temperatura del motor</label><br>
                                                <input type="radio" id="respuesta4d" name="respuesta4" value="D">
                                                <label for="respuesta4d">D) Genera la chispa de ignición</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">5. ¿Qué es el líquido refrigerante en un
                                                vehículo?</label>
                                            <div>
                                                <input type="radio" id="respuesta5a" name="respuesta5" value="A"
                                                    required>
                                                <label for="respuesta5a">A) Aceite que lubrica el motor</label><br>
                                                <input type="radio" id="respuesta5b" name="respuesta5" value="B">
                                                <label for="respuesta5b">B) Fluido que enfría el motor</label><br>
                                                <input type="radio" id="respuesta5c" name="respuesta5" value="C">
                                                <label for="respuesta5c">C) Gasolina que alimenta el motor</label><br>
                                                <input type="radio" id="respuesta5d" name="respuesta5" value="D">
                                                <label for="respuesta5d">D) Agua para limpiar el motor</label>
                                            </div>
                                        </div>
                                        <!-- Segunda sección de preguntas -->
                                        <div class="mb-3">
                                            <label class="form-label">6. ¿Cuál es la función de las bujías en un motor
                                                de gasolina?</label>
                                            <div>
                                                <input type="radio" id="respuesta6a" name="respuesta6" value="A"
                                                    required>
                                                <label for="respuesta6a">A) Filtrar el aire</label><br>
                                                <input type="radio" id="respuesta6b" name="respuesta6" value="B">
                                                <label for="respuesta6b">B) Generar la chispa para la combustión</label><br>
                                                <input type="radio" id="respuesta6c" name="respuesta6" value="C">
                                                <label for="respuesta6c">C) Regular la temperatura del motor</label><br>
                                                <input type="radio" id="respuesta6d" name="respuesta6" value="D">
                                                <label for="respuesta6d">D) Controlar la presión de los neumáticos</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">7. ¿Qué función cumple la caja de cambios en
                                                un vehículo?</label>
                                            <div>
                                                <input type="radio" id="respuesta7a" name="respuesta7" value="A"
                                                    required>
                                                <label for="respuesta7a">A) Enfriar el motor</label><br>
                                                <input type="radio" id="respuesta7b" name="respuesta7" value="B">
                                                <label for="respuesta7b">B) Distribuir el aceite por el motor</label><br>
                                                <input type="radio" id="respuesta7c" name="respuesta7" value="C">
                                                <label for="respuesta7c">C) Cambiar la dirección</label><br>
                                                <input type="radio" id="respuesta7d" name="respuesta7" value="D">
                                                <label for="respuesta7d">D) Cambiar la relación de marchas</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">8. ¿Cuál es la función del sistema de
                                                suspensión?</label>
                                            <div>
                                                <input type="radio" id="respuesta8a" name="respuesta8" value="A"
                                                    required>
                                                <label for="respuesta8a">A) Regular la temperatura del motor</label><br>
                                                <input type="radio" id="respuesta8b" name="respuesta8" value="B">
                                                <label for="respuesta8b">B) Proteger el chasis del vehículo</label><br>
                                                <input type="radio" id="respuesta8c" name="respuesta8" value="C">
                                                <label for="respuesta8c">C) Proporcionar confort y estabilidad al
                                                    vehículo</label><br>
                                                <input type="radio" id="respuesta8d" name="respuesta8" value="D">
                                                <label for="respuesta8d">D) Controlar la presión de los neumáticos</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">9. ¿Qué es el sistema de dirección de un
                                                vehículo?</label>
                                            <div>
                                                <input type="radio" id="respuesta9a" name="respuesta9" value="A"
                                                    required>
                                                <label for="respuesta9a">A) El filtro de aire</label><br>
                                                <input type="radio" id="respuesta9b" name="respuesta9" value="B">
                                                <label for="respuesta9b">B) El control de frenos</label><br>
                                                <input type="radio" id="respuesta9c" name="respuesta9" value="C">
                                                <label for="respuesta9c">C) El volante y los mecanismos que permiten
                                                    dirigir el vehículo</label><br>
                                                <input type="radio" id="respuesta9d" name="respuesta9" value="D">
                                                <label for="respuesta9d">D) La transmisión de potencia al motor</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">10. ¿Qué función cumple el sistema de frenos
                                                en un vehículo?</label>
                                            <div>
                                                <input type="radio" id="respuesta10a" name="respuesta10" value="A"
                                                    required>
                                                <label for="respuesta10a">A) Detener el vehículo</label><br>
                                                <input type="radio" id="respuesta10b" name="respuesta10" value="B">
                                                <label for="respuesta10b">B) Distribuir el aceite por el motor</label><br>
                                                <input type="radio" id="respuesta10c" name="respuesta10" value="C">
                                                <label for="respuesta10c">C) Cambiar la relación de marchas</label><br>
                                                <input type="radio" id="respuesta10d" name="respuesta10" value="D">
                                                <label for="respuesta10d">D) Controlar la presión de los neumáticos</label>
                                            </div>
                                        </div>
                                        <!-- Tercera sección de preguntas -->
                                        <div class="mb-3">
                                            <label class="form-label">11. ¿Qué es el sistema de escape de un
                                                vehículo?</label>
                                            <div>
                                                <input type="radio" id="respuesta11a" name="respuesta11" value="A"
                                                    required>
                                                <label for="respuesta11a">A) El filtro de aire</label><br>
                                                <input type="radio" id="respuesta11b" name="respuesta11" value="B">
                                                <label for="respuesta11b">B) El control de frenos</label><br>
                                                <input type="radio" id="respuesta11c" name="respuesta11" value="C">
                                                <label for="respuesta11c">C) El sistema que expulsa los gases del
                                                    motor</label><br>
                                                <input type="radio" id="respuesta11d" name="respuesta11" value="D">
                                                <label for="respuesta11d">D) La transmisión de potencia al motor</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">12. ¿Cuál es la función de la correa de
                                                distribución en un motor de automóvil?</label>
                                            <div>
                                                <input type="radio" id="respuesta12a" name="respuesta12" value="A"
                                                    required>
                                                <label for="respuesta12a">A) Generar la chispa para la
                                                    combustión</label><br>
                                                <input type="radio" id="respuesta12b" name="respuesta12" value="B">
                                                <label for="respuesta12b">B) Regular la temperatura del motor</label><br>
                                                <input type="radio" id="respuesta12c" name="respuesta12" value="C">
                                                <label for="respuesta12c">C) Controlar la presión de los
                                                    neumáticos</label><br>
                                                <input type="radio" id="respuesta12d" name="respuesta12" value="D">
                                                <label for="respuesta12d">D) Sincronizar los tiempos de apertura y
                                                    cierre de válvulas</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">13. ¿Qué es el ABS en un sistema de frenos de
                                                un vehículo?</label>
                                            <div>
                                                <input type="radio" id="respuesta13a" name="respuesta13" value="A"
                                                    required>
                                                <label for="respuesta13a">A) Control de estabilidad del vehículo</label><br>
                                                <input type="radio" id="respuesta13b" name="respuesta13" value="B">
                                                <label for="respuesta13b">B) Ayuda al encendido del motor</label><br>
                                                <input type="radio" id="respuesta13c" name="respuesta13" value="C">
                                                <label for="respuesta13c">C) Mejora la combustión del motor</label><br>
                                                <input type="radio" id="respuesta13d" name="respuesta13" value="D">
                                                <label for="respuesta13d">D) Sistema de control de presión de los
                                                    neumáticos</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">14. ¿Qué es el filtro de aceite en un
                                                vehículo?</label>
                                            <div>
                                                <input type="radio" id="respuesta14a" name="respuesta14" value="A"
                                                    required>
                                                <label for="respuesta14a">A) Limpia el aire antes de ingresar al
                                                    motor</label><br>
                                                <input type="radio" id="respuesta14b" name="respuesta14" value="B">
                                                <label for="respuesta14b">B) Regula la temperatura del motor</label><br>
                                                <input type="radio" id="respuesta14c" name="respuesta14" value="C">
                                                <label for="respuesta14c">C) Filtra las partículas de suciedad del
                                                    aceite lubricante</label><br>
                                                <input type="radio" id="respuesta14d" name="respuesta14" value="D">
                                                <label for="respuesta14d">D) Genera la chispa de ignición</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">15. ¿Qué función cumple el colector de escape
                                                en un vehículo?</label>
                                            <div>
                                                <input type="radio" id="respuesta15a" name="respuesta15" value="A"
                                                    required>
                                                <label for="respuesta15a">A) Reducir la contaminación del
                                                    motor</label><br>
                                                <input type="radio" id="respuesta15b" name="respuesta15" value="B">
                                                <label for="respuesta15b">B) Controlar la presión de los
                                                    neumáticos</label><br>
                                                <input type="radio" id="respuesta15c" name="respuesta15" value="C">
                                                <label for="respuesta15c">C) Recircular los gases de escape hacia la
                                                    admisión</label><br>
                                                <input type="radio" id="respuesta15d" name="respuesta15" value="D">
                                                <label for="respuesta15d">D) Distribuir el aceite por el
                                                    motor</label>
                                            </div>
                                            <div class="mb-3">
                                            <label class="form-label">16. ¿Qué función cumple el colector de escape
                                                en un vehículo?</label>
                                            <div>
                                                <input type="radio" id="respuesta15a" name="respuesta15" value="A"
                                                    required>
                                                <label for="respuesta15a">A) Reducir la contaminación del
                                                    motor</label><br>
                                                <input type="radio" id="respuesta15b" name="respuesta15" value="B">
                                                <label for="respuesta15b">B) Controlar la presión de los
                                                    neumáticos</label><br>
                                                <input type="radio" id="respuesta15c" name="respuesta15" value="C">
                                                <label for="respuesta15c">C) Recircular los gases de escape hacia la
                                                    admisión</label><br>
                                                <input type="radio" id="respuesta15d" name="respuesta15" value="D">
                                                <label for="respuesta15d">D) Distribuir el aceite por el
                                                    motor</label>
                                            </div>
                                            <div class="mb-3">
                                            <label class="form-label">17. ¿Qué función cumple el colector de escape
                                                en un vehículo?</label>
                                            <div>
                                                <input type="radio" id="respuesta15a" name="respuesta15" value="A"
                                                    required>
                                                <label for="respuesta15a">A) Reducir la contaminación del
                                                    motor</label><br>
                                                <input type="radio" id="respuesta15b" name="respuesta15" value="B">
                                                <label for="respuesta15b">B) Controlar la presión de los
                                                    neumáticos</label><br>
                                                <input type="radio" id="respuesta15c" name="respuesta15" value="C">
                                                <label for="respuesta15c">C) Recircular los gases de escape hacia la
                                                    admisión</label><br>
                                                <input type="radio" id="respuesta15d" name="respuesta15" value="D">
                                                <label for="respuesta15d">D) Distribuir el aceite por el
                                                    motor</label>
                                            </div>
                                            <div class="mb-3">
                                            <label class="form-label">18. ¿Qué función cumple el colector de escape
                                                en un vehículo?</label>
                                            <div>
                                                <input type="radio" id="respuesta15a" name="respuesta15" value="A"
                                                    required>
                                                <label for="respuesta15a">A) Reducir la contaminación del
                                                    motor</label><br>
                                                <input type="radio" id="respuesta15b" name="respuesta15" value="B">
                                                <label for="respuesta15b">B) Controlar la presión de los
                                                    neumáticos</label><br>
                                                <input type="radio" id="respuesta15c" name="respuesta15" value="C">
                                                <label for="respuesta15c">C) Recircular los gases de escape hacia la
                                                    admisión</label><br>
                                                <input type="radio" id="respuesta15d" name="respuesta15" value="D">
                                                <label for="respuesta15d">D) Distribuir el aceite por el
                                                    motor</label>
                                            </div>
                                            <div class="mb-3">
                                            <label class="form-label">19. ¿Qué función cumple el colector de escape
                                                en un vehículo?</label>
                                            <div>
                                                <input type="radio" id="respuesta15a" name="respuesta15" value="A"
                                                    required>
                                                <label for="respuesta15a">A) Reducir la contaminación del
                                                    motor</label><br>
                                                <input type="radio" id="respuesta15b" name="respuesta15" value="B">
                                                <label for="respuesta15b">B) Controlar la presión de los
                                                    neumáticos</label><br>
                                                <input type="radio" id="respuesta15c" name="respuesta15" value="C">
                                                <label for="respuesta15c">C) Recircular los gases de escape hacia la
                                                    admisión</label><br>
                                                <input type="radio" id="respuesta15d" name="respuesta15" value="D">
                                                <label for="respuesta15d">D) Distribuir el aceite por el
                                                    motor</label>
                                            </div>
                                            <div class="mb-3">
                                            <label class="form-label">20.¿Qué herramienta se utiliza para revisar el nivel de aceite del motor?</label>
                                            <div>
                                                <input type="radio" id="respuesta15a" name="respuesta15" value="A"
                                                    required>
                                                <label for="respuesta15a">A)  Gato hidráulico</label><br>
                                                <input type="radio" id="respuesta15b" name="respuesta15" value="B">
                                                <label for="respuesta15b">B)Llave de ruedas</label><br>
                                                <input type="radio" id="respuesta15c" name="respuesta15" value="C">
                                                <label for="respuesta15c">C)Varilla medidora de aceite</label><br>
                                                <input type="radio" id="respuesta15d" name="respuesta15" value="D">
                                                <label for="respuesta15d">D)Linterna </label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-BlKC2cyA9o+PXKcA4lTTbkNAtORX4fXR9R+8ULwN0F4MTIam2uEu4s2k6PEZkhWj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-RCaF4Lwk9oj4AH4P5gdhFu+ZhhZ2z4Jz5MzAC+VhWjHp3RUzzy9t9KjNh4hALGhL"
            crossorigin="anonymous"></script>
    </body>
</html>
