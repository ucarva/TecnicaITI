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
                                        PRUEBA SISTEMAS
                                    </h3>
                                </div>
                                <div class="card-body">                                 
                                    <!--Formulario para ingresar preguntas-->
                                    <form action="#" method="post">                                    
                                        <div class="mb-3">
                                            <label class="form-label">1. ¿Cuál de los siguientes no es un tipo de sistema operativo?</label>
                                            <div>
                                                <input type="radio" id="respuesta1a" name="respuesta1" value="A" required>
                                                <label for="respuesta1a">A) Windows</label><br>
                                                <input type="radio" id="respuesta1b" name="respuesta1" value="B">
                                                <label for="respuesta1b">B)  Linux</label><br>
                                                <input type="radio" id="respuesta1c" name="respuesta1" value="C">
                                                <label for="respuesta1c">C)  iOS</label><br>
                                                <input type="radio" id="respuesta1d" name="respuesta1" value="D">
                                                <label for="respuesta1d">D) Microsoft Office</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">2. ¿Qué es un firewall en el contexto de sistemas informáticos?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)  Un dispositivo para imprimir documentos de manera inalámbrica</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Una herramienta para proteger una red controlando el tráfico de entrada
                                                    y salida.
                                                    </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Un sistema para administrar la temperatura de los servidores</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Una aplicación para crear diagramas de red.</label>
                                                
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">3. ¿Qué es un servidor web?</label>
                                            <div>
                                                <input type="radio" id="respuesta3a" name="respuesta3" value="A" required>
                                                <label for="respuesta3a">A) Un dispositivo para almacenar archivos digitales</label><br>
                                                <input type="radio" id="respuesta3b" name="respuesta3" value="B">
                                                <label for="respuesta3b">B)  Una aplicación para enviar y recibir correos electrónicos</label><br>
                                                <input type="radio" id="respuesta3c" name="respuesta3" value="C">
                                                <label for="respuesta3c">C) Un programa que sirve páginas web a través de Internet.</label><br>
                                                <input type="radio" id="respuesta3d" name="respuesta3" value="D">
                                                <label for="respuesta3d">D) Una herramienta para escanear en busca de virus.</label>
                                            </div>
                                        </div>  
                                        <div class="mb-3">
                                            <label class="form-label">4. ¿Cuál de las siguientes no es una tecnología de almacenamiento de
                                                datos?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)  SSD</label><br>                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) JPEG</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) HDD</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D)  USB</label>
                                            </div>
                                        </div> 
                                        <div class="mb-3">
                                            <label class="form-label">5. ¿Qué es un protocolo de red?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Un conjunto de reglas para la comunicación entre dispositivos en una
                                                    red.
                                                    </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Una herramienta para medir la velocidad de Internet</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Un tipo de antena para conexiones inalámbricas.</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Un programa para crear redes sociales</label>
                                            </div>
                                        </div> 
                                        <div class="mb-3">
                                            <label class="form-label">6. ¿Cuál de los siguientes no es un tipo de conexión a Internet?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)  Dial-up</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) DSL</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Bluetooth</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Fiber Optic</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">7. ¿Qué es un antivirus?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Un programa para editar imágenes</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Una herramienta para proteger un sistema contra software malicioso.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Un dispositivo de entrada para computadoras.</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Un protocolo de seguridad en redes inalámbricas</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">8. ¿Qué es un hacker ético?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)  Una persona que utiliza técnicas de hacking para dañar sistemas.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B)  Un profesional que realiza pruebas de seguridad en sistemas para
                                                    encontrar vulnerabilidades</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Un desarrollador de software</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Un dispositivo para bloquear señales Wi-Fi.</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">9. ¿Qué es un archivo PDF?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Un tipo de virus informático.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Un formato de archivo para documentos que conserva el diseño
                                                    original.
                                                    </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Un sistema operativo.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Una aplicación para realizar cálculos matemáticos</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">10. ¿Cuál de las siguientes opciones no es un navegador web?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Google Chrome</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Microsoft Word</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Mozilla Firefox</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Safari</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">11. ¿Qué es el phishing?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Un tipo de pescado.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Una técnica para obtener información personal mediante el engaño.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Un método de codificación de datos</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D)  Un protocolo de seguridad para redes Wi-Fi.</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">12. ¿Qué es un servidor de correo electrónico?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Un programa para editar fotografías.</label><br>                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Una aplicación para realizar videollamadas.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Un sistema para almacenar y enviar correos electrónicos.</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Un dispositivo para proyectar presentaciones.</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">13. ¿Qué es un sistema RAID?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Un sistema de respaldo de datos.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Una técnica para acelerar el procesamiento de datos.
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Un tipo de tarjeta de red.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Un protocolo de comunicación inalámbrica.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">14. ¿Qué es un ISP?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Un protocolo de seguridad informática.
                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Una organización que proporciona acceso a Internet.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Un tipo de disco duro</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Un software para programar tareas.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">15. ¿Qué es la RAM?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)  Un tipo de software antivirus.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Una unidad de almacenamiento permanente.
                                                </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Una memoria temporal utilizada por el sistema para almacenar datos y programas en ejecución.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Un dispositivo de entrada para computadoras.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">16. ¿Qué es un dominio de Internet?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Una dirección de correo electrónico.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Un nombre único que identifica a un sitio web en Internet.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Un tipo de servidor web.</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Un dispositivo para conectar computadoras en red.</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">17. ¿Qué es el software de código abierto?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Un tipo de virus informático.
                                                </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Un software cuyo código fuente está disponible públicamente y puede ser modificado por cualquier persona.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Un programa de edición de video</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D)  Un sistema operativo desarrollado por Microsoft.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">18. ¿Qué es un sistema operativo móvil?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Un sistema para administrar la temperatura de los servidores.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Un software para controlar teléfonos inteligentes y tabletas.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Una aplicación para escuchar música en línea.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Un tipo de antivirus.</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">19. ¿Qué es un ataque de denegación de servicio (DDoS)?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Un ataque que intenta robar información confidencial</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Un ataque que sobrecarga un servidor con solicitudes falsas para que se vuelva inaccesible.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Una técnica para proteger una red contra intrusiones.</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Un tipo de software espía.</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">20. ¿Qué es un disco sólido (SSD)?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Una unidad de almacenamiento que utiliza componentes electrónicos para almacenar datos de forma permanente.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Un tipo de software para optimizar el rendimiento de la computadora.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Un sistema para realizar copias de seguridad en la nube.
                                                </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D)  Un protocolo de seguridad para redes Wi-Fi.
                                                </label>
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

</html>¿¿¿¿¿