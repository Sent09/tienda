<?php

class Paypal {
    private $id, $idventa, $verificado;
    function __construct($id=null, $idventa=null, $verificado=null) {
        $this->id = $id;
        $this->idventa = $idventa;
        $this->verificado = $verificado;
    }
    function set($datos, $inicio=0){
        $this->id = $datos[0+$inicio];
        $this->idventa = $datos[1+$inicio];
        $this->verificado = $datos[2+$inicio];
    }
    function getId() {
        return $this->id;
    }

    function getIdventa() {
        return $this->idventa;
    }

    function getVerificado() {
        return $this->verificado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdventa($idventa) {
        $this->idventa = $idventa;
    }

    function setVerificado($verificado) {
        $this->verificado = $verificado;
    }


}
