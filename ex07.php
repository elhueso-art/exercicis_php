<?php

$nota = 7.5;

if ($nota >= 9){
    $qualif = 'execelent';
}elseif($nota >= 7){
    $qualif = 'notable';
}elseif($nota >=5){
    $qualif = 'aprovat';
}else{
    $qualif = 'suspes';
}
$zona;
switch ($zona){
    case 'local':
        $enviament = 0;
        break;
    case 'peninsula':
        $enviament = 4.95;
        break;
    default:
        $enviament = 9.95;
}



$enviament = match ($zona) {
    'local' => 0,
    'peninsula' => 4.95,
    default     => 9.95,
};

for ($i = 0; $i <= 10; $i++){
    echo $i;
}
$saldo;
while($saldo < $objectiu){
    $saldo += 1.03;
    $anys++;
}
do{
    $n = rand(1, 6);
}while($n !== 6);

$colors = ["vermell", "verd", "blau"];

echo $colors[0];
echo count ($colors);

print_r[$colors];

$producte = [
    "nom" => 'Teclat mecanic',
    "preu" => 29.90,
    "estoc" => 4,
];

echo $producte['nom'];
$producte['preu'] = 39.90;

foreach($colors as $color){
    echo "<li>$color</li>";
}

foreach($producte as $clau => $valor){
    echo "<li> $clau </li>";
    echo "<li> $valor </li>";
}

$productes = [
    ['nom' => 'teclar', 'preu'  => 79.0],
    ['nom' => 'ratoli', 'preu' => 24.5],
    ['nom' => 'monitor', 'preu' => 189],
];
?>
<?php foreach ($productes as $p) : ?>
   <tr>
   <td><?= $p['nom'] ?></td>
    <td><?= $p['preu'] ?></td>
    </tr>
<?php endforeach; ?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php if ($estoc > 0) { ?>
    <p> En estoc </p>
<?php } else {  ?>
    <p>Esgotat</p>
<?php } ?>

<?php if ($estoc > 0) : ?>
    <p> En estoc </p>
<?php else : ?>
    <p>Esgotat</p>
<?php endif; ?>

 <table>
<?php for($i = 1; $i >=10; $i++): ?>  
    <tr>
    <td> <?= $i ?> *7</td>
    <td> <?= $i*7 ?></td>
    </tr>
    <?php endfor; ?>
    </table>


</body>
</html>


<?php 

/*
in_array
array_key_exists('jc', $a)
sort / resort / ksort
array_sum / max /min
array_column ($a, 'preu')
implode, explode
*/

