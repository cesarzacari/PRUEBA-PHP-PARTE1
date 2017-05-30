<?php
/**
* Descripci�n Reemplaza cada letra de la cadena con la letra siguiente en el alfabeto
*
* @author     C�sar Z�cari
* @copyright  C�sar Z�cari
* @version    1.0
**/
function build($string)
{
    $abecedario = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', '�', 'o', 'p', 'q', 'r','s', 't', 'u', 'v', 'w', 'x', 'y', 'z', 
	                    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', '�', 'O', 'P', 'Q', 'R','S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
	
	echo "entrada : ".$string."&nbsp;&nbsp;&nbsp;&nbsp;";
	$neo_letra="";
	$neo_cadena = "";
	$limite = strlen($string);//identifica longitud de cadena, para no sobrecargar en cada iteraci�n del for
	for ($i=0;$i<$limite;$i++)//recorre cadena
	{
	    if(ctype_alpha($string[$i]))//verifica caracteres alfab�ticos
	    {
            $posicion = array_search($string[$i],$abecedario);
		    //Identifica posici�n en abecedario
		    if($posicion == 26)//Valida "z" min�scula
		    {
		        $neo_letra = $abecedario[0];
		    }
		    else if($posicion == 53)//Valida "Z" may�scula
		    {
		        $neo_letra = $abecedario[27];
		    }
		    else
		    {
		        $neo_letra = $abecedario[$posicion +1];
		    }
	    }
	    else//verifica caracter no alfab�tico
	    {
	        $neo_letra =$string[$i];
	    }
	    //nueva cadena
	    $neo_cadena = $neo_cadena . $neo_letra;
	}
    return "salida : " .$neo_cadena."<br>";
}
//Par�metros Entrada
 $cadena1 = "123 abcd*3";
 echo build($cadena1);
 
 $cadena2 = "**Casa 52";
 echo build($cadena2);
 
 $cadena3 = "**Casa 52Z";
 echo build($cadena3);
