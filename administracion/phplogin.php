<?php
require '../require/comun2.php';
$login = Leer::post("login");
$clave = Leer::post("clave");

$bd = new BaseDatos();
$modelo = new ModeloUsuario($bd);
$usuario = $modelo->login($login, $clave);
if($usuario == false){
    $sesion->cerrar();
    header("Location: index.html");
}else{
    $sesion->setUsuario($usuario, $bd);
    header("Location: admin.php ");
}