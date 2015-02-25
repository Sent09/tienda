<?php
    function autoload($clase){
        require $clase.'.php';
    }
    spl_autoload_register('autoload');  

class Controlador{   
    function handle(){
        session_start();
        if (isset($_SESSION["__cesta"])) {
            $cesta = $_SESSION["__cesta"];
            $plantilla = "contenido";
            $plantillaContenido = "";
            foreach ($cesta as $value) {
                $datos = array(
                    "nombre" => $value->getProducto()->getNombre(),
                    "cantidad" => $value->getCantidad(),
                    "precio" => $value->getProducto()->getPrecio(),
                    "preciototal" => $value->getProducto()->getPrecio() * $value->getCantidad(),
                    "id" => $value->getProducto()->getId()
                );
                $vista = new Vista($plantilla, $datos);
                $plantillaContenido .= $vista->renderData(); 
            }
            
            $plantilla2 = "tabla";
            $datos2 = array(
                "datos" => $plantillaContenido
            );
            $vista2 = new Vista($plantilla2, $datos2);
            $plantillaTabla = $vista2->renderData();
            $datos = array(
                "datos" => $plantillaTabla,
                "cesta" => Cesta::getCantidadObjetos("no")
            );
            $plantilla = "plantilla";
            $vista = new Vista($plantilla, $datos);
            $vista->render();
        }else{
            header("Location: index.php");
        }
    }
}
?>