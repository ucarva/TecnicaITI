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
                                        PRUEBA PROGRAMACION
                                    </h3>
                                </div>
                                <div class="card-body">                                 
                                    <!--Formulario para ingresar preguntas-->
                                    <form action="#" method="post">                                    
                                        <div class="mb-3">
                                            <label class="form-label">1. ¿Qué es programar?</label>
                                            <div>
                                                <input type="radio" id="respuesta1a" name="respuesta1" value="A" required>
                                                <label for="respuesta1a">A) Es el proceso de crear programas de televisión.</label><br>
                                                <input type="radio" id="respuesta1b" name="respuesta1" value="B">
                                                <label for="respuesta1b">B)Es escribir instrucciones para que una computadora realice tareas específicas. </label><br>
                                                <input type="radio" id="respuesta1c" name="respuesta1" value="C">
                                                <label for="respuesta1c">C) Es el arte de diseñar carteles y folletos. </label><br>
                                                <input type="radio" id="respuesta1d" name="respuesta1" value="D">
                                                <label for="respuesta1d">D) Es una técnica para decorar objetos</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">2. ¿Cuál es el resultado de la siguiente expresión matemática? Ten en cuenta la jerarquía de operaciones.
3 * (3 + 4) * (5 - 2)</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)35</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) 55</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)63</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) 53</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">3. ¿Qué es un lenguaje de programación?</label>
                                            <div>
                                                <input type="radio" id="respuesta3a" name="respuesta3" value="A" required>
                                                <label for="respuesta3a">A)Un conjunto de instrucciones para crear páginas web. </label><br>
                                                <input type="radio" id="respuesta3b" name="respuesta3" value="B">
                                                <label for="respuesta3b">B) Un idioma utilizado por los programadores para comunicarse con las computadoras.</label><br>
                                                <input type="radio" id="respuesta3c" name="respuesta3" value="C">
                                                <label for="respuesta3c">C) Un método para comunicarse con animales</label><br>
                                                <input type="radio" id="respuesta3d" name="respuesta3" value="D">
                                                <label for="respuesta3d">D)Una forma de codificar mensajes secretos. </label>
                                            </div>
                                        </div>  
                                        <div class="mb-3">
                                            <label class="form-label">4. ¿Cuál es el resultado de la siguiente expresión matemática? Ten en cuenta la jerarquía de operaciones.

(6+8)÷2+18÷(5+4)</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) 10</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B)  9</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)12 </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D)23 </label>
                                            </div>
                                        </div> 
                                        <div class="mb-3">
                                            <label class="form-label">5. ¿Cuál de las siguientes no es un lenguaje de programación? </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) HTML</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Python</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Photoshop</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) JavaScript</label>
                                            </div>
                                        </div> 
                                        <div class="mb-3">
                                            <label class="form-label">6. ¿Qué es un algoritmo? </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)  Una secuencia finita de pasos para resolver un problema.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Una función matemática compleja. </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)  Un tipo de lenguaje de programación.</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Es una herramienta de software.</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">7.El siguiente algoritmo describe los pasos para ir al colegio, pero se encuentra en desorganizado. ¿Cuál sería el orden de los pasos para que se lleve a cabo dicha tarea?
                                                           1.  Me visto rápidamente.
                                                           2.  Me levanto por la mañana.
                                                           3.  Tomo una ducha de 10 minutos.
                                                           4.  Tomo un té con leche y me voy.
                                                           5.  Termino de ducharme a las 7:25.
                                                           6.  Llego temprano al colegio.
                                                           7.  El reloj marca las 7:15.</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) 7, 2, 5, 3, 4, 1, 6</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B)  2, 5, 3, 7, 1, 4, 6</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)  7, 3, 5, 1, 2, 6, 4</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D)  2, 7, 3, 5, 1, 4, 6</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">8. ¿Qué es una base de datos?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Una lista de contactos en tu teléfono. </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B)Un conjunto de información organizada en una estructura que permite la fácil recuperación. </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)Un archivo de música. </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Una colección de fotos en tu computadora.</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">9. Se tienen las variables: a, b y c de tipo entero, con sus respectivas asignaciones. Determine si la siguiente expresión es Verdadera o Falsa.
                                                a = 5		b = 4		c = 7

                                               3 * a <= 15</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)Verdadero </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Falso</label><br>
                                              
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">10. Si Juan es el hermano de Pedro y Pedro es el padre de Ana, entonces ¿cuál es la relación entre Juan y Ana? </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)  Juan es el tío de Ana </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Juan es el abuelo de Ana</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)  Juan es el hermano de Ana </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Ninguna de las anteriores</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">11. ¿Cuál es el número que sigue en la siguiente serie? 
SERIE:  109 - 106- 103- 100- 97 – 94…</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) 91</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B)90</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)95 </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D)89 </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">12.Se tienen las variables: a, b y c de tipo entero, con sus respectivas asignaciones. Determine si la siguiente expresión es Verdadera o Falsa.
a = 5
b = 4
c = 7
5 * a + 3 * b  <=   a*(c - 3)
</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) verdadero</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) falso</label><br>
                                                
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">13.Si todos los gatos son animales y algunos animales son perros, ¿cuál de las siguientes afirmaciones es cierta?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Todos los gatos son perros </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Todos los animales son gatos  </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) Algunos gatos son perros  </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D)Todos los perros son gatos </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">14. Un rectángulo tiene un perímetro de 20 unidades y uno de sus lados mide 4 unidades, ¿cuánto mide el otro lado? </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)2 unidades  </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B)  3 unidades </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) 6 unidades </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D)8 unidades  </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">15.¿En qué lugar se encuentra alojado un sitio web que ya se encuentra disponible en internet?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) En el drive  </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) En un servidor local  </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C) En un hosting</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D)  En el disco duro</label><br>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">16.¿Cuál de las siguientes NO es una tarea común en la programación?</label>
                                            <div>
                                            <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A) Escribir código.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) Limpiar la CPU.</label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)  Depurar errores.</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Probar programas.</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">17.  Ana ha recorrido 600 m, que son los 3/4 del camino de su casa al instituto. ¿Qué distancia hay de su casa al instituto?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)800 metros  </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B)450 metros </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)1000 metros </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D)700 metros </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">18.Si A es igual a B, y B es igual a C, entonces ¿qué relación tiene A con C? </label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)A es menor que C </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B) A es mayor que C </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)A es igual a C  </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) No se puede determinar</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">19.¿Qué es un servidor web?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)Un tipo de hardware.</label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B)Un programa que responde a solicitudes de páginas web. </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)Una herramienta de edición de imágenes.</label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D)Una forma de enviar correos electrónicos. </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">20. ¿Qué hacer si olvidaste la llave dentro de tu casa?</label>
                                            <div>
                                                <input type="radio" id="respuesta2a" name="respuesta2" value="A" required>
                                                <label for="respuesta2a">A)Intentar abrir la puerta con un gancho. </label><br>
                                                <input type="radio" id="respuesta2b" name="respuesta2" value="B">
                                                <label for="respuesta2b">B)Romper una ventana para entrar. </label><br>
                                                <input type="radio" id="respuesta2c" name="respuesta2" value="C">
                                                <label for="respuesta2c">C)Pedirle prestada la llave a un vecino. </label><br>
                                                <input type="radio" id="respuesta2d" name="respuesta2" value="D">
                                                <label for="respuesta2d">D) Llamar a un cerrajero.</label>
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