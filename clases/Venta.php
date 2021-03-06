<?php
class Venta {
    private $id, $fecha, $hora, $pago, $direccion, $nombre;
    
    function __construct($id=null, $fecha=null, $hora=null, $pago=null, $direccion=null, $nombre=null) {
        $this->id = $id;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->pago = $pago;
        $this->direccion = $direccion;
        $this->nombre = $nombre;
    }
    
    function set($datos, $inicio=0){
        $this->id = $datos[0+$inicio];
        $this->fecha = $datos[1+$inicio];
        $this->hora = $datos[2+$inicio];
        $this->pago = $datos[3+$inicio];
        $this->direccion = $datos[4+$inicio];
        $this->nombre = $datos[5+$inicio];
    }
    
    function getId() {
        return $this->id;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getHora() {
        return $this->hora;
    }

    function getPago() {
        return $this->pago;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setPago($pago) {
        $this->pago = $pago;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}
