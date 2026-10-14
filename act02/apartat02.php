
<?php


$grups = array(
    'Txarango',
    'Mushkaa',
    'Julieta',
    'Figa Flawas',
    'Oques Grasses'
);




echo "<h2>Exercici 1</h2>";

echo "<h3>Llista de grups</h3>";

<ul>
<?php foreach ($grups as $grup): ?>
    <li><?= $grup ?></li>
<?php endforeach; ?>
</ul>

<h3>Llista amb posició</h3>

<ul>
<?php foreach ($grups as $index => $grup): ?>
    <li>Posició <?= $index ?>: <?= $grup ?></li>
<?php endforeach; ?>
</ul>


<?php



$estils = array(
    'Txarango' => 'Mestissatge',
    'Mushkaa' => 'Pop urbà',
    'Julieta' => 'Pop',
    'Figa Flawas' => 'Rumba',
    'Oques Grasses' => 'Pop'
);

echo "<h2>Exercici 2</h2>";

?>

<table border="1">
    <tr>
        <th>Grup</th>
        <th>Estil</th>
    </tr>

    <?php foreach ($estils as $grup => $estil): ?>
        <tr>
            <td><?= $grup ?></td>
            <td><?= $estil ?></td>
        </tr>
    <?php endforeach; ?>

    <tr>
        <td><strong>Total</strong></td>
        <td><strong><?= count($estils) ?></strong></td>
    </tr>
</table>


<?php


echo "<h2>Exercici 3</h2>";

reset($estils);

do {
    $grup = key($estils);
    $estil = current($estils);

    echo "Grup: $grup - Estil: $estil<br>";

} while (next($estils));






function recorrerInvers(array $llista)
{
    end($llista);

    do {
        $index = key($llista);
        $valor = current($llista);

        echo "Posició $index: $valor<br>";

    } while (prev($llista));
}

echo "<h2>Exercici 4</h2>";

recorrerInvers($grups);

echo "<h3>Array original</h3>";

foreach ($grups as $index => $grup) {
    echo "Posició $index: $grup<br>";
}



?>
```