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
                                        PRUEBA DIBUJO ARQUITECTONICO
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <!--Formulario para ingresar preguntas-->
                                    <form action="#" method="post">
                                        <div class="mb-3">
                                            <label class="form-label">1. ¿Qué software es ampliamente utilizado en el diseño arquitectónico para crear modelos virtuales de edificios?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta1a" name="respuesta1" value="A"
                                                    required>
                                                <label for="respuesta1a">A) AutoCAD</label><br>
                                                <input type="radio" id="respuesta1b" name="respuesta1" value="B">
                                                <label for="respuesta1b">B) Photoshop</label><br>
                                                <input type="radio" id="respuesta1c" name="respuesta1" value="C">
                                                <label for="respuesta1c">C) Excel</label><br>
                                                <input type="radio" id="respuesta1d" name="respuesta1" value="D">
                                                <label for="respuesta1d">D) Illustrator
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">2. ¿Qué papel juega un plano en el diseño arquitectónico?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) Representar el diseño interior de un edificio.
                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Mostrar la estructura de un edificio desde arriba.

                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Detallar la ubicación de muebles en una casa.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Ninguna de las anteriores.
                                                </label>

                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">3. ¿Cuál es la función principal de un arquitecto en un proyecto de construcción?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta3a" name="respuesta3" value="A"
                                                    required>
                                                <label for="respuesta3a">A) Realizar cálculos estructurales.</label><br>
                                                <input type="radio" id="respuesta3b" name="respuesta3" value="B">
                                                <label for="respuesta3b">B) Diseñar la distribución espacial y la estética del edificio.
                                                </label><br>
                                                <input type="radio" id="respuesta3c" name="respuesta3" value="C">
                                                <label for="respuesta3c">C) Seleccionar los materiales de construcción.
                                                </label><br>
                                                <input type="radio" id="respuesta3d" name="respuesta3" value="D">
                                                <label for="respuesta3d">D)  Instalar sistemas eléctricos y de fontanería.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">4. ¿Qué significa el término "planta baja" en el contexto de diseño arquitectónico?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A)  El nivel más alto de un edificio.
                                                </label><br> </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) El nivel más bajo de un edificio.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) El nivel intermedio de un edificio.</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) El nivel donde se encuentran las oficinas.</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">5. ¿Cuál es el propósito de una maqueta en el diseño arquitectónico?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) Representar la elevación de un edificio.
                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Permitir a los clientes visualizar el diseño en tres dimensiones.
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Detallar la ubicación exacta de los muebles en un espacio.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D)  Mostrar la planta de un edificio.</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">6. ¿Qué es un "diseño conceptual" en arquitectura?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) Un diseño finalizado y listo para la construcción.
                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Un dibujo técnico detallado de un edificio.
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Una idea inicial o esquema básico de diseño.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Un plan de mantenimiento para edificios existentes.

                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">7. ¿Cuál de las siguientes disciplinas está más estrechamente relacionada con el diseño arquitectónico?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) Astronomía
                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Ingeniería civil
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Psicología</label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">8. ¿Qué es un "renderizado" en el contexto del diseño arquitectónico?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) La construcción física de un edificio.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) La representación visual de un modelo en 3D.
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) La instalación de sistemas de fontanería.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) La creación de cimientos para un edificio.</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">9. ¿Qué función desempeña un plano de elevación en el diseño arquitectónico?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) Mostrar la distribución de las habitaciones.
                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Representar el edificio visto desde arriba.
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)  Detallar las alturas y dimensiones de las fachadas del edificio.

                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D)  Ninguna de las anteriores.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">10. ¿Por qué es importante considerar el entorno circundante al diseñar un edificio?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) Para determinar el costo de construcción.
                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Para garantizar la seguridad del edificio.
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)  Para integrar el edificio de manera armoniosa con su entorno.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Para cumplir con los requisitos de zonificación local.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">11. ¿Cuál es el propósito principal de un plano de planta en diseño arquitectónico?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) Mostrar la fachada de un edificio.
                                                    .</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Representar la distribución espacial de un espacio.
                                                    .</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Detallar las alturas de los techos.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Especificar el tipo de material de construcción.</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">12. ¿Qué herramienta se utiliza comúnmente para dibujar planos técnicos en diseño arquitectónico?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A)  Lápices de colores
                                                </label><br> </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Regla y compás</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Martillo y clavos
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Teclado y ratón
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">13. ¿Qué función desempeñan las líneas de fuga en una representación arquitectónica?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) Indicar la dirección del viento.
                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Mostrar la perspectiva y profundidad.

                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Identificar las puertas y ventanas.

                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Delimitar el perímetro del edificio.

                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">14. ¿Qué es un "concepto arquitectónico"?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A)  Una planta detallada de un edificio.

                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Un esquema básico que guía el diseño.
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Un contrato entre el arquitecto y el cliente.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Una lista de materiales de construcción.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">15.  ¿Qué tipo de elemento estructural es comúnmente representado en un plano de sección?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) Puertas y ventanas</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Paredes y columnas
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Muebles y accesorios
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Suelos y techos
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">16. ¿Cuál es la función principal de un plano de techo en diseño arquitectónico?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) Mostrar el diseño del techo.
                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B)Representar la ubicación de los muebles.
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Indicar la ubicación de las escaleras.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Detallar la distribución de las paredes.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">17. ¿Qué es un "estudio de viabilidad" en el contexto del diseño arquitectónico?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) Un análisis del mercado inmobiliario.

                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Un estudio de impacto ambiental.
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Una evaluación de la factibilidad de un proyecto.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Una encuesta de opinión pública.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">18. ¿Qué se entiende por "escala" en un plano arquitectónico?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) La cantidad de espacio habitable.
                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) La proporción entre las dimensiones del plano y las reales.
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) La altura máxima del edificio.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) La ubicación geográfica del proyecto.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">19. ¿Qué representan comúnmente las líneas discontinuas en un plano arquitectónico?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) Paredes exteriores
                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Líneas de fuga
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Elementos móviles como puertas y ventanas
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Elementos estructurales como columnas y vigas
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">20. ¿Qué es un "alzado" en diseño arquitectónico?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A"
                                                    required>
                                                <label for="respuesta2a">A) Una vista de la parte superior de un edificio.
                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Una vista de la fachada de un edificio.
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Una vista de la parte trasera de un edificio.

                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Una vista del interior de un edificio.
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Agregar más preguntas con el mismo formato -->
                                        <div class="modal-footer justify-content-center ">
                                            <input class="btn btn-success " type="submit" value="Enviar">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>¿¿¿¿¿