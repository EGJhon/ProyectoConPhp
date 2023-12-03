<?php
class Bean {
    public $CODIGO ;
    public $NOMBRE;
    public $PRECIO ;
    public $FECHA;


    public function getCODIGO() {
        return $this->CODIGO;
    }

    public function setCODIGO($CODIGO) {
        $this->CODIGO = $CODIGO;
    }

    public function getNOMBRE() {
        return $this->NOMBRE;
    }

    public function setNOMBRE($NOMBRE) {
        $this->NOMBRE = $NOMBRE;
    }

    public function getPRECIO() {
        return $this->PRECIO;
    }

    public function setPRECIO($PRECIO) {
        $this->PRECIO = $PRECIO;
    }

    public function getFECHA() {
        return $this->PREDICION;
    }

    public function setFECHA($PREDICION) {
        $this->PREDICION = $PREDICION;
    }
    
}
?>