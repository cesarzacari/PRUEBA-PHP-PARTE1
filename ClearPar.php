<?php
/**
* Descripción Elimina los paréntesis que no tienen pareja.
*
* @author     César Zácari
* @copyright  César Zácari
* @version    1.0
**/
class ClearPar
{
    public function build($string)
    {
        try{//inicio manejo de errores
            echo "entrada: ".$string."&nbsp;&nbsp;&nbsp;&nbsp;";
            $contar_juntos = 0;
            $abierto = 0;
            $limite = strlen($string);//identifica longitud cadena ==> no sobrecargar en cada iteración
            for($i=0;$i<$limite;$i++){//recorre cadena
                if($string{$i} == "("){//valida caracter "(" abre
		            //Si caracter = "(" => almacena 1 en variable
	                $abierto = 1;
	            }else{
	                if($abierto == 1){
		                $contar_juntos++;
		                $abierto = 0;
		            }else{
		                $abierto = 0;
		            }
		        }
	    }
            $neo_cadena = "";
            for($i=0; $i<$contar_juntos; $i++){//recorre la iteración 
                $neo_cadena .= "()";
            }
            echo "salida : ".$neo_cadena."<br>";
        }catch (Exception $e){
            return $e->getMessage();
        }
    }
}
//Parámetros de Entrada
$cpar = new ClearPar();

$cadena1 = "(()())()";
$cpar->build($cadena1);

$cadena2 = "(()(()";
$cpar->build($cadena2);

$cadena3 = ")(";
$cpar->build($cadena3);

$cadena4 = "((()";
$cpar->build($cadena4);
