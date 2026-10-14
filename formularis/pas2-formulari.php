<?php



/**PAS 2 - RECOLLIR LES DADES CORRECTAMENT
 * 
 * 
 * 
 * 
 */



/**trim para sacar los espacios y inicializar si la variable venia vacia */
$nom    =   trim($_POST['nom'] ?? '');
$correu =   trim($_POST['correu'] ?? '');
$dia    =   trim($_POST['dia'] ?? '');

echo "<p>Hola" . $_POST('nom') . "</p>";