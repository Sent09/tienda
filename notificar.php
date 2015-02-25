<?php
include './require/comun.php';
$texto = "";
$variable = "";
foreach ($_POST as $nombre => $valor) {
    if($nombre == "item_number1"){
        $variable = $valor;
    }
    $texto.="$nombre : $valor\n";
}
$pos = strpos($variable, '_');
$str = substr($variable, 0, $pos);

$req = 'cmd=_notify-validate';
foreach ($_POST as $clave => $valor) {
	$valor = urlencode(stripslashes($valor));
	$req .= "&$clave=$valor";
}
$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Host: www.sandbox.paypal.com\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr , 30);
if (!$fp) {
    $bd = new BaseDatos();
    $modeloPaypal = new ModeloPaypal($bd);
    $modeloPaypal->edit("duda", $str);
} else {
	fputs ($fp, $header . $req);
	while (!feof($fp)) {
		$res = fgets ($fp, 1024);
		if (strcmp ($res, "VERIFIED") == 0) { //OK
                    $bd = new BaseDatos();
                    $modeloPaypal = new ModeloPaypal($bd);
                    $modeloPaypal->edit("si", $str);
		} 
		else if (strcmp ($res, "INVALID") == 0) { //ERROR
                    $bd = new BaseDatos();
                    $modeloPaypal = new ModeloPaypal($bd);
                    $modeloPaypal->edit("no", $str);
		}
	}
	fclose ($fp);
}