<?php

/**
 * PHPDoc: 
 * pas 1: les dades arriven per GET
 * mirar la url si van les dades
 */



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultAT PAS1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>que ha arribar al sevidor PHP</h1>

    <h2>$_GET</h2>
    <pre><?php print_r($_GET) ?></pre>


    <h2>$_POST</h2>
    <pre><?php print_r($_POST) ?></pre>
    <p><a href="pas1-formulari.html">tornar</a></p>
</body>
</html>