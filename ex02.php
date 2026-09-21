<?php
    // declaramos una const NO CAMBIA DE VALOR
    const IVA = 0.21;

    $producte = 'Teclat';
    $base = 79.90;
    $estoc = 4;
    //funcion predefinida para redondear
    $total = round($base * (1 + IVA), 2);

    $nom = 'Bernat';
    $edat = 67;
    $direccio = 'carrer alhamdulliah bishmillah aberradahah';
?>

<h2><?php echo $producte ?></h2>

<p> preu amb IVA <?= $total ?> EUR</p>
<p>Disponibilat <?= $estoc ?></p>


<h2><?= $nom ?></h2>
<p> tens <?= $edat ?> anys</p>
<p>y vius al <?= $direccio ?></p>