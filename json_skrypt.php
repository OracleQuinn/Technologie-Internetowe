<?php
    $link = 'http://api.sunrise-sunset.org/json?lat=50.258380&lng=19.044658&date=today';
    $plik = fopen($link, 'r');
    $json = fread($plik, 1024);

    require('config.php');

    $polaczennie = new mysqli($server, $db_user, $db_password, $db_name);
    
    $sql = "SELECT * FROM Studenci WHERE id_studenta = $_GET[id_s]";

    $wynik = $polaczennie->query($sql);

    $rekord=$wynik->fetch_assoc();

    echo $json;

    echo '<hr/>';

    $dane = json_decode($json, false); #jak jest true to dostejemy balicę, jak jest false to obiekt
    // $dane = json_decode($json, true);
    var_dump($dane); //Bo json_decode może zwracać tablicę tablicę
    echo '<br/><br/>';
    echo 'Wschód: ' . $dane->results->sunrise;

    echo '<hr/>';
    echo json_encode($rekord);
?>