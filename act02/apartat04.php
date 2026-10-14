<?php
$concerts = [
    [
        'nom' => 'Oques Grasses',
        'escenari' => 'Gran',
        'hora' => '22:30',
        'assistents' => 4200,
        'preu' => 28.0
    ],
    [
        'nom' => 'inshallah',
        'escenari' => 'Petit',
        'hora' => '20:00',
        'assistents' => 1850,
        'preu' => 18.0
    ],
    [
        'nom' => 'Figa Flawas',
        'escenari' => 'Gran',
        'hora' => '00:30',
        'assistents' => 3600,
        'preu' => 24.0
    ],
    [
        'nom' => 'Julieta',
        'escenari' => 'Petit',
        'hora' => '21:15',
        'assistents' => 2100,
        'preu' => 20.0
    ],
    [
        'nom' => 'Txarango',
        'escenari' => 'Gran',
        'hora' => '23:30',
        'assistents' => 5100,
        'preu' => 32.0
    ],
    [
        'nom' => 'La Ludwig Band',
        'escenari' => 'Petit',
        'hora' => '18:45',
        'assistents' => 900,
        'preu' => 15.0
    ]
];

echo "<h2>Exercici 1</h2>";

?>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Escenari</th>
        <th>Hora</th>
        <th>Assistents</th>
        <th>Preu</th>
    </tr>

    <?php foreach ($concerts as $concert): ?>

        <tr>
            <td><?= $concert['nom'] ?></td>
            <td><?= $concert['escenari'] ?></td>
            <td><?= $concert['hora'] ?></td>
            <td><?= $concert['assistents'] ?></td>
            <td><?= number_format($concert['preu'], 2) ?> €</td>
        </tr>

    <?php endforeach; ?>

</table>

<?php



echo "<p>El tercer concert és: " . $concerts[2]['nom'] . "</p>";



$escenaris = [
    'Gran' => [
        'capacitat' => 6000,
        'coberta' => 'no',
        'ubicacio' => 'Pista central',
    ],
    'Petit' => [
        'capacitat' => 2500,
        'coberta' => 'sí',
        'ubicacio' => 'Pavelló',
    ],
];

echo "<h2>Exercici 2</h2>";



echo "Capacitat de l'escenari Gran: ";
echo $escenaris['Gran']['capacitat'];
echo "<br><br>";




foreach ($escenaris as $escenari => $dades) {

    echo "<h3>$escenari</h3>";

    foreach ($dades as $camp => $valor) {
        echo "$camp: $valor<br>";
    }
}

?>
```