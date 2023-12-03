<?php
    session_start();
    require_once '../Modelo/Bean.php';
    require_once '../Modelo/Dao.php';
    require_once '../util/ConexionBD.php';
    $op=$_POST['op'];

    switch ($op){

        case 1:{
                $cod=$_POST['id'];
                $objDao = new ClaseDao();
                $data=$objDao->Buscar($cod);
                if( $data != NULL){
                    echo '
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    <table class="table table-dark table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Fecha</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">'.$data[0]["idprod"].'</th>
                        <td>'.$data[0]["nombprod"].'</td>
                        <td>'.$data[0]["precio"].'</td>
                        <td>'.date("d/m/Y", strtotime($data[0]["fecha"])).'</td>
                      </tr>
                    </tbody>
                  </table>';
                } 
                else{
                  echo' <div class="alert alert-danger" role="alert">
                    el ID '.$cod.' no se encuentra en la Base de datos!
                  </div>';
                }
                break;
            }
            case 2:{
                header("Location: ../Ingresarprod.php");
                break;
            }
            case 3:{
                unset($_SESSION['estado']);
                $nombre=$_POST["nombre"];
                $precio=$_POST["precio"];
                $fecha=$_POST["fecha"];
                if($nombre!=NULL and $precio!=NULL and $fecha!=NULL){
                    $obj= new Bean();
                    $obj->setNOMBRE($nombre);
                    $obj->setPRECIO(floatval($precio));
                    $obj->setFECHA(date("y-m-d", strtotime($fecha)));
                    $objdao=new ClaseDao();
                    $objdao->InsertarData($obj);
                    $_SESSION["estado"] = "guardado con exito";
                }
                else{
                    $_SESSION["estado"] = "no fue guardado";
                }
                header("Location: ../index.php");
                break;
            }
            case 4:{
                unset($_SESSION["estado"]);
                header("Location: ../index.php");
                break;
            }
        }

?>