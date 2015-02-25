<?php
    include './require/comun.php';
    
    $cesta = Cesta::getProductos();
    if($cesta == null){
        header("Location: carro");
        exit();
    }
    
    $nombre = Leer::post("nombre");
    $direccion = Leer::post("direccion");    
    $bd = new BaseDatos();
    $modeloVenta = new ModeloVenta($bd);
    $fecha = date("d.m.y");
    $hora = date("H:i:s");
    $pago = Cesta::getPrecioTotal();
    $venta =  new Venta(null, $fecha, $hora, $pago, $direccion, $nombre);
    $modeloVenta->add($venta);    
    $idventa = $bd->getAutonumerico();
    
    $modeloDetalle = new ModeloDetalleVenta($bd);
    foreach ($cesta as $value) {
        $idproducto = $value->getProducto()->getId();
        $cantidad = $value->getCantidad();
        $precio = $value->getProducto()->getPrecio();
        $iva = $value->getProducto()->getIva();
        $detalle = new DetalleVenta(null, $idventa, $idproducto, $cantidad, $precio, $iva);
        $modeloDetalle->add($detalle);
    }
    $modeloPaypal = new ModeloPaypal($bd);
    $paypal = new Paypal(null, $idventa, "no");
    $modeloPaypal->add($paypal);
    
    $_SESSION["__idventa"] = $idventa;
    /* Falta la bd de paypal */
    header("Location: pagar.php");
    