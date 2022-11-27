<?php
    //Wyświetlanie błędów: 
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);

    $nazwa = 'http://www.ue.katowice.pl';
    $plik = file($nazwa);

    for ($i=0; $i < count($plik); $i++) { 
        echo $plik[$i];// . '</br>';
    }
?>