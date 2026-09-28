<?php


/*





















*/


$alumnes = [
    [
        "nom" => "Aina",
        "curs" => "DAW1",
        "edat" => 18,
        "nota_mitjana" => 6.7
    ],
    [
        "nom" => "Marc",
        "curs" => "DAW1",
        "edat" => 19,
        "nota_mitjana" => 4.5
    ],
    [
        "nom" => "Laura",
        "curs" => "DAW1",
        "edat" => 18,
        "nota_mitjana" => 7.7
    ],
    [
        "nom" => "Pau",
        "curs" => "DAW2",
        "edat" => 20,
        "nota_mitjana" => 8
    ],
    [
        "nom" => "Clara",
        "curs" => "DAW1",
        "edat" => 18,
        "nota_mitjana" => 6
    ],
    [
        "nom" => "Jordi",
        "curs" => "DAW2",
        "edat" => 21,
        "nota_mitjana" => 7
    ],
    [
        "nom" => "Marta",
        "curs" => "DAW1",
        "edat" => 19,
        "nota_mitjana" => 9
    ],
    [
        "nom" => "Eric",
        "curs" => "DAW2",
        "edat" => 20,
        "nota_mitjana" => 2
    ],
    [
        "nom" => "Nora",
        "curs" => "DAW1",
        "edat" => 18,
        "nota_mitjana" => 4
    ],
    [
        "nom" => "David",
        "curs" => "DAW2",
        "edat" => 21,
        "nota_mitjana" => 9
    ]
];

?>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Curs</th>
        <th>Edat</th>
        <th>Mitja</th>
    </tr>

    <?php foreach ($alumnes as $alumne) : ?>
        <tr>
            <td><?php echo $alumne["nom"]; ?></td>
            <td><?php echo $alumne["curs"]; ?></td>
            <td><?php echo $alumne["edat"]; ?></td>
            <td><?php echo $alumne["nota_mitjana"]; ?></td>
        </tr>
    <?php endforeach;?>

</table>



