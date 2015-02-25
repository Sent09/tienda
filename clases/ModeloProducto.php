<?php

class ModeloProducto {
    private $bd;
    private $tabla = "producto";
    function __construct(BaseDatos $bd) {
        $this->bd = $bd;
    }
    function get($id){
        $consultaSql = "select * from $this->tabla where id=:id";
        $arrayConsulta["id"] = $id;
        $resultado = $this->bd->setConsulta($consultaSql, $arrayConsulta);
        if($resultado){
            $producto = new Producto();
            $producto->set($this->bd->getFila());
            return $producto;
        }else{
            return null;
        }
    }

    function getList($pagina=0, $rpp=10, $condicion="1=1",$parametros=array(), $orderby = "1"){
        $list = array();
        $principio = $pagina*$rpp;
        $sql = "select * from $this->tabla where $condicion order by $orderby limit $principio, $rpp";
        $r = $this->bd->setConsulta($sql, $parametros);
        if($r){
            while($fila = $this->bd->getFila()){
                $producto = new Producto();
                $producto->set($fila);
                $list[] = $producto;
            }
        }else{
            return null;
        }
        return $list;
    }
}
