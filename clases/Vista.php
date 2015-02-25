<?php
                       
class Vista {
    private $plantilla;
    private $datos;
    function __construct($plantilla=null, $datos=null) {
        $this->plantilla = $plantilla;
        $this->datos = $datos;
    }
    public function getPlantilla() {
        return $this->plantilla;
    }

    public function setPlantilla($plantilla) {
        $this->plantilla = $plantilla;
    }
    public function getDatos() {
        return $this->datos;
    }

    public function setDatos($datos) {
        $this->datos = $datos;
    }
    function leerPlantilla(){
        return file_get_contents('plantilla/'.$this->plantilla.'.html');
    }
    function renderData(){
        $contenidoPlantilla = $this->leerPlantilla();
        foreach ($this->datos as $clave => $valor) {
            $contenidoPlantilla = str_replace('{'.$clave.'}', $valor, $contenidoPlantilla);
        }
        return $contenidoPlantilla;
    }
    function render(){
        print $this->renderData();
    }
}

?>
