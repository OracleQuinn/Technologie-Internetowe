<?php
    echo '<h1><font color=RoyalBlue>09.10.2022</font></h1>';
?>

<?php
    echo '<h3><font color=LightCoral>Pobieramy od uzytkownika informację o wymiarze. Skrypt zostanie wywkorzystany po wywołaniu tabliczki mnozenia.</font></h3>';

    include_once('Labs_2.2.php');

    $size = $_POST['size'];
    $radio = $_POST['radioBtn'];
    $ch_box = $_POST['ch_box'];

    if (isset($ch_box)){
        if ($radio == 1){
            table($size, 1, 3);
        }
        elseif ($radio == 2){
            table($size, 2, 3);
        }
        else {
            table($size, $size, 3);
        }
    }
    else {
        echo 'Tabliczka mnozenia wyświetla się jeeli checkbox jest wybrany.' . '<br/>';
    }
?>