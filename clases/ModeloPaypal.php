<?php

class ModeloPaypal {
    private $bd;
    private $tabla = "paypal";
    function __construct(BaseDatos $bd) {
        $this->bd = $bd;
    }
    function add(Paypal $objeto){
        $consultaSql = "insert into $this->tabla values(null, :idventa, :verificado);";
        $arrayConsulta["idventa"] = $objeto->getIdventa();
        $arrayConsulta["verificado"] = $objeto->getVerificado();
        $resultado = $this->bd->setConsulta($consultaSql, $arrayConsulta);
        if(!$resultado){
            return -1;
        }
        return $this->bd->getNumeroFila();
    }
    
    function get($idventa){
        $consultaSql = "select * from $this->tabla where idventa=:idventa";
        $arrayConsulta["idventa"] = $idventa;
        $resultado = $this->bd->setConsulta($consultaSql, $arrayConsulta);
        if($resultado){
            $producto = new Paypal();
            $producto->set($this->bd->getFila());
            return $producto;
        }else{
            return null;
        }
    }
    
    function edit($estado, $idventa){        
        $consultaSql = "update $this->tabla set verificado=:verificado where idventa=:idventa;";
        $parametros["verificado"] = $estado;
        $parametros["idventa"] = $idventa;
        $resultado = $this->bd->setConsulta($consultaSql, $parametros);
        if(!$resultado){
            return -1;
        }
        return $this->bd->getNumeroFila();
    }
}
