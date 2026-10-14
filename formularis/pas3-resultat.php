<?php

/**
 * PAS 3 - UNA SOLA PAGINA
 * fins ara teniem dos fitxers per el formulari i el resultat
 * mirar com es fa la peticio y aixi fara una cosa o la altre
 * la primera visita es amb GET i quan es prem el boto
 * de enviar es amb POST
 */

$nom = ''
$correu = ''
$dia = ''

//var de control
$enviat = false;


//array predefinido $_SERVER nos da informacion del servidor
echo "<pre>";
print_r($_SERVER);
echo "</pre>";


?>