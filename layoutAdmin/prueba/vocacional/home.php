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
                                        PRUEBA VOCACIONAL
                                    </h3>
                                </div>
                                <div class="card-body">                                 
                                    <!--Formulario para ingresar preguntas-->
                                    <form action="#" method="post">                                    
                                        <div class="mb-3">
                                            <label class="form-label">1. ¿Cuál es tu reacción ante un proyecto nuevo?  </label>
                                            <div>
                                                <input type="radio" id="respuesta1a" name="respuesta1" value="A" required>
                                                <label for="respuesta1a">A) Te emociona la oportunidad de trabajar con tus manos y construir algo <br>desde cero.</label><br>
                                                <input type="radio" id="respuesta1b" name="respuesta1" value="B">
                                                <label for="respuesta1b">B) Te entusiasma la idea de plasmar tus ideas en dibujos detallados</label><br>
                                                <input type="radio" id="respuesta1c" name="respuesta1" value="C">
                                                <label for="respuesta1c">C) Te motiva la posibilidad de desarrollar nuevas soluciones tecnológicas. </label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">2. ¿Qué tipo de herramientas te resultan más interesantes?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)Herramientas digitales o de análisis de datos.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Herramientas manuales o digitales para dibujar.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Herramientas manuales o de construcción.</label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">3. ¿Cómo te consideras?</label>
                                            <div>
                                                <input type="radio" id="respuesta3a" name="respuesta3" value="A" required>
                                                <label for="respuesta3a">A) Práctico/a y hábil en actividades manuales.</label><br>
                                                <input type="radio" id="respuesta3b" name="respuesta3" value="B">
                                                <label for="respuesta3b">B) Analítico y con facilidad para resolver problemas.</label><br>
                                                <input type="radio" id="respuesta3c" name="respuesta3" value="C">
                                                <label for="respuesta3c">C) Hábil y apasionado/a para el diseño gráfico.</label><br>
                                            </div>
                                        </div>  
                                        <div class="mb-3">
                                            <label class="form-label">4. ¿Qué tipo de habilidades te gustaría desarrollar más?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Habilidades analíticas y de resolución de problemas.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Habilidades creativas y de diseño. </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Habilidades técnicas y prácticas para construir objetos. </label><br>
                                            </div>
                                        </div> 
                                        <div class="mb-3">
                                            <label class="form-label">5. ¿Cuál es tu reacción ante un problema práctico?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Intento resolverlo con lógica y análisis.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Busco una solución que ya esté planteada.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Me lanzo a encontrar una solución práctica a través del dibujo o el diseño. </label><br>
                                            </div>
                                        </div> 
                                        <div class="mb-3">
                                            <label class="form-label">6. ¿Qué tipo de pasatiempos te gusta más?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Jugar ajedrez, resolver crucigramas o juegos mentales.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Dibujar imágenes de objetos, paisajes o personas.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Hacer manualidades.</label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">7. ¿Cómo te describirían tus amigos o familiares?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Práctico y orientado a la acción.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B)  Lógico y analítico.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)Creativo y detallista.</label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">8. ¿Eres creativo?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)  Sí, todo el tiempo se me ocurren ideas y hago representaciones mentales con muchas imágenes.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Sí, pero se me facilita más resolver problemas y desafíos.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Algunas veces, me desenvuelvo mejor construyendo o replicando algo creado. </label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">9. ¿Qué tipo de actividades prefieres realizar?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Trabajar con números y datos. </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Trabajar con maquinarias y herramientas técnicas. </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Dibujar, esbozar o crear diseños visuales.</label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">10. ¿Cuál es tu opinión sobre la estética y el diseño?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Es importante, para construir objetos bonitos. </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Los aprecio, pero no son mi principal enfoque; ya que me interesa más la funcionalidad de las cosas…</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Me apasiona crear y mejorar diseños visualmente atractivos.</label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">11. ¿Cuál de estas habilidades te resulta más atractiva?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Realizar diseños para luego implementarlos con materiales físicos. </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Gestionar información y comunicar de manera eficiente.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Construir, ensamblar o reparar cosas.</label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">12. ¿Qué te atrae más de trabajar con tecnología?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) La posibilidad de entender y manipular corrientes eléctricas.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) La capacidad de crear sistemas y software funcionales.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) La oportunidad de entender el funcionamiento de motores y sistemas complejos.</label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">13. ¿Qué tipo de ambiente de trabajo prefieres?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)Un entorno tranquilo y organizado, donde pueda disponer de elementos y realizar pruebas con facilidad.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) No me preocupa tanto la comodidad, puedo adecuarme a trabajar en diferentes posiciones y condiciones.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)Un espacio donde pueda estar concentrado/a, sentado y cómodo.</label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">14. ¿Cuál es tu opinión sobre trabajar con herramientas y equipos eléctricos?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) No me siento cómodo/a manejándolos, prefiero equipos con poco riesgo como una computadora.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Puedo utilizarlos, pero me gustan más las herramientas automotrices.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Disfruto trabajar con herramientas y equipos eléctricos para solucionar problemas. </label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">15. ¿Qué sentiste cuándo realizaste tu proyecto tecnológico sobre un circuito eléctrico?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Muy emocionado al construir el circuito y comprender el funcionamiento de la electricidad.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Realicé el proyecto, pero enfocado más a sistemas mecánicos y de movimiento. </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Prefiero utilizar simuladores para trabajar con electricidad.</label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">16. ¿Cómo te sientes acerca de aprender nuevas habilidades prácticas?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Me gusta practicar con sistemas mecánicos complejos y resolver problemas técnicos.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Disfruto practicar con la computadora.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Me emociona la idea de aprender nuevas habilidades prácticas en especial interconectar elementos y probar su funcionamiento.</label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">17. ¿Qué te atrae más de la tecnología moderna?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) La constante evolución en el uso de energías renovables.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Las infinitas posibilidades de innovación y desarrollo en el campo informático. </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Los avances en sistemas de diagnóstico y reparación en la industria automotriz.</label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">18. ¿Qué te gustaría aprender más sobre?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Técnicas de construcción y reparación física de sistemas eléctricos.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) La fascinación por el funcionamiento de los motores y su aplicación en diferentes industrias</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)  Nuevas tecnologías para el manejo de la información y la comunicación.  </label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">19. ¿Cuál de estos problemas quisieras tener la habilidad de resolver?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) El carro de tu novio/a no enciende.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B)  Tu computadora no muestra video.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Varios tomacorrientes de tu casa no dan corriente. </label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">20. ¿Te gustaría utilizar la computadora para crear proyectos?
                                            </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Me encantaria, puedo pasar horas frente a la computadora aprendiendo sobre tecnología y tratando de hacer algo que funcione.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) No me disgusta,pero solo uso la computadora para entretenimiento .Prefiero representar mis ideas de manera visual y tangible.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) No me gusta usar la computadora,me gusta mas construir cosas con mis manos.</label><br>
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