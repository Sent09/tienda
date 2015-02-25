<?php

class ModeloVenta {
    private $bd;
    private $tabla = "venta";
    function __construct(BaseDatos $bd) {
        $this->bd = $bd;
    }
    function add(Venta $objeto){
        $consultaSql = "insert into $this->tabla values(null, :fecha, :hora, :pago, :direccion, :nombre);";
        $arrayConsulta["fecha"] = $objeto->getFecha();
        $arrayConsulta["hora"] = $objeto->getHora();
        $arrayConsulta["pago"] = $objeto->getPago();
        $arrayConsulta["direccion"] = $objeto->getDireccion();
        $arrayConsulta["nombre"] = $objeto->getNombre();
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
            $producto = new Venta();
            $producto->set($this->bd->getFila());
            return $producto;
        }else{
            return null;
        }
    }

    function getList($pagina=0, $rpp=10, $condicion="1=1",$parametros=array(), $orderby = "id desc"){
        $list = array();
        $principio = $pagina*$rpp;
        $sql = "select * from $this->tabla where $condicion order by $orderby limit $principio, $rpp";
        $r = $this->bd->setConsulta($sql, $parametros);
        if($r){
            while($fila = $this->bd->getFila()){
                $producto = new Venta();
                $producto->set($fila);
                $list[] = $producto;
            }
        }else{
            return null;
        }
        return $list;
    }
    function count($condicion="1=1", $parametros=array()){
        $sql = "select count(*) from $this->tabla where $condicion";
        $r=$this->bd->setConsulta($sql, $parametros);
        if($r){
            $resultado = $this->bd->getFila();
            return $resultado[0];
        }
        return -1;
    }
}
