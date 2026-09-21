<?php

    $nom = "Pepito";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>treh formah</title>
    </head>
    <body>
        <h1>Tres formas y el mismo resultado</h1>
         
        <?php echo "<p>Hola $nom</p>";?>
        
        <!-- Forma 2 html esta fuera php solo pone valor -->
        <p> Hola <?= $nom ?></p>

        <!-- Forma 3 el clasico el de toda la vida el de siempre -->
         <p>Hola Pepito</p>

    </body>
    </html>