<?php

class Util {
   public static function getEnlacesPaginacion($p, $paginas, $numeroRegistros, $url =""){ //implementar url
       $pos = strpos($url, "?");
       if($pos==false){
           $url .= "?";
       }else{
           $url .= "&";
           
           
       }
       $enlaces  = array();
       
        $ultimoCalculo = $numeroRegistros / $paginas;
        $ultimo = number_format($ultimoCalculo, 0)-1;
        $enlaces["inicio"] = "<a href='?p=0'>&Lt; </a>"; 
        $enlaces["ultimo"] = "<a href='?p=$ultimo'>&Gt;</a>"; 
       if($p==0){           
            $enlaces["anterior"] = "<a href='?p=0'>&lt; </a>";
            $enlaces["primero"]= "<a href='?p=0'>1 </a>";
            $enlaces["segundo"]= "<a href='?p=1'>2 </a>"; 
            $enlaces["actual"]= "<a href='?p=2'>3 </a>"; 
            $enlaces["cuarto"]= "<a href='?p=3'>4 </a>";
            $enlaces["quinto"]= "<a href='?p=4'>5 </a>"; 
            $enlaces["siguiente"] = "<a href='?p=1'>&gt; </a>"; 
       }elseif ($p==1){ 
            $enlaces["anterior"] = "<a href='?p=0'>&lt; </a>";
            $enlaces["primero"]= "<a href='?p=0'>1 </a>";
            $enlaces["segundo"]= "<a href='?p=1'>2 </a>"; 
            $enlaces["actual"]= "<a href='?p=2'>3 </a>"; 
            $enlaces["cuarto"]= "<a href='?p=3'>4 </a>";
            $enlaces["quinto"]= "<a href='?p=4'>5 </a>"; 
            $enlaces["siguiente"] = "<a href='?p=2'>&gt; </a>";  
        }elseif ($p==$ultimo){ 
            $anterior = $ultimo-1;
            $enlaces["anterior"] = "<a href='?p=$anterior'>&lt; </a>"; 
            $primero= $ultimo-4;
            $primeroNumero= $ultimo-3;
            $enlaces["primero"]= "<a href='?p=".$primero."'>$primeroNumero </a>";
            $segundo = $ultimo-3;
            $segundoNumero = $ultimo-2;
            $enlaces["segundo"]= "<a href='?p=".$segundo."'>$segundoNumero </a>"; 
            $actual = $ultimo-2;
            $actualNumero = $ultimo-1;
            $enlaces["actual"]= "<a href='?p=".$actual."'>$actualNumero </a>"; 
            $cuarto = $ultimo-1;
            $cuartoNumero = $ultimo;
            $enlaces["cuarto"]= "<a href='?p=".$cuarto."'>$cuartoNumero </a>";
            $quinto = $ultimo;
            $quintoNumero = $ultimo+1;
            $enlaces["quinto"]= "<a href='?p=".$quinto."'>$quintoNumero </a>"; 
            $siguiente = $ultimo;
            $enlaces["siguiente"] = "<a href='?p=".$siguiente."'>&gt; </a>"; 
        }elseif ($p==$ultimo-1){ 
            $anterior = $ultimo-2;
            $enlaces["anterior"] = "<a href='?p=$anterior'>&lt; </a>"; 
            $primero= $ultimo-4;
            $primeroNumero= $ultimo-3;
            $enlaces["primero"]= "<a href='?p=".$primero."'>$primeroNumero </a>";
            $segundo = $ultimo-3;
            $segundoNumero = $ultimo-2;
            $enlaces["segundo"]= "<a href='?p=".$segundo."'>$segundoNumero </a>"; 
            $actual = $ultimo-2;
            $actualNumero = $ultimo-1;
            $enlaces["actual"]= "<a href='?p=".$actual."'>$actualNumero </a>"; 
            $cuarto = $ultimo-1;
            $cuartoNumero = $ultimo;
            $enlaces["cuarto"]= "<a href='?p=".$cuarto."'>$cuartoNumero </a>";
            $quinto = $ultimo;
            $quintoNumero = $ultimo+1;
            $enlaces["quinto"]= "<a href='?p=".$quinto."'>$quintoNumero </a>"; 
            $siguiente = $ultimo;
            $enlaces["siguiente"] = "<a href='?p=".$siguiente."'>&gt; </a>"; 
        }else{
            $anterior = $p-1;
            $enlaces["anterior"] = "<a href='?p=$anterior'>&lt; </a>"; 
            $primero= $p-2;
            $primeroNumero= $p-1;
            $enlaces["primero"]= "<a href='?p=".$primero."'>$primeroNumero </a>";
            $segundo = $p-1;
            $segundoNumero = $p;
            $enlaces["segundo"]= "<a href='?p=".$segundo."'>$segundoNumero </a>"; 
            $actual = $p;
            $actualNumero = $p+1;
            $enlaces["actual"]= "<a href='?p=".$actual."'>$actualNumero </a>"; 
            $cuarto = $p+1;
            $cuartoNumero = $p+2;
            $enlaces["cuarto"]= "<a href='?p=".$cuarto."'>$cuartoNumero </a>";
            $quinto = $p+2;
            $quintoNumero = $p+3;
            $enlaces["quinto"]= "<a href='?p=".$quinto."'>$quintoNumero </a>"; 
            $siguiente = $p+1;
            $enlaces["siguiente"] = "<a href='?p=".$siguiente."'>&gt; </a>"; 
        }
        return $enlaces;
   }
}

?>
