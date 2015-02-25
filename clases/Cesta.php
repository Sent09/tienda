<?php

class Cesta {
    static function getCantidadObjetos($iniciar=null){
        if($iniciar==null){
        session_start();
        }
        if (isset($_SESSION["__cesta"])) {
            $cesta = $_SESSION["__cesta"];
            $cantidad = 0;
            foreach ($cesta as $value) {
                $cantidad = $cantidad + $value->getCantidad();
            }
            return $cantidad;
        }else{
            return 0;
        }
    }
    
    static function getPrecioTotal(){
        if (isset($_SESSION["__cesta"])) {
            $cesta = $_SESSION["__cesta"];
            $total = "";
            foreach ($cesta as $value) {
                $total = $total + $value->getProducto()->getPrecio() * $value->getCantidad();
            }
            return $total;
        }else{
            return 0;
        }
    }
    
    static function getProductos($iniciar=null){
        if($iniciar==null){
        session_start();
        }
        if (isset($_SESSION["__cesta"])) {
            $cesta = $_SESSION["__cesta"];
            return $cesta;
        }else{
            return null;
        }
    }
    
}
