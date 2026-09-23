<?php
//  3 errores de logica y 3 de sintaxis
//  arregla los errores

// nom = 'Aina'; falta el dolar
$nom = 'Aina';
$assignatura = 'Desenvolupament web'; // falta el punto y coma

$nota1 = 7;
$nota2 = 9;
$mitjana = ($nota1 + $nota2) / 2; // parentesis para hacer antes la suma que la division

echo '<h1>Bulleti de notes</h1>';
echo "<p> Alumna: $nom</p>"; // con una comilla simple no deberia leerse el nombre
echo '<p> Assignatura ' . $assignatura . '</p>'; // para concatenar variables y texto se usan puntos y no el mas
echo "<p>Mitjana: $mitjana</p>"; // las comillas se abren y no se cierran

echo '<p> generat el ' . date('d/m/Y') . '</p>';
