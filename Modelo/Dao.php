<?php
require_once '../util/ConexionBD.php';
require_once 'Bean.php';

class ClaseDao {
    public function Buscar($ID) {
        try {
            $conexionBD = new ConexionBD();
            $conexion = $conexionBD->getConexion();
            $sql = "SELECT * FROM Producto WHERE idprod = :cod";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':cod', $ID, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            
            return NULL;
        }
    }

    public function InsertarData(Bean $obj){
        try{
            $conexion = new ConexionBD();
            $conn = $conexion->getConexion();
    
            $stmt = $conn->prepare("INSERT INTO `producto` (`idprod`, `nombprod`, `precio`, `fecha`)
            VALUES (NULL, :nombre, :precio, :fecha);");

            $precio = $obj->getPRECIO();
            $nombre = $obj->getNOMBRE();
            $fecha = $obj->getFECHA();

            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':fecha', $fecha);              
            $i =  $stmt->execute();  
        } catch(Exception $th){
            
            echo "Error: " . $th->getMessage();
        } 
    }
    
}

?>
