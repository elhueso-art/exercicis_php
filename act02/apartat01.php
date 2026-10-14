<?php

// EXERCICI 1: Les tres maneres

// Assignació directa
$grups[0] = 'Txarango';
$grups[1] = 'Mushkaa';
$grups[2] = 'Julieta';
$grups[8] = 'Figa Flawas';
$grups[] = 'Oques Grasses';

// Amb array()
$estils = array('Pop', 'Rock', 'Rumba');

// Amb range()
$edicions = range(2019, 2026);

// Amb explode()
$paraules = explode(' ', 'El festival torna aquest estiu');

echo "<h2>Exercici 1</h2>";

echo "<pre>";
print_r($grups);
print_r($estils);
print_r($edicions);
print_r($paraules);
echo "</pre>";

// Diferents formes de mostrar un array
echo "<h3>print_r()</h3>";
print_r($grups);

echo "<h3>var_dump()</h3>";
var_dump($grups);

echo "<h3>var_export()</h3>";
var_export($grups);

/*
print_r() mostra el contingut de l'array de forma llegible.
var_dump() mostra també el tipus i la mida dels valors.
var_export() mostra l'array com a codi PHP.
El grup següent al 8 va a la posició 9 perquè PHP busca
la posició numèrica més alta i afegeix 1.
*/


// EXERCICI 2: L'array associatiu

$estils = array(
    'Txarango' => 'Mestissatge',
    'Mushkaa' => 'Pop urbà'
);

$estils['Julieta'] = 'Pop';
$estils['Figa Flawas'] = 'Rumba';

echo "<h2>Exercici 2</h2>";

echo "L'estil de Txarango és: " . $estils['Txarango'];

$estils['Oques Grasses'] = 'Pop';

echo "<pre>";
print_r($estils);
echo "</pre>";

echo "Total de grups: " . count($estils);


// EXERCICI 3: Esborrar una casella

$grups = array(
    'Txarango',
    'Mushkaa',
    'Julieta',
    'Figa Flawas',
    'Oques Grasses'
);

echo "<h2>Exercici 3</h2>";

echo "Abans de borrar: " . count($grups) . "<br>";

unset($grups[2]);

echo "<pre>";
print_r($grups);
echo "</pre>";

echo "Després de borrar: " . count($grups) . "<br>";

$grups[] = 'La Ludwig Band';

echo "<pre>";
print_r($grups);
echo "</pre>";

/*
Després d'un unset() queda un forat a l'array.
Per això un for de 0 a count()-1 pot intentar accedir
a una posició que no existeix.
*/
?>