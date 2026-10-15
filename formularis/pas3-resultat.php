<?php

/**
 * PAS 3 - UNA SOLA PAGINA
 * fins ara teniem dos fitxers per el formulari i el resultat
 * mirar com es fa la peticio y aixi fara una cosa o la altre
 * la primera visita es amb GET i quan es prem el boto
 * de enviar es amb POST
 */

$nom = '';
$correu = '';
$dia = '';

//var de control
$enviat = false;


//array predefinido $_SERVER nos da informacion del servidor
//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";


// si el request method es POST es que ya se ha 
// clicado al boton de enviar el formulario
// con method-post
if($_SERVER['REQUEST_METHOD'] === "POST"){
$nom    =   trim($_POST['nom'] ?? '');
$correu =   trim($_POST['correu'] ?? '');
$dia    =   trim($_POST['dia'] ?? '');
$enviat = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insctipcio al festival</title>
</head>
<body>
        <h1>inscripcio al festival</h1>

        <?php   if($enviat): ?>
            <p>inscripcio rebuda <?= $nom; ?> (<?= $correu ?>), dia <?= $dia ?></p>
        <?php endif; ?>

        <!-- <form action="pas3-resultat.php" method="post"> !-->
        <form method="post">
        <label for="name">nom</label>
        <input type="text" id="nom" name="nom">
        <label for="correu">correu</label>
        <input type="email" id="correu" name="correu">
        <label for="dia">dia</label>
        <select name="dia" id="dia">
            <option value="divendres">divendres</option>
            <option value="dissabte">dissabte</option>
        </select>
        <button>ya esta</button>
     </form>
    
</body>
</html>