<?php

include './require/comun.php';

$id = Leer::get("id");

session_start();
if (isset($_SESSION["__cesta"])) {
    $cesta = $_SESSION["__cesta"];
} else {
    $_SESSION["__cesta"] = array();
    $cesta = $_SESSION["__cesta"];
}
$bd = new BaseDatos();
$modelo = new ModeloProducto($bd);
$producto = $modelo->get($id);

if (isset($cesta[$id])) {
    $lineacesta = $cesta[$id];
    $lineacesta->setCantidad($lineacesta->getCantidad() + 1);
} else {
    $lineacesta = new LineaCesta($producto, 1);
    $cesta[$id] = $lineacesta;
}
$_SESSION["__cesta"] = $cesta;

header("Location: carro");
