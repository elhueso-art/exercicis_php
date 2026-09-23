<?php 
const NOMBOTIGA = 'BOTIGA GUAY';
$preu = 99.99;
const IVA = 0.21;
$ivatotal = $preu *IVA;
$nomp = 'Producte 1';
$total = $preu + $ivatotal;
$descripciop = 'Descripcio del producte';
$estoc = 'Numero de unitats disponibles';
$nestoc = 5;
$ref ='CAM-123456º';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= NOMBOTIGA ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><?= NOMBOTIGA ?></h1>
        <p>esto es una tienda online guay</p>
    </header>
    
    <main>
        <article class="producte">
            <h2><?= $nomp ?></h2>
            <p class="descripcio"><?= $descripciop ?></p>
            <p class="preu">Preu sense IVA: <?= $preu ?></p>
            <p class="preu">IVA (21%): <?= $ivatotal ?></p>
            <p class="total">TOTAL: <?= $total ?></p>
            <p class="estoc"><?= $estoc .' '. $nestoc ?></p>
            <p class="ref"><?= $ref ?></p>
        </article>
    </main>

    <footer>
        <p>footer de la tienda guay S.L</p>

    </footer>


</body>
</html>

<!-- cambiar formato a php
 subir datos al php arriba del todo del archivo
 canviar cada valor en el html per  i hacer que el IVA 
 se calcule solo 
 define las constantes IVA, BOTIGA, MONEDA I DESCOMPTE_SOCI
 con define() o const
 sustituye el index.php todos los valores fijos per los constantes
 intenta cambiar una constante a media pagina i escribe el error que te da 
 -->