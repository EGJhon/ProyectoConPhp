<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ingresar Productos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/jquery.js"></script>

        
        <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />

        <script>

            $(document).ready(function(){
                $("#ingresarprod1").click(function(){
                    $("#form").attr("action","Controlador/controlador.php");
                    $("#form").attr("method","POST");
                    $("#form").submit();
                });
            });

            function salir(){
                document.form1.action="controlador/Controlador.php";
                document.form1.method="POST";
                document.form1.op.value="4";
                document.form1.submit();
            }
        </script>

    </head>
    <body >
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #FDEBD0;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" onclick="salir();">
                    <img src="imagenes/img.ico" alt="Logo" width="50" height="50" class="d-inline-block align-text-center">
                    Tienda
                    <form name="form1">
                        <input type="hidden" name="op">
                    </form>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                </div>
            </div>
        </nav>


        <div class="container py-3">
            <h1 class="py-3">Ingresar Productos</h1>
        <!--From-->
            <form id="form">
                <input type="hidden" name="op" value="3">
                <div class="row g-3">
                    <div class="col-sm-7">
                        <input type="text" name="nombre"class="form-control" placeholder="Nombre de producto" aria-label="Nombre de producto">
                    </div>
                    <div class="col-sm">
                        <input type="text" name="precio" class="form-control" placeholder="precio de producto" aria-label="precio de producto">
                    </div>
                    <div class="col-sm">
                    <input id="fecha" name="fecha" width="276" placeholder="Fecha" aria-label="Fecha"/>
                        <script>
                            $('#fecha').datepicker({
                                uiLibrary: 'bootstrap5'
                            });
                        </script>
                    </div>
                    <input id ="ingresarprod1" type="button" class="btn btn-success" value="Ingresar producto">
                </div>
            </form>
            <div class =" py-3" id="contenedor"></div>
        </div>
        <footer class="bg-body-tertiary text-center fixed-bottom">
            <!-- Grid container -->
            <div class="container p-4"></div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2023 Copyright: Jhon Estrada Gutierrez - UNFV
                <a class="text-body" href="https://github.com/EGJhon/EGJhon">Github</a>
            </div>
            <!-- Copyright -->
        </footer>
    </body>
</html>