<?php 
    echo 'Hola';
    echo 'Hola', ' ', 'mon';
    echo '<p>Text</p>';
    
    print 'Hola'; //retorna 1
    var_dump($x); // per depurar
    print_r($dades); // llegible

    $nom = 'Aina';
    $edat = 19;
    $actiu = true;
    $nom = 'Bernat'; //es pot canviar
    $total = $edat +1;

    echo $nom;

    $x = 5;     // int
    $x = 'cine'; //ara string
    $a = '10' + 5; // 15 (int)
    $b = '10' . 5; // 105 (string)

    var_dump($a, $b);
    $nom = 'Aina';
    echo 'hola $nom '; // sortira per pantalla hola $nom
    echo "hola $nom"; // sortira per pantalla hola aina


    $nom = 'Bernat';
    $punts = 8;
    echo 'hola ' . $nom . ' tens '. $punts . ' punts'; //interpretacio amb .
    echo "hola $nom tens $punts punts";                // interpolacio amb "
    echo "hola {$nom} tens {$punts} punts";            // interpolacio amb claus


    define ('IVA', 0.2);
    const BOTIGA = 'Ca la web';
    echo BOTIGA; // sense $
    $total = $base * (1 * IVA);
    
    // IVA = 0.10 error historico

    $missatge = 'Hola'; 


    function saludar(){
        echo $missatge;
        $intern = 'adeu';
    }

    saludar();
    echo $intern;

    // declare (strict_type=1) tendras que ser estricto
    // int_net ('display errors', '1')
    // error_reporting(B_ALL)
    // setlocale()
 
