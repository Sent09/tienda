<?php

include './require/comun.php';

$id = Leer::get("id");
session_start();
if (isset($_SESSION["__cesta"])) {
    $cesta = $_SESSION["__cesta"];
} else {
    header("Location: ../index.php");
    exit();
}
unset($cesta[$id]);

$_SESSION["__cesta"] = $cesta;
header("Location: carro");
