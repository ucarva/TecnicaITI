<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Tecnico Industrial</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <style>
        body {
            background: #40A30D;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 5% auto;
            padding: 20px;
        }

        .row {
            margin: 0;
            padding: 0;
        }

        .col {
            padding: 20px;
        }

        .btn {
            margin: 10px 0;
        }

        img.banner {
            max-width: 100%;
            height: auto;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #d3d3d3; /* Color del borde al enfocar */
            box-shadow: 0 0 0 0.25rem rgba(211, 211, 211, 0.5); /* Sombra del cuadro al enfocar */
        }
    </style>
</head>

<body>
    <div class="container rounded shadow">
        <div class="row align-items-stretch shadow-lg p-3 mb-5 bg-body rounded">
            <div class="col bg-white rounded-end">
                <div class="text-end">
                    <img src="../img/logo.gif" width="60" alt="Logo" />
                </div>
                <h2 class="fw-bold text-center mt-4">INGRESO</h2>
                <h3 class="fw-bold text-center mb-4">Instituto Técnico Industrial</h3>

               
               
                
                <form action="#" method="POST">
                    <a href=""></a>


                    <div class="mb-4">
                        <label for="NumeroDocumento" class="form-label">Número documento:</label>
                        <input type="number" id="NumeroDocumento" name="NumeroDocumento" placeholder="Número de documento" class="form-control" min="0" required>
                    </div>


                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" name="contraseña" placeholder="Clave" class="form-control">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Iniciar Sesión</button>

                        
                        
                    </div>
                    <div class="d-grip text-center">
                    <a href="../index.php" class="text-center "><svg style="color:red" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1" />
                        </svg></a>

                    </div>
                    

                </form>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>