<?php

class ModeloDetalleVenta {
    private $bd;
    private $tabla = "detalle";
    
    function __construct(BaseDatos $bd) {
        $this->bd = $bd;
    }
    
    function add(DetalleVenta $objeto){
        $consultaSql = "insert into $this->tabla values(null, :idventa, :idproducto, :cantidad, :precio, :iva);";
        $arrayConsulta["idventa"] = $objeto->getIdventa();
        $arrayConsulta["idproducto"] = $objeto->getIdproducto();
        $arrayConsulta["cantidad"] = $objeto->getCantidad();
        $arrayConsulta["precio"] = $objeto->getPrecio();
        $arrayConsulta["iva"] = $objeto->getIva();
        $resultado = $this->bd->setConsulta($consultaSql, $arrayConsulta);
        if(!$resultado){
            return -1;
        }
        return $this->bd->getNumeroFila();
    }
    
    function get($id){
        $consultaSql = "select * from $this->tabla where id=:id";
        $arrayConsulta["id"] = $id;
        $resultado = $this->bd->setConsulta($consultaSql, $arrayConsulta);
        if($resultado){
            $producto = new DetalleVenta();
            $producto->set($this->bd->getFila());
            return $producto;
        }else{
            return null;
        }
    }

    function getList($idventa){
        $sql = "select * from $this->tabla where idventa=:idventa";
        $parametros["idventa"] = $idventa;
        $r = $this->bd->setConsulta($sql, $parametros);
        if($r){
            while($fila = $this->bd->getFila()){
                $producto = new DetalleVenta();
                $producto->set($fila);
                $list[] = $producto;
            }
        }else{
            return null;
        }
        return $list;
    }
}
