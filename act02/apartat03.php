<?php



$grups = array(
    'Txarango',
    'Mushkaa',
    'Julieta',
    'Figa Flawas',
    'Oques Grasses'
);

echo "<h2>Exercici 1</h2>";

if (in_array('Mushkaa', $grups, true)) {
    echo "Mushkaa està al cartell.<br>";
} else {
    echo "Mushkaa no està al cartell.<br>";
}

if (in_array('Estopa', $grups, true)) {
    echo "Estopa està al cartell.<br>";
} else {
    echo "Estopa no està al cartell.<br>";
}




function buscaGrup(array $llista, string $grup)
{
    foreach ($llista as $posicio => $nom) {
        if ($nom === $grup) {
            return $posicio;
        }
    }

    return -1;
}

echo "Posició de Mushkaa: " . buscaGrup($grups, 'Mushkaa') . "<br>";
echo "Posició d'Estopa: " . buscaGrup($grups, 'Estopa') . "<br>";




$assistents = array(
    'Txarango' => 5100,
    'Mushkaa' => 1850,
    'Julieta' => 2100,
    'Figa Flawas' => 3600,
    'Oques Grasses' => 4200
);

$ordenatValor = $assistents;
$ordenatValorInvers = $assistents;
$ordenatClau = $assistents;
$ordenatClauInvers = $assistents;

asort($ordenatValor);
arsort($ordenatValorInvers);
ksort($ordenatClau);
krsort($ordenatClauInvers);

echo "<h2>Exercici 2</h2>";

echo "<h3>asort()</h3>";
echo "<pre>";
print_r($ordenatValor);
echo "</pre>";

echo "<h3>arsort()</h3>";
echo "<pre>";
print_r($ordenatValorInvers);
echo "</pre>";

echo "<h3>ksort()</h3>";
echo "<pre>";
print_r($ordenatClau);
echo "</pre>";

echo "<h3>krsort()</h3>";
echo "<pre>";
print_r($ordenatClauInvers);
echo "</pre>";






echo "<h2>Exercici 3</h2>";

$barrejat = $assistents;

shuffle($barrejat);

echo "<pre>";
print_r($barrejat);
echo "</pre>";



$grupsSorteig = array(
    'Txarango',
    'Mushkaa',
    'Julieta',
    'Figa Flawas',
    'Oques Grasses'
);

shuffle($grupsSorteig);

echo "<h3>Ordre del sorteig</h3>";

echo "<ol>";

foreach ($grupsSorteig as $grup) {
    echo "<li>$grup</li>";
}

echo "</ol>";

?>
```