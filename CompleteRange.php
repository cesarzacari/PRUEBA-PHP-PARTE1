<?php
/**
* Descripción Completa si faltan números en la colección en el rango dado
*
* @author     César Zácari
* @copyright  César Zácari
* @version    1.0
**/
function build($string)
{
    echo "entrada : ".$string."&nbsp;&nbsp;&nbsp;&nbsp;";
    $coleccion_numeros = explode(',',$string);
    $cant_coleccion = count($coleccion_numeros);//longitud de colección
    if($cant_coleccion > 0)//valida longitud es mayor a cero
    {
        $menor = min($coleccion_numeros);
	    $mayor = max($coleccion_numeros);
	    if(intval($menor) > 0 && intval($mayor)>0)//valida colección números enteros positivos
        { 
		    $neo_coleccion = implode(", ", range($menor,$mayor));//nueva colección
	    } 
	    elseif(intval($menor) < 0 && intval($mayor)<0)
	    { 
	        echo "Ingresar coleccion numeros enteros positivos"; 
	    } 
	    return "salida : " .$neo_coleccion."<br>";
    }
}
//Parámetros Entrada
$cadena1 = "1, 2, 4, 5";
echo build($cadena1);
 
$cadena2 = "2, 4, 9";
echo build($cadena2);

$cadena3 = "55, 58, 60";
echo build($cadena3);
