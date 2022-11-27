<?php
    //Wyświetlanie błędów: 
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);

    echo md5('ala ma kota');
    echo '<br/>';
    echo sha1('ala ma kota');

    $nazwa = 'nasz_nowy_plik_tekstowy.txt';
    $uchwyt = fopen($nazwa,'a');

    $zawartosc = fputs($uchwyt, 'nowa zawartość pliku tekstowego');

    $uchwyt2 = fopen($nazwa,'r');

    $zawartosc2 = fread($uchwyt2, 1024);

    echo '<pre>';
    echo $zawartosc2;
    echo '</pre>';

    $nazwa1 = 'nasz_nowy_plik_tekstowy.txt';
    $plik1 = file($nazwa);

    for ($i = 0; $i < count($plik1); $i++){
        echo $plik1[$i] . '<br/>';
    }
?>