<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/jquery.js"></script>
        <link rel="shortcut icon" href="imagenes/img.ico">
        <script>
            $(document).ready(function(){
                $("#btn_buscar").click(function(){
                    $.ajax({
                        type:"POST",
                        url:"Controlador/controlador.php",
                        dataType:"html",
                        data:{op:1,id:$("#id").val()},
                        success:function(datos){
                            $("#contenedor").html(datos);
                        }
                    });
                });
                $("#ingresarprod").click(function(){
                    $("#form1").attr("action","Controlador/controlador.php");
                    $("#form1").attr("method","POST");
                    $("#form1").submit();
                });
            });
        </script>

    </head>
    <body >
        <?php 
        if (isset($_SESSION['estado'])) {
            $estado = $_SESSION['estado'];
            echo '<script>alert("' . $estado . '");</script>';
        }
        ?>

        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #FDEBD0;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="imagenes/img.ico" alt="Logo" width="50" height="50" class="d-inline-block align-text-center">
                    Tienda
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" id="ingresarprod" href="#">Ingresar Productos</a>
                    <form id="form1">
                        <input type="hidden" name="op" value="2">
                    </form>
                    </li>
                </ul>
                </div>
            </div>
        </nav>


        <div class="container py-3">
        <!--From-->
            <form>
                <h1>Productos de  primera  necesidad</h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID de producto</label>
                    <input type="text" name="id" class="form-control" id="id" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Introduzca el ID del producto a buscar.</div>
                </div>
                <input type="button" id="btn_buscar" class="btn btn-primary" value="Buscar">
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