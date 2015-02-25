<?php

class Producto {
    private $id, $nombre, $precio, $foto, $iva;
    
    function __construct($id=null, $nombre=null, $precio=null, $foto=null, $iva=null) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->foto = $foto;
        $this->iva = $iva;
    }
    
    function set($datos, $inicio=0){
        $this->id = $datos[0+$inicio];
        $this->nombre = $datos[1+$inicio];
        $this->precio = $datos[2+$inicio];
        $this->foto = $datos[3+$inicio];
        $this->iva = $datos[4+$inicio];
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getFoto() {
        return $this->foto;
    }

    function getIva() {
        return $this->iva;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setIva($iva) {
        $this->iva = $iva;
    }


}
