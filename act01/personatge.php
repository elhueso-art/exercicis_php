<?php


const NOM_JOC = "Llegendes d'Aether";
const VIDA_MAXIMA = 1000;
const EXP_PER_NIVELL = 500;
const FORCA_MAXIMA = 200;
const HERIR = 30;




$nom = "Kael";
$classe = "Guerrer";
$nivell = 12;
$vidaActual = 250;
$forcaActual = 160;
$experiencia = 350;
$atacBase = 80;





$percentatgeVida = ($vidaActual / VIDA_MAXIMA) * 100;
$percentatgeForca = ($forcaActual / FORCA_MAXIMA) * 100;


$expFalta = EXP_PER_NIVELL - $experiencia;


$poderAtac = $atacBase + ($nivell * 10);




if ($percentatgeVida < HERIR) {
    $estat = "Ferit";
} else {
    $estat = "Sa";
}




$ampladaVida = round($percentatgeVida, 1);
$ampladaForca = round($percentatgeForca, 1);
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Fitxa de personatge</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #222;
            color: white;
        }

        .fitxa {
            width: 500px;
            margin: 40px auto;
            padding: 25px;
            background-color: #333;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        .barra {
            width: 100%;
            height: 20px;
            background-color: #555;
            margin-bottom: 15px;
        }

        .vida {
            height: 20px;
            background-color: red;
        }

        .forca {
            height: 20px;
            background-color: blue;
        }
    </style>
</head>

<body>

<div class="fitxa">

    <h1><?php echo NOM_JOC; ?></h1>

    <!-- Informació principal del personatge -->
    <h2><?php echo $nom; ?></h2>

    <p>Classe: <?php echo $classe; ?></p>
    <p>Nivell: <?php echo $nivell; ?></p>
    <p>Estat: <?php echo $estat; ?></p>

    <!-- Barra de vida -->
    <p>Vida: <?php echo $vidaActual; ?> / <?php echo VIDA_MAXIMA; ?></p>

    <div class="barra">
        <span class="vida" style="display: block; width: <?php echo $ampladaVida; ?>%;"></span>
    </div>

    <p>Percentatge de vida: <?php echo round($percentatgeVida, 1); ?>%</p>

    <!-- Barra de força -->
    <p>Força: <?php echo $forcaActual; ?> / <?php echo FORCA_MAXIMA; ?></p>

    <div class="barra">
        <span class="forca" style="display: block; width: <?php echo $ampladaForca; ?>%;"></span>
    </div>

    <p>Percentatge de força: <?php echo round($percentatgeForca, 1); ?>%</p>

    <!-- Experiència i atac -->
    <p>Experiència: <?php echo $experiencia; ?></p>
    <p>Experiència que falta: <?php echo $expFalta; ?></p>
    <p>Poder d'atac: <?php echo $poderAtac; ?></p>

    <?php
   
    echo "El personatge $nom és de classe $classe.";


    echo '<p>El nivell actual és: ' . $nivell . '</p>';
    ?>

</div>

</body>
</html>