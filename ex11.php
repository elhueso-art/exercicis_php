<?php

$cadena = "Hola";
$cadena[0] ="C";
echo "ahora cadena es asi: $cadena";

$cadena = "aquesta cadena te moltes lleteres ";
$num_caracters = strlen($cadena);

echo " <br> El total de caracteres es: " . $num_caracters;

//strpos ----> retorna la casella on es troba la subcadena dins la cadena pasada
// sempre retorna la primera ocurrencia
$email = "tusmuelas@gmail.com";
echo "<br> posicio @ " . strpos($email, "@");

//strcmp ---> string compare, compra dos cadenas
// si retorna 0 es igual
// si retorna <0 la primera es mas pequeña
// si retorna >0 la primera cadena es mas grande


echo "<br> Utilizamos strcmp" . strcmp("Alejandra", "Jose Juan");


//substr --> retorna una subcadena de caracteres de una cadena a partir d'una posicio especificada fins al final o del tamany especificat
//la cadena original no pateix cap modificacio

$cadena = "PHP es un llenguatje de mierda";
echo "<br> el substr de 0 a 3 es: ". substr($cadena, 0, 3);
echo "<br> el substr de 21 es " . substr($cadena, 21);


//trim ----> eliminar los espacios en blanco y saltamos le lilia que hay al principio y el final de una cadena

echo "<br> ejemplo de trim; " . trim("                                                 tu madre");


//ltrim ---> elimina los espaios que hay en blanco al principio de la cadena

echo "<br> ejemplo de trim; " . ltrim("                                                 tu madre");


//str_replace($antiga,$nova, $cadena) ----> sustituye la cadena antigua por la cadena nueva dentro de cadena

$cadena = "PHP es facil";
$antiga = "es sencillo";
$nova = "no es dificil";
echo "<br> ejemplo de str_replace " . str_replace($antiga, $nova, $cadena);


//ereg_replace / eregi_replace()
//strtolower($cadena) ---> pasa la cadena a minuscula
//strtoupper($cadena) ---> pasa la cadena a mayuscula

//explode ----> permet dividir una cadena segons un caracter o patro


// busca en php.net la funcion: str_word_content()  y pon un ejemplo
// busca en php.net la funcion: levenshtein() y pon un ejemplo
// busca que es el operador ternario y pon un ejemplo
// explicar que hace esta funcion function 
funcionMultipleReturns($v1, $v2, $v3){
    $v1 = "variable1";
    $v2 = "variable2";
    $v3 = "variable3";

    return array ($v1, $v2, $v3);
}