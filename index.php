<?php
require('controller.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="<?php echo $charset[$lang]; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Formulario</title>
    <style type="text/css"></style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link rel="canonical" href="https://mdbootstrap.com/snippets/standard/mdbootstrap/2958490/">
    <link rel="canonical" href="https://mdbootstrap.com/snippets/standard/temp/4628244/">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #intro {
                margin-top: -58.59px;
            }
        }

        .bg-image {
            width: 100%;
            height: auto;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url('fondo.jpeg');
        }

        .container {
            margin-bottom: 5rem;
            margin-top: 5rem;
        }
    </style>

    <section>
        <div class="bg-image">
            <div class="container">
                <div class="row justify-content-center h-300">
                    <div class="col-12">

                        <form class="bg-white  rounded-5 shadow-5-strong p-5" method="post" action="controller.php">
                            <h4 class="text-center mb-5 text-black">Hago aquí su consulta:</h4>
                            <div class="form-group">
                                <label> Email </label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Escriba aqui su email" />
                            </div>

                            <div class="form-group">
                                <label>Nombre y apellido</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Escriba aqui su nombre completo" />
                            </div>

                            <div class="form-group">
                                <label>Motivo</label>
                                <select class="form-control" name="motivo" id="motivo">
                                    <option></option>
                                    <option>Incidencia</option>
                                    <option>Pagos y compras</option>
                                    <option>Reclamación</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Consulta:</label><br>
                                <textarea name="consulta" id="consulta" style="width:1200px; height:200px;" placeholder="Escriba aqui"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="hidden" name="accion" value="datoguardado" />
                                    <input class="btn btn-light btn-block mb-4" type="submit" value="ENVIAR" />
                                    <input class="btn btn-danger btn-block mb-4" type="reset" value="RESET" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" id="alert">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section class="container p-3 mb-3">
        <h2>Listado de Clientes</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Nombre Completo</th>
                    <th>Motivo</th>
                    <th>Texto</th>
                </tr>
            </thead>
            <?php
            if ($_GET) {
                if (isset($_GET['email']) and !empty($_GET['email'])) {
                    if (isset($_GET['name']) and !empty($_GET['name'])) {
                        if(isset($_GET['motivo']) and !empty($_GET['motivo'])){      
                        if (isset($_GET['consulta']) and !empty($_GET['consulta'])) {
                                  
                            }
                        }
                    }
                }
                $email = $_GET['email'];
                $name = $_GET['name'];
                $motivo = $_GET['motivo'];
                $consulta = $_GET['consulta'];

            echo '<tr>';
            echo '<td>' .$email. '</td>';
            echo '<td>' .$name. '</td>';
            echo '<td>'.$motivo. '</td>';
            echo '<td>' .$consulta. '</td>';
            echo '</tr>';

            }
            
            ?>
        </table>
    </section>
</body>

<footer class="bg-light text-lg-start">

    <hr class="m-0" />

    <div class="text-center py-4 align-items-center">
        <a href="https://github.com/Garciajess791" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
            <i class="fab fa-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/jessica-garcia-padilla-45660b223" class="btn btn-primary m-1" role="button" rel="" target="_blank">
            <i class="fab fa-linkedin"></i>
        </a>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-dark" href="">Jessica Garcia</a>
    </div>
</footer>
