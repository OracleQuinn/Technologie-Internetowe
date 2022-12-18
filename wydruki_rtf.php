<?php
header('Content-type: application/msword');
require('config.php');

    $polaczennie = new mysqli($server, $db_user, $db_password, $db_name);
    
    $sql = "SELECT * FROM Studenci WHERE id_studenta = $_GET[id_s]";

    $wynik = $polaczennie->query($sql);

    $rekord=$wynik->fetch_assoc();

    $nazwa = 'Bilet_lotniczy.rtf';
    $plik = fopen($nazwa, 'r');
    $dane = fread($plik, filesize($nazwa));

    $dane = str_replace('<<nazwisko>>', $rekord['nazwisko'], $dane);
    $dane = str_replace('<<imie>>', $rekord['imie'], $dane);

    echo $dane;

    //Pobrany plik z rozszerzeniem php otwieramy przy pomocy np. Worda.
?>